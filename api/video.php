
<?php
include_once("config.php");
if(isset($_REQUEST["user_id"]) && isset($_REQUEST["link"]) && isset($_REQUEST["title"])
	&& isset($_REQUEST["description"]) && isset($_REQUEST["category_id"]) )
{
	$user_id = $_REQUEST["user_id"];
	$link = $_REQUEST["link"];
	$title = $_REQUEST["title"];
	$description = $_REQUEST["description"];
	$category_id = $_REQUEST["category_id"];
	$video_id = $_REQUEST['video_id'];



	createNewGoogleUser($user_id, $link, $title, $description, $category_id, $video_id);
}

function createNewGoogleUser($user_id, $link, $title, $description, $category_id, $video_id){
 
	$array = array();

	if ($user_id>0 && $user_id!='0')
	{
 	
	//Save data in database
	$date = date("Y-m-d H:i:s");
	$status = 'pending';
	$view=0;
	$share=0;
	$like = 0;

	$thmbnail = getVideoThumb($video_id,$link);

 	$sql = "INSERT INTO `video` (`id`,`title`, `link`, `video_id`,`thmbnail`, `description`, `category_id`,`user_id`,
	 `date_created`, `status`,`view`, `share`, `like`) VALUES (NULL,'".$title."', '".$link."', '".$video_id."','".$thmbnail."',
	 '".addslashes($description)."', '".$category_id."', '".$user_id."','".$date."', '".$status."', '0', '0' , '0' );";

 
	db_execute($sql);	
	$userData['status'] = 'success';
 
	 
	}
		$data = json_encode($userData);
	
	//Return User Data
	echo $data;
	 
}
function getVideoThumb($video_id, $link){

				$thumb_image = '';

                if (strpos($link,'you') !== false) {

                   $thumb_image = 'http://img.youtube.com/vi/'.$video_id.'/0.jpg';
                }

                if (strpos($link,'dailymotion') !== false) {
                  $thumb_image = '//www.dailymotion.com/thumbnail/video/'.$video_id;
                }

                if (strpos($link,'vimeo') !== false) {

                    $imgid =$video_id;

                    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));

                    $thumb_image =  $hash[0]['thumbnail_large'];  
                }

                return $thumb_image;

}
?>