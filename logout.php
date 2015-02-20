<?php ini_set('session.name', '9gags');
session_start(); 

 	unset($_SESSION['s_user_id']); 
  	unset($_SESSION['type']); 
  	unset($_SESSION['userId']); 

  	session_destroy();
	
  	header("location:index.php");
  	exit();
?>