
<?php
include_once("config.php");
if(isset($_REQUEST["user_id"]) && isset($_REQUEST["link"]) && isset($_REQUEST["title"])
	&& isset($_REQUEST["description"]) && isset($_REQUEST["category_id"]) && isset($_REQUEST["dailymotion"])  )
{
	$user_id = $_REQUEST["user_id"];
	$link = $_REQUEST["link"];
	$title = $_REQUEST["title"];
	$description = $_REQUEST["description"];
	$category_id = $_REQUEST["category_id"];
	$video_id = $_REQUEST['video_id'];
	$dailymotion = $_REQUEST['dailymotion'];
	$duration 	= $_REQUEST['duration'];



	addVideo($user_id, $link, $title, $description, $category_id, $video_id,$dailymotion,$duration);
}

function addVideo($user_id, $link, $title, $description, $category_id, $video_id, $dailymotion,$duration){
 
	$array = array();

	if ($user_id>0 && $user_id!='0')
	{
 	
	//Save data in database
	$date = date("Y-m-d H:i:s");
	$status = 'pending';
	$view=0;
	$share=0;
	$like = 0;

 	 if (strpos($link,'dailymotion') !== false) {
 	 	$thmbnail = $dailymotion;
	} else  {

		$thmbnail = getVideoThumb($video_id,$link);
		$thmbnail = $thmbnail['thmbnail'];
		$duration = $thmbnail['duration'];
	}
	

 	$sql = "INSERT INTO `video` (`id`,`title`, `link`, `video_id`,`thmbnail`,`duration`, `description`, `category_id`,`user_id`,
	 `date_created`, `status`,`view`, `share`, `like`) VALUES (NULL,'".$title."', '".$link."', '".$video_id."','".$thmbnail."', '".$duration."',
	 '".addslashes($description)."', '".$category_id."', '".$user_id."','".$date."', '".$status."', '0', '0' , '0' );";

 
	 db_execute($sql);	
	$userData['status'] = 'success';
	
	$sql = "Select id from video order by id desc limit 1";
	$data = mysql_fetch_array(db_execute_return($sql));
 
	 
 
	 
	}
		$data = json_encode($userData);
	
	//Return User Data
	echo $data;
	 
}
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
	
function get_thumbnail_url( $id ) {
$request = "https://api.dailymotion.com/video/$id?fields=thumbnail_url";
$response = wp_remote_get( $request );
if( is_wp_error( $response ) ) {
$result = $this->construct_info_retrieval_error( $request, $response );
} else {
$result = json_decode( $response['body'] );
$result = $result->thumbnail_url;
}
return $result;
}


function getVideoThumb($video_id, $link){

				$thumb_image = '';

                if (strpos($link,'you') !== false) {

                    $thumb_image = 'http://img.youtube.com/vi/'.$video_id.'/0.jpg';
                    
					$url = "http://gdata.youtube.com/feeds/api/videos/". $video_id;
					$doc = new DOMDocument;
					$doc->load($url);
 					$duration = $doc->getElementsByTagName('duration')->item(0)->getAttribute('seconds');
 					 return array('thmbnail' => $thumb_image, 'duration' => gmdate("i:s", $duration);
                }

                if (strpos($link,'dailymotion') !== false) {
                	 
                		$thumb_image = '//www.dailymotion.com/thumbnail/video/'.$video_id;
                }

                if (strpos($link,'vimeo') !== false) {

                    $imgid =$video_id;

                    $hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
                   // echo "<pre>";
                    //print_r($hash);
                   // echo 'duaration  '.gmdate("i:s", $hash[0]['duration']);
                    //die();
                    $thumb_image =  $hash[0]['thumbnail_large'];
                    return array('thmbnail' => $thumb_image, 'duration' => gmdate("i:s", $hash[0]['duration']);

                }

              

}
?>