<?php

// Include required 
include_once("config.php");

/* This call generate when user login to the app. Please note that, client will first check user data in cache. If they got the data than it means this is an existing user and will not generate the login call. If the user is new or cache has been cleared than client make this call. Once received the data from call, client should save that data in cache so that they can use it in future. */
if(isset($_REQUEST["email"]) && isset($_REQUEST["password"]) && $_REQUEST["type"] == 'login'  )
{
		$sql = "Select IFNULL(COUNT(userId),0) as userexist , id, userId from user where email = '".$_REQUEST["email"]."' and password = '".md5($_REQUEST["password"])."' ";

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
 
			 $_SESSION['userId'] = $row["userId"];
			 
			 $_SESSION['s_user_name'] = $userData["name"];
			 $_SESSION['s_user_email'] = $userData["email"];
			 $_SESSION['type'] = 'web';
			 $_SESSION['pic'] =  $userData["pic_path"];
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
			 $_SESSION['userId'] = $row["userId"];
				$_SESSION['pic'] =  $row["pic_path"];
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
if(isset($_REQUEST["email"]) && $_REQUEST["type"] == 'google' &&
	isset($_REQUEST["id"]) && isset($_REQUEST["name"]) && isset($_REQUEST["pic"])){

	//Check if user exist in database/memcache or not
	$userExist = userExist($_REQUEST["id"]);
	
	//If user exist than get their details from database or memcache
	if($userExist==true)
	{
 		//Get user details from database/memcache
		$userData = getUserDetails($_REQUEST["id"]);
		$userData['first_time'] = 0;
	}else{

		$userData = createNewGoogleUser($_REQUEST["id"],$_REQUEST["email"],$_REQUEST["name"],$_REQUEST["pic"]);

	}
	 $_SESSION['s_user_id'] = $userData["id"];
	 $_SESSION['s_user_name'] = $_REQUEST["name"];
	 $_SESSION['s_user_email'] = $_REQUEST["email"];
	 $_SESSION['userId'] = $_REQUEST["id"];
	 $userData['status'] = 'success';
	 $_SESSION['type'] = 'google';

	 $_SESSION['pic'] = $_REQUEST["pic"];

	//Convert User Data into Json
	$data = json_encode($userData);
	
	//Return User Data
	echo $data;

}
if(isset($_REQUEST["password"]) && isset($_REQUEST["code"]) && $_REQUEST["type"] == 'changepassword' )
{

		$sql = "Select IFNULL(COUNT(id),0) as userexist , id ,name from user where resetcode = '".$_REQUEST["code"]."'  ";
 
		$row = mysql_fetch_array(db_execute_return($sql));

		$userData['status'] = 'error';
		$userData['msg'] = 'code is expired';

		if($row["userexist"] > 0){
		 
				db_execute('update user set password = "'.md5($_REQUEST["password"]).'" where resetcode = "'.$_REQUEST['code'].'" ');
				db_execute('update user set resetcode = "" where resetcode = "'.$_REQUEST['code'].'" ');

				$userData['status'] = 'success';
				$userData['msg'] = 'Password has been updated successfully';
 		}
		$data = json_encode($userData);
	
		//Return User Data
		echo $data;

}

if(isset($_REQUEST["email"]) && $_REQUEST["type"] == 'reset'  )
{
		$sql = "Select IFNULL(COUNT(id),0) as userexist , id ,name , type from user where email = '".$_REQUEST["email"]."'  ";

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
				$code = generateRandomString(10);

				$from = "support@9gag.com";

				$headers = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/html; charset=utf-8\n";
				$headers .= "X-Priority: 3\n";
				$headers .= "X-MSMail-Priority: Normal\n";
				$headers .= "X-Mailer: php\n";
				$headers .= "From: \"9gag\" <support@9gag.com>\n";
				$headers .= "Return-Path: support@9gag.com\n";
				$headers .= "Return-Receipt-To: support@9gagraag.com\n";
 				$link = WEBSITE_URL.'reset.php?code='.$code;
 				$message = 'Dear '.ucfirst(strtolower($row['name']));
				$message = '<br><br>We have received your request to reset your password, please follow the following URL.';
				$message .= '<br><br><a href="'.$link.'" target="_blank"> click here </a>.<br><br> Regards,<br><br> 9gag Team';


 				$subject = 'Reset Password Request';

 				Email($_REQUEST["email"], $subject, $message, $headers);

				db_execute('update user set resetcode = "'.$code.'" where id = "'.$row['id'].'" ');

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
	 $_SESSION['type'] = 'facebook';
	 $_SESSION['s_user_email'] = $userData["email"];
	 $_SESSION['userId'] = $_REQUEST["userId"];
	 $_SESSION['pic'] = '//graph.facebook.com/'.$_REQUEST["userId"].'/picture?width=50&amp;height=50';

	$userData['status'] = 'success';
	
	//Convert User Data into Json
	$data = json_encode($userData);
	
	//Return User Data
	echo $data;
}

 function Email($email, $subject, $message, $headers)
	{ 
					
					mail($email,$subject, $message, $headers);
	}

/* Required Functions */

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

//Check user exist in database or not
function userExist($userId)
{
	//Memcache Key
	$data =  false; 
	
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
	$data = false; //GetData($key);
	
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
		$sql = "Select * from user where id = ".$id;
		$data = mysql_fetch_array(db_execute_return($sql));
		SetData($key, $data);
	}
	
	return $data;
}
function createNewGoogleUser($id, $email, $name, $pic_path){
 
	$array = array();
	if ($id>0 && $id!='0')
	{
 	
	//Save data in database
	$date = date("Y-m-d H:i:s");

	$sql = "INSERT INTO `user` (`id`,`userId`, `name`, `email`, `type`,`password`,
	 `currentLocation`, `gender`,`pic_path`, `joinDate`) VALUES (NULL,'".$id."', 
	 '".addslashes($name)."', '".$email."', 'google','', '', 'Male', '".$pic_path."' , '".$date."' );";

 
	db_execute($sql);
	
	$sql = "Select * from user where email = '".$email."' and `userId` = ".$id;
	$data = mysql_fetch_array(db_execute_return($sql));
 
	 
	}
	
	//return data
	return $data;
}
//Create New User In database
function createNewUser($user,$userId)
{
	//Memcache Key
	$array = array();
	if ($userId>0 && $user->id!='0')
	{
 	
	//Save data in database
	$date = date("Y-m-d H:i:s");
	$sql = "INSERT INTO `user` (`id`,`userId`, `name`, `email`, `type`,`password`, `currentLocation`, `gender`, `joinDate`) VALUES (NULL,'".$user->id."', '".addslashes($user->name)."', '".$user->email."', 'facebook','', '".$user->location->name."', '".$user->gender."', '".$date."');";
	db_execute($sql);
	
	$sql = "Select * from user where email = '".$user->email."' and `userId` = ".$user->id;
	$data = mysql_fetch_array(db_execute_return($sql));
	//Save data in cache
	//SetData($key,$array);
	
	}
	
	//return data
	return $data;
}
//Calculate Age
function calculateAge($birthday){
    return floor((time() - strtotime($birthday))/31556926);
}
?>