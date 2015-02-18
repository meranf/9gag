<?php

// Include required 
include_once("config.php");

/* This call generate when user login to the app. Please note that, client will first check user data in cache. If they got the data than it means this is an existing user and will not generate the login call. If the user is new or cache has been cleared than client make this call. Once received the data from call, client should save that data in cache so that they can use it in future. */
if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && $_REQUEST["type"] == 'login'  )
{
		$sql = "Select IFNULL(COUNT(userId),0) as userexist , id from user where email = '".$_REQUEST["email"]."' and password = '".md5($_REQUEST["password"])."' ";

		$row = mysql_fetch_array(db_execute_return($sql));

		if($row["userexist"]<1)
		{
			$userExist = false;
			$userData['status'] = 'error';
			
			//Convert User Data into Json
			$data = json_encode($userData);
			
			//Return User Data
			echo $data;

		}
		else
		{
			$userExist = true;
			SetData($key,$userExist);
			 
			$userData = getUserDetail($row["id"]);
			 $_SESSION['s_user_id'] = $row["id"];
			 $_SESSION['s_user_name'] = $userData["name"];
			 $_SESSION['s_user_email'] = $userData["email"];
			 
			$userData['status'] = 'success';
			
			//Convert User Data into Json
			$data = json_encode($userData);
			
			//Return User Data
			echo $data;
		}
}
if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && isset($_REQUEST["name"]) && $_REQUEST["type"] == 'signup'  )
{
		$sql = "Select IFNULL(COUNT(userId),0) as userexist , userId from user where email = '".$_REQUEST["email"]."' ";

		$row = mysql_fetch_array(db_execute_return($sql));

		if($row["userexist"]<1)
		{
 			//Save data in database
			$date = date("Y-m-d H:i:s");
			$sql = "INSERT INTO `user` (`id`,`userId`, `name`, `email`, `type`, `password`, `currentLocation`, `gender`, `joinDate`) VALUES (NULL, 0,'".addslashes($_REQUEST["name"])."', '".$_REQUEST["email"]."','web' ,'".md5($_REQUEST["password"])."' , '', 'Male', '".$date."');";
			db_execute($sql);
			
			$sql = "Select * from user where email = '".$_REQUEST["email"]."' ";

			$row = mysql_fetch_array(db_execute_return($sql));


			 $_SESSION['s_user_id'] = $row["id"];
			 $_SESSION['s_user_name'] = $_REQUEST["name"];
			 $_SESSION['s_user_email'] = $_REQUEST["email"];
			 
			$row['status'] = 'success';
			
			//Convert User Data into Json
			$data = json_encode($row);
			
			//Return User Data
			echo $data;

		}
		else
		{

			$userExist = false;
			$userData['status'] = 'error';
			
			//Convert User Data into Json
			$data = json_encode($userData);
			
			//Return User Data
			echo $data;

			
		}
}
if(isset($_REQUEST["email"]) && $_REQUEST["type"] == 'reset'  )
{
		$sql = "Select IFNULL(COUNT(id),0) as userexist , id , type from user where email = '".$_REQUEST["email"]."'  ";

		$row = mysql_fetch_array(db_execute_return($sql));


			$userData['status'] = 'error';
			$userData['msg'] = 'email address not exists';

		if($row["userexist"]<1)
		{
			$userExist = false;
			$userData['status'] = 'error';
			
			//Convert User Data into Json
			$data = json_encode($userData);
			
			//Return User Data
			echo $data;

		}
		else
		{
			$userExist = true;
			SetData($key,$userExist);
			

			if($row['type'] == 'web'){
			// send email to user
				$userData['status'] = 'success';
				$userData['msg'] = 'An email has been sent to your email address with password';
			
			//Convert User Data into Json

			}else{

					$userData['status'] = 'error';
					$userData['msg'] = 'You are connected via Social login plugin, please connect with Facebook or Google Connect or signup with new email';
			
			//Convert User Data into Json
			}

		
			$data = json_encode($userData);
			
			//Return User Data
			echo $data;

		}

}
if(isset($_REQUEST["userId"]) && isset($_REQUEST["accessToken"]))
{
	//Check if user exist in database/memcache or not
	$userExist = userExist($_REQUEST["userId"]);
	
	//If user exist than get their details from database or memcache
	if($userExist==true)
	{
		//Get user details from database/memcache
		$userData = getUserDetails($_REQUEST["userId"]);
		$userData['first_time'] = 0;
	}
	else
	{
		//Get user details from facebook
		$user = getUserDetailsFromFacebook($_REQUEST["userId"], $_REQUEST["accessToken"]);	
	
		//Create new record in database
		$userData = createNewUser($user,$_REQUEST["userId"]);
		$userData['first_time'] = 1;
	}
	
	 $_SESSION['s_user_id'] = $userData["id"];
	 $_SESSION['s_user_name'] = $userData["name"];
	 $_SESSION['s_user_email'] = $userData["email"];
	 
	$userData['status'] = 'success';
	
	//Convert User Data into Json
	$data = json_encode($userData);
	
	//Return User Data
	echo $data;
}

