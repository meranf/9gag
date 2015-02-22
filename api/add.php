<?php
if(isset($_REQUEST["user_id"]) && isset($_REQUEST["link"]) && isset($_REQUEST["title"])
	&& isset($_REQUEST["description"]) && isset($_REQUEST["category_id"]) )
{
	$user_id = $_REQUEST["user_id"];
	$link = $_REQUEST["link"];
	$title = $_REQUEST["title"];
	$description = $_REQUEST["description"];
	$category_id = $_REQUEST["category_id"];


	createNewGoogleUser($user_id, $link, $title, $description, $category_id)
}

function createNewGoogleUser($user_id, $link, $title, $description, $category_id){
 
	$array = array();

	if ($user_id>0 && $user_id!='0')
	{
 	
	//Save data in database
	$date = date("Y-m-d H:i:s");
	$status = 'pending';
	$view=0;
	$share=0;
	$like = 0;


	$sql = "INSERT INTO `video` (`id`,`title`, `link`, `description`, `category_id`,`user_id`,
	 `date_created`, `status`,`view`, `share`, `like`) VALUES (NULL,'".$title."', 
	 '".addslashes($description)."', '".$category_id."', '".$user_id."','".$date."', '".$status."', '0', '0' , '0' );";

 
	db_execute($sql);	
	$userData['status'] = 'success';
 
	 
	}
		$data = json_encode($userData);
	
	//Return User Data
	echo $data;
	 
}
?>