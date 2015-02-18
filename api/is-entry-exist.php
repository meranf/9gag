<?php
// Include required 
include_once("config.php");

if(isset($_POST["uid"]) && isset($_POST["video_id"])){

	//Main Variables
	$facebook_id    = REMOVE_SPECIAL($_POST["uid"]);
	$email_address  = REMOVE_SPECIAL($_POST["video_id"]);

	//Execution
	$data["data"] = isEntryExist($uid,$video_id);
	$data["status"]="success";
	$data["message"]="Call executed successfully";

}else{
	/* if parameters missing */
	$data["status"]="error";
	$data["message"]="Incomplete parameters";
}
/* Return json response */
echo json_encode($data);
?>