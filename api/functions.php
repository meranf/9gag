<?php

header('Access-Control-Allow-Origin: http://'.$_SERVER['HTTP_HOST']);
 //add log for vote, share
 function AddLog($uid,$video_id,$type)
{
	$uid           = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;
	if($uid > 0){
	$date = date("Y-m-d H:i:s");

	db_execute("INSERT INTO `activitylog`(`id`,`user_id`, `video_id`,`action`) VALUES (NULL,'".$uid."','".$video_id."','".$type."')");
	 }
	$data["status"]="success";
	$data["message"]="Log added successfully";
	
	$key = VIDEO.$video_id;
    $data =  SetData($key,false);
   
	return $data;
}
function GetUserFront($user_id)
{
   $key = USER.$user_id;
   $data = GetData($key);
   if($data==false)
   {
    $sql = "Select * from `user` where userId = ".$user_id;
    $result = db_execute_return($sql);
    $total = mysql_num_rows($result);  
    if($total>0)
    {
     $row = mysql_fetch_array($result);
     $data = $row;
     SetData($key,$row);
    }
   } 
   return $data; 
}
//
 function UpdateUser($email, $name, $gender, $loc, $image_path, $bday){

    $user_id = isset($_SESSION['s_user_id']) ? $_SESSION['s_user_id'] : 0;

    $count = mysql_fetch_assoc(db_execute_return("SELECT IFNULL(COUNT(id), 0) as total FROM `user` 
    WHERE `id` != '".$user_id."' and `email` = '".$email."';"));

//die($count["total"]);
    if($count["total"] > 0){
        
        $data["status"]="error";
        $data["message"]="Email already exists";

    }else{

        $sqlpart = '';
        
        if($image_path != '' && $image_path != NULL){
          $sqlpart .=', `image_path` = "'.$image_path.'" ';
        }
         
        if($bday != '' && $bday != NULL){
          $sqlpart .=', `birthday` = "'.$bday.'" ';
        }
        
        db_execute("UPDATE `user` SET `email` =  '".$email ."',
                                       `name` =  '".$name ."' ,
                                       `currentLocation` =  '".$loc ."',
                                        `gender` =  '".$gender ."' ". $sqlpart."  WHERE `id`   = '".$user_id."' ");

        
        
        $email = REMOVE_SPECIAL($email);
        $name = REMOVE_SPECIAL($name);
        $gender = REMOVE_SPECIAL($gender);
        $loc = REMOVE_SPECIAL($loc);

        db_execute("UPDATE `user` SET `email` =  '".$email ."',
                                       `name` =  '".$name ."' ,
                                       `currentLocation` =  '".$loc ."',
                                        `gender` =  '".$gender ."' ". $sqlpart."  WHERE `id`   = '".$user_id."' ");

        $data["status"]="success";
        $data["message"]="Account information has been updated successfully";
        
        $sql = "Select * from user where `id` = ".$user_id;
        $row = mysql_fetch_array(db_execute_return($sql));
        $_SESSION['user_info']=$row;


    }

    return $data;
}
//update vote, share count


function  UpdateVideo($video_id,$type,$uid)
{
	$uid           = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;
 
	if($type == 'like' || $type == 'dislike'){

		  if( $uid  > 0){
			
  			if(isEntryExist($uid,$video_id,$type)=="no"){
  				
  			db_execute("UPDATE `video` SET `".$type ."` =  `".$type ."`  + 1 WHERE `id` ='".$video_id."' ");
  		
  				$data["status"]="success";
  				$data["message"]="You have voted successfully";
  				
  				AddLog($uid,$video_id,$type);
  			
  			}else{
  				$data["status"]="error";
  				$data["message"]="You have already voted for this video";
  			}
      }
			
	}else if($type == 'view' || $type == 'share' ){

					db_execute("UPDATE `video` SET `".$type."` =  `".$type."`  + 1 WHERE `id` ='".$video_id."' ");
			
					$data["status"]="success";
					$data["message"]="Updated successfully";
					
					//AddLog($uid,$video_id,'view');
			
			
		
	}else{
				$data["status"]="error";
				$data["message"]="You have already voted for this video";
	} 
	
	return $data;
}
function check_vote($id, $uid){

 $count = mysql_fetch_assoc(db_execute_return("SELECT IFNULL(COUNT(id), 0) as total,action FROM `activitylog` 
    WHERE `user_id` = '".$uid."' and `video_id` = '".$id."' LIMIT 1;"));

  if($count["total"] > 0){
    return $count;
  }else{
    return 0;
  }

}

 //check log for user votes
function isEntryExist($uid,$video_id,$type){
	$count = mysql_fetch_assoc(db_execute_return("SELECT IFNULL(COUNT(id), 0) as total FROM `activitylog` 
		WHERE `user_id` = '".$uid."' and `video_id` = '".$video_id."' and `action` = '".$type."' LIMIT 1;"));

	if($count["total"] > 0){
		return "yes";
	}else{
		return "no";
	}
}

 

//get single Video details

function GetVideo($id)
{
    $key = VIDEO.$id;
   $data =  GetData($key);
   if($data==false)
   {
    $sql = "Select * from `video` where id = ".$id;
    $result = db_execute_return($sql);
    $total = mysql_num_rows($result);  
    if($total>0)
    {
     $row = mysql_fetch_array($result);
     $data = $row;
     SetData($key,$row);
    }
   } 
   return $data; 
} 

 

//get all Videos

function GetVideos($param)
{

   $sqlpart       = '';
 
   $start         = REMOVE_SPECIAL($param['start']);
   $noOfRecords   = REMOVE_SPECIAL($param['noOfRecords']);
   $OrderBy       = REMOVE_SPECIAL($param['OrderBy']); 
   $SortBy        = REMOVE_SPECIAL($param['SortBy']);
   $category_id   = REMOVE_SPECIAL($param['cat_id']);
    
	
 
   if($category_id != '' )
   {
    if($category_id != 0 || $category_id != '0'){

      $sqlpart .= " AND `category_id` = '".$category_id."' ";  
    } 
    
   } 
   $OrderBy = "ORDER by `".$SortBy."` ".$OrderBy;

   $sql = "SELECT `id` FROM `video` WHERE id  > 0 ".$sqlpart;
    
   

   $result = db_execute_return($sql);
   $totalrecords = mysql_num_rows($result);
   
   if($noOfRecords > 0)
   {$sql .=  $OrderBy.
      " LIMIT ".$start.", ".$noOfRecords;}
   else
   {$sql .= $OrderBy;}
    
   if($totalrecords > 0)
   {
	   //echo $sql;
    $result = db_execute_return($sql);
    while($row = mysql_fetch_assoc($result))
    {
       $info = getVideo($row['id']);
	  
       $return[]  = $info;
    }

		$data["status"]="success";
		$data["totalrecords"]=$totalrecords;
		$data["data"]=$return;
 
   		return $data; 
   }
   else
   {
	    $data["status"]="error";
		  $data["message"]="No Records Found";
		  $data["data"]=array();
		  $data["totalrecords"]=0;
		  return $data;
   }
}

 

?>