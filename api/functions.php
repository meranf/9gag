<?php

header('Access-Control-Allow-Origin: http://'.$_SERVER['HTTP_HOST']);
 //add log for vote, share
 function AddLog($uid,$video_id,$type)
{
	$uid           = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;
	if($uid > 0){
	$date = date("Y-m-d H:i:s");
	db_execute("INSERT INTO `log`(`id`,`uid`, `video_id`, `type`, `date_added`) VALUES (NULL,'".$uid."','".$video_id."','".$type."','".$date."')");
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

//update vote, share count

function  UpdateVideo($uid,$video_id,$type,$req_id)
{
	$uid           = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;
	if($uid  > 0){
		if($type == 'vote'){
			
			if(isEntryExist($uid,$video_id)=="no"){
				
			db_execute("UPDATE `video` SET `vote_count` =  `vote_count`  + 1 WHERE `id` ='".$video_id."' ");
		
				$data["status"]="success";
				$data["message"]="You have voted successfully";
				
				AddLog($uid,$video_id,'vote');
			
			}else{
				$data["status"]="error";
				$data["message"]="You have already voted for this video";
			}
			
		}else{
					db_execute("UPDATE `video` SET `share_count` =  `share_count`  + 1 WHERE `id` ='".$video_id."' ");
			
					$data["status"]="success";
					$data["message"]="Updated successfully";
					
					AddLog($uid,$video_id,'share');
			
			
		} 
	}else{
				$data["status"]="error";
				$data["message"]="You have already voted for this video";
	} 
	
	return $data;
}
 //check log for user votes
function isEntryExist($uid,$video_id){
	$count = mysql_fetch_assoc(db_execute_return("SELECT IFNULL(COUNT(id), 0) as total FROM `log` 
		WHERE `uid` = '".$uid."' and `video_id` = '".$video_id."' and `type` = 'vote' LIMIT 1;"));

	if($count["total"] > 0){
		return "yes";
	}else{
		return "no";
	}
}

//Add Video Entry
function AddVideoEntry($uid, $video_path, $name, $email, $phone, $country, $genre)
{
	
 		$date_added   = date('Y-m-d H:i:s');
		$uid          = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;
 		 
 		db_execute("INSERT INTO `video`(`id`, `uid`, `video_path`, `name`, `email`, `phone`, `country`, `genre`, `date_added`) VALUES (NULL,'".$uid."','".$video_path."','".$name."','".$email."','".$phone."','".$country."','".$genre."','".$date_added."')");

		$data["status"]="success";
		$data["message"]="video added successfully";
 
		return $data;
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

//get single Asset details
function getAsset($id)
{
   $key = ASSET.$id;
   $data  = GetData($key);
   if($data==false)
   {
    $sql = "Select * from `asset` where id = ".$id;
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
   $sqlpart2       = '';
   $sqlpart3       = '';
   $start         = REMOVE_SPECIAL($param['start']);
   $noOfRecords   = REMOVE_SPECIAL($param['noOfRecords']);
   $OrderBy       = REMOVE_SPECIAL($param['OrderBy']); 
   $SortBy        = REMOVE_SPECIAL($param['SortBy']);
   $uid           = $_SESSION['s_user_id'] ?  $_SESSION['s_user_id'] : 0;

   $genre         = REMOVE_SPECIAL($param['genre']);
   
   
   //$genre     	  = REMOVE_SPECIAL($param['genre']);
     
   $OrderBy= "  ORDER BY  ".$SortBy." ".$OrderBy;
	
   if(  $SortBy == 'most_popular' ){
   		$OrderBy= " GROUP BY `id`  ORDER BY  SUM(share_count+vote_count) DESC ";
    
	}else if(  $SortBy == 'recent_trended'){
		  
	   $sqlpart .= " AND `id` IN(SELECT `video_id` FROM `log` WHERE `date_added` >= DATE_ADD(CURDATE(), INTERVAL -2 DAY) AND `type` ='vote') ";
	    $OrderBy= "  ORDER BY  `id` DESC"; 
   	   
   }else if(  $SortBy == 'your_favt'){
	   	 
		 if($uid == 0){
			 
		 	$data["status"]="error";
			$data["message"]="No Records Found";
			$data["totalrecords"]=0;
			$data["data"]=array();
			return $data;
		
		 }else{
			 $sqlpart .= " AND `id` IN(SELECT `video_id` FROM `log` WHERE `uid` = '".$uid."' and `type` = 'vote')"; 
			  $OrderBy= "  ORDER BY  `id` DESC";
		 }
	     
    }else if( $SortBy ==  'cacclaimed'){
   			 $sqlpart .= " AND `admin_vote` > 0 "; 
			 $OrderBy= "  ORDER BY  `id` DESC";

   	}else{
		// do nothing
	}
   
  

   $sqlpart .= " AND `is_converted` = 'Yes' AND `is_approved` = 'Yes' AND `status` = 'show' ";

   if($genre != '' )
   {
    if($genre != 0 || $genre != '0'){

      $sqlpart .= " AND `genre` = '".$genre."' ";  
    }else{

    }
    
   } 
  
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
	   $thumb_path =  str_replace(".mp4",".jpg",$info['video_path']);
	    $data_req = array(
		'id'            => $row['id'],
		'uid'          	=> $info['uid'],
		'video_path'    => WEBSITE_URL.'files/'.$info['video_path'],
		'thumb_path'    => WEBSITE_URL.'files/thumbs/'.$thumb_path,
		'name'          => $info['name'],
		'email'         => $info['email'],
		'phone'         => $info['phone'],
		'country'       => $info['country'],
		'genre'         => $info['genre'],
		'date_added'    => date('M d, Y', strtotime($info['date_added'])),
		'is_approved'   => $info['is_approved'],
		'total_entries' => $info['total_entries'],
		'admin_vote'    => $info['admin_vote'],
		'share_count'   => $info['share_count'],
		'vote_count'    => $info['vote_count']
      );
     $return[]  = $data_req;
    }

		$data["status"]="success";
		$data["totalrecords"]=$totalrecords;
		$data["data"]=$return;
 
   		return $data; //array('data' => $return, 'totalrecords' => $totalrecords, 'error' => '0', 'status' => 'success');
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


function GetRankings($param)
{
   $sqlpart       = '';
   $start         = REMOVE_SPECIAL($param['start']);
   $noOfRecords   = REMOVE_SPECIAL($param['noOfRecords']);
   $genre     	  = REMOVE_SPECIAL($param['genre']);
   
   if($genre != '' )
   {
	  $sqlpart .= " AND `genre` = '".$genre."' ";
		
   } 
   
     $sqlpart .= " AND `is_converted` = 'Yes' AND `is_approved` = 'Yes' ";

     $sqlpart .= " AND  `id` NOT IN (136,137,108,104)";
    
   $sql = "SELECT `id`,  share_count*4  AS `total_points` FROM `video` WHERE id  > 0 ".$sqlpart;
   $result = db_execute_return($sql);
   $totalrecords = mysql_num_rows($result);
   
   if($noOfRecords > 0)
   {
    //total_points+vote_count
    $sql .= " GROUP BY `id` ORDER BY  SUM(vote_count) DESC  LIMIT ".$start.", ".$noOfRecords;}
   else
   {//total_points+vote_count
    $sql .= "  GROUP BY `id` ORDER BY  SUM(vote_count) DESC ";}
     
   if($totalrecords > 0)
   {
	   
    $result = db_execute_return($sql);
    while($row = mysql_fetch_assoc($result))
    {
		 
      $info = getVideo($row['id']);
     // $user_data  = GetUserFront($info['uid']);
	  
  	  $thumb_path =  str_replace(".mp4",".jpg",$info['video_path']);
	  $info['thumb_path'] = WEBSITE_URL.'files/thumbs/'.$thumb_path;
	  $info['total_points'] = $row['total_points'];
    //  $info['user_data'] = $user_data;
	  
   	  $return[]  = $info;
    }

		$data["status"]="success";
		$data["totalrecords"]=$totalrecords;
		$data["data"]=$return;
 
   		return $data; //array('data' => $return, 'totalrecords' => $totalrecords, 'error' => '0', 'status' => 'success');
   }
   else
   {
	    $data["status"]="error";
		 $data["data"]=array();
		$data["message"]="Incomplete parameters";
	
   	 return $data; /// return array('data' => array(), 'totalrecords' => $totalrecords, 'error' => 'No record found!', 'status' => 'error');
   }
}
 
function GetAssets($param)
{
   $sqlpart       = '';
   $start         = REMOVE_SPECIAL($param['start']);
   $noOfRecords   = REMOVE_SPECIAL($param['noOfRecords']);
    $SortBy   = REMOVE_SPECIAL($param['SortBy']);
	 $OrderBy   = REMOVE_SPECIAL($param['OrderBy']);
      
   $sql = "SELECT `id` FROM `asset` WHERE id  > 0 ".$sqlpart;
   $result = db_execute_return($sql);
   $totalrecords = mysql_num_rows($result);
   
   if($noOfRecords > 0)
   {$sql .= " ORDER BY ".$SortBy." ".$OrderBy.
      " LIMIT ".$start.", ".$noOfRecords;}
   else
   {$sql .= " ORDER BY ".$SortBy." ".$OrderBy;}
   
   if($totalrecords > 0)
   {
	   
    $result = db_execute_return($sql);
    while($row = mysql_fetch_assoc($result))
    {
       $info = getAsset($row['id']);
	    
	    $data_req = array(
		'id'            => $row['id'],
		'type'          => $info['type'],
		'title'          => $info['title'],
		'media_path'    => WEBSITE_URL.$info['media_path'],
		'downloads'     => $info['downloads'],
		'date_added'    => date('M d, Y', strtotime($info['date_added']))
      );
	  
     $return[]  = $data_req;
    }

		$data["status"]="success";
		$data["totalrecords"]=$totalrecords;
		$data["data"]=$return;
 
   		return $data; //array('data' => $return, 'totalrecords' => $totalrecords, 'error' => '0', 'status' => 'success');
   }
   else
   {
	    $data["status"]="error";
		$data["message"]="Incomplete parameters";
	
   	    return $data; /// return array('data' => array(), 'totalrecords' => $totalrecords, 'error' => 'No record found!', 'status' => 'error');
   }
}
 
//This script generate Json structure for the quiz section
function GetWinner($id)
{
   $key =   WINNER.$id;
   $data  = GetData($key);
   if($data==false)
   {
    $sql = "Select * from `winner` where id = ".$id;
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

function GetWinners($param)
{
   $sqlpart       = '';
   $keyword       = mysql_query_string($param['keyword']);
   $start         = mysql_query_string($param['start']);
   $noOfRecords   = mysql_query_string($param['noOfRecords']);
   $OrderBy       = mysql_query_string($param['OrderBy']); 
   $SortBy        = mysql_query_string($param['SortBy']);
   $type          = mysql_query_string($param['type']);
        
   if ($type!='')
   {
   	 $sqlpart .= "AND `type` = '".$type."' ";
   }
    
   $sql = "SELECT `id` FROM `winner` WHERE `video_id` > 0 ".$sqlpart;
   $result = db_execute_return($sql);
   $totalrecords = mysql_num_rows($result);
   
   if($noOfRecords > 0)
   {$sql .= " ORDER BY ".$SortBy." ".$OrderBy.
      " LIMIT ".$start.", ".$noOfRecords;}
   else
   {$sql .= " ORDER BY ".$SortBy." ".$OrderBy;}
   
   if($totalrecords > 0)
   {
    $result = db_execute_return($sql);
    while($row = mysql_fetch_assoc($result))
    {
      
	  $info 	  = GetWinner($row['id']);
	 // $user_data  = GetUserFront($info['uid']);
	  $video_data = GetVideo($info['video_id']);
 
      $info['date_added']          = date('M d, Y', strtotime($info['date_added']));
      $info['video_data']          = $video_data;
 	  
      $return[]  = $info;
    }

   	return array('data' => $return, 'totalrecords' => $totalrecords, 'status' => 'success');
   
   }else{
	   
    return array('data' => array(), 'totalrecords' => $totalrecords, 'error' => 'No record found!', 'status' => 'error');
   }
}

?>