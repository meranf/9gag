<?php 

 ini_set('session.name', 'TOBLERONEFILM');
session_start(); 

 	unset($_SESSION['s_user_id']); 
 
  	session_destroy();
	
  	header("location:../index.php");
  	exit();
?>