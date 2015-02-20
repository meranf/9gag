<?php  //include('api/config.php');  ?>

<?php 
$google_client_id 		= '990345411252-pag1pl3u2l67nf6le9s079i7ocghadvb.apps.googleusercontent.com';
$google_client_secret 	= 'Sbea8brt5DVziM74B2DZkG1T';
$google_redirect_url 	= 'http://vegatechnologies.net/9gag/callback.php'; //path to your script
$google_developer_key 	= 'AIzaSyDtFMH6Q6kjnlNLAy6YR2zettSo0Gv4g3A';

########## MySql details (Replace with yours) #############
// $db_username = "xxxxxxxxx"; //Database Username
// $db_password = "xxxxxxxxx"; //Database Password
// $hostname = "localhost"; //Mysql Hostname
// $db_name = 'xxxxxxxxx'; //Database Name
###################################################################

//include google api files
require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_Oauth2Service.php';


$gClient = new Google_Client();
$gClient->setApplicationName('9gag');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

/*
* Gmail Connect starts here
*/

if (isset($_GET['code'])) 
{ 
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	// header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
	// return;
}


if (isset($_SESSION['token'])) 
{  
	$gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) 
{
	  //For logged in user, get details from google using access token
	  $user 				= $google_oauthV2->userinfo->get();
	// print_r($user);
	  $user_id 				= $user['id'];
	  $user_name 			= filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	  $email 				= filter_var($user['email'], FILTER_SANITIZE_EMAIL);
	  $profile_url 			= filter_var($user['link'], FILTER_VALIDATE_URL);
	  $profile_image_url 	= filter_var($user['picture'], FILTER_VALIDATE_URL);
	  $personMarkup 		= "$email<div><img src='$profile_image_url?sz=50'></div>";
	  $_SESSION['token'] 	= $gClient->getAccessToken();
	  ?>
	  <script>
		window.opener.gmailLogin('<?php  echo $user_id; ?>','<?php echo $email; ?>', '<?php echo $user_name; ?>', '<?php echo $profile_image_url; ?>');
	  </script>
	  <?php 
}
else 
{
	//For Guest user, get google login url
	$authUrl = $gClient->createAuthUrl();
} 
?>
	<script>window.close();</script>