/* Required Functions */

//Check user exist in database or not
function userExist($userId)
{
	//Memcache Key
	$key = "userExist".$userId;
	SetData($key,false);
	
	$data = GetData($key);
	
	if($data==false)
	{
		$sql = "Select IFNULL(COUNT(userId),0) as userexist from user where userId = ".$userId;
		$row = mysql_fetch_array(db_execute_return($sql));
		if($row["userexist"]<1)
		{
			$userExist = false;
		}
		else
		{
			$userExist = true;
			SetData($key,$userExist);
		}
	}else
	{
		$userExist = true;
	}
	return $userExist;
}
//Get user details from facebook
function getUserDetailsFromFacebook($userId, $accessToken)
{
	$url = "https://graph.facebook.com/me?access_token=".$accessToken;
	//$url = "http://developer.cygnismedia.com/getfacebookinfo/test.php?userId=$userId&access_token=$accessToken";
	//Get data from facebook
	try{
	$jsonData = file_get_contents($url);
	}catch(Exception $e){}
	
	//Convert json in to array
	$array = json_decode($jsonData);
	
	//Return array
	return $array;
}
//Get user details from database/memcache
function getUserDetails($userId)
{
	$key = "USER".$userId;
	SetData($key, false);
	$data = GetData($key);
	
	if($data==false)
	{
		$sql = "Select * from user where userId = ".$userId;
		$data = mysql_fetch_array(db_execute_return($sql));
		SetData($key, $data);
	}
	
	return $data;
}
function getUserDetail($id)
{
	$data = false;
	
	if($data==false)
	{
		$sql = "Select * from user where id = ".$userId;
		$data = mysql_fetch_array(db_execute_return($sql));
		SetData($key, $data);
	}
	
	return $data;
}

//Create New User In database
function createNewUser($user,$userId)
{
	//Memcache Key
	$array = array();
	if ($userId>0 && $user->id!='0')
	{
	$key = "USER".$userId;
	
	//Save data in database
	$date = date("Y-m-d H:i:s");
	$sql = "INSERT INTO `user` (`id`,`userId`, `name`, `email`, `type`,`password`, `currentLocation`, `gender`, `joinDate`) VALUES (NULL,'".$user->id."', '".addslashes($user->name)."', '".$user->email."', 'facebook','', '".$user->location->name."', '".$user->gender."', '".$date."');";
	db_execute($sql);
	
	//Create Array
	$array["userId"]=$user->id;
	$array["name"]=addslashes($user->name);
	$array["email"]=$user->email;
	$array["currentLocation"]=$user->hometown->name;
	$array["gender"]=$user->gender;
	$array["joinDate"]=$date;
	
	//Save data in cache
	//SetData($key,$array);
	
	}
	
	//return data
	return $array;
}
//Calculate Age
function calculateAge($birthday){
    return floor((time() - strtotime($birthday))/31556926);
}
?>