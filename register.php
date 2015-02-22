<?php include('api/config.php');  ?>
<?php 
if(isset($_SESSION['s_user_id']) && $_SESSION['s_user_id'] > 0 ){
  header('location: index.php')  ;
}
 ?>
 <?php
$google_client_id       = '990345411252-pag1pl3u2l67nf6le9s079i7ocghadvb.apps.googleusercontent.com';
$google_client_secret   = 'Sbea8brt5DVziM74B2DZkG1T';
$google_redirect_url    = 'http://vegatechnologies.net/9gag/callback.php'; //path to your script
$google_developer_key   = 'AIzaSyDtFMH6Q6kjnlNLAy6YR2zettSo0Gv4g3A';

########## MySql details (Replace with yours) #############
// $db_username = "xxxxxxxxx"; //Database Username
// $db_password = "xxxxxxxxx"; //Database Password
// $hostname = "localhost"; //Mysql Hostname
// $db_name = 'xxxxxxxxx'; //Database Name
###################################################################

//include google api files
require_once 'src/Google_Client.php';
require_once 'src/contrib/Google_Oauth2Service.php';

//start session
session_start();

$gClient = new Google_Client();
$gClient->setApplicationName('9gag');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
  unset($_SESSION['token']);
  $gClient->revokeToken();
  header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
}

//If code is empty, redirect user to google authentication page for code.
//Code is required to aquire Access Token from google
//Once we have access token, assign token to session variable
//and we can redirect user back to page and login.
if (isset($_GET['code'])) 
{ 
    $gClient->authenticate($_GET['code']);
    $_SESSION['token'] = $gClient->getAccessToken();
    header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
    return;
}


if (isset($_SESSION['token'])) 
{ 
    $gClient->setAccessToken($_SESSION['token']);
}


if ($gClient->getAccessToken()) 
{
      //For logged in user, get details from google using access token
      $user                 = $google_oauthV2->userinfo->get();
      $user_id              = $user['id'];
      $user_name            = filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
      $email                = filter_var($user['email'], FILTER_SANITIZE_EMAIL);
      $profile_url          = filter_var($user['link'], FILTER_VALIDATE_URL);
      $profile_image_url    = filter_var($user['picture'], FILTER_VALIDATE_URL);
      $personMarkup         = "$email<div><img src='$profile_image_url?sz=50'></div>";
      $_SESSION['token']    = $gClient->getAccessToken();
}
else 
{
    //For Guest user, get google login url
    $authUrl = $gClient->createAuthUrl();
}


?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title> 

    <link rel="stylesheet" href="css/jarvis-lib.css">
    <link rel="stylesheet" href="css/jarvis-main.css">
    <link rel="stylesheet" href="css/jarvis-tv.css">


    <link rel="stylesheet" href="css/jarvis-theme-2.css">

<link rel="stylesheet" href="css/common.css">

<?php include('inc/js.php'); ?>

</head>

<body>
    <div class="corner-signuplogin-switch" style="z-index:999">
        <p>Already a member? <strong><a class="navbar-link" href="signin.php">
        Sign in</a></strong></p>
    </div>

    <div class="container" id="jsid-user-login-signup">
        <div class="row">
            <div class="col-md-12">
                <style>
.site-branding-container {
                height: auto;
                margin-top: 50px;
                text-align: center;
                }
                </style>

                <div class="site-branding-container"><img src="images/logo.jpg" width="200"></div>

                <div class="text-center">
                    <h3>Sign in to continue to 9GAG.tv</h3>

                </div>
            </div><!-- / col-md-12 -->
        </div>

        <div class="row">
            <div class="col-md-8 col-center-block">
                <form class="form be-signuplogin" method="post">
                    <div class="form-group">
                        <p class="help-block text-center">Connect with a social network</p>
 <div class="alert alert-danger" id="error-login" style="display:none">
                                Some Thing Wong!
                            </div>
                        <div class="row gutter-10 social-btn">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-4">
                                <a class="badge-connect-facebook btn btn-block btn-social btn-lg btn-facebook fbconnectbtn"
                                href="javascript:void(0);"><i class=
                                "fa fa-facebook"></i> Facebook</a>
                            </div>

                            <div class="col-sm-4">
                                <span onclick="googleDialog('<?php echo $authUrl;?>');"  class=
                                "badge-connect-gplus btn btn-block btn-social btn-lg btn-google-plus"
                                data-gapiattached="true" id=
                                "gplus_396780"><i class=
                                "fa fa-google-plus"></i> Google</span>
                            </div>
                        </div>
                    </div><!-- / form-group -->

                    <div class="form-group">
                        <p class="help-block text-center">Sign up with your
                        email address</p>
                    </div>

                    <div class="form-group">
                        <label for="signup-name">Your Name</label>
                        <input class="form-control input-lg" id="login-name"      name="displayName" type="text">
                    </div>

                    <div class="form-group">
                        <label for="signup-email">Email Address <span class=
                        "badge-err-msg badge-err-msg-email msg text-danger hide">
                        </span></label> <input class=
                        "badge-form-check-object form-control input-lg"
                        data-label="Email Address" data-notnull="1" id="login-email" name="email" type="email" value="">
                    </div><!-- / form-group -->

                    <div class="form-group">
                        <label for="signup-password">Password <span class=
                        "badge-err-msg badge-err-msg-password msg text-danger hide">
                        </span></label> <input class=
                        "badge-form-check-object form-control input-lg"
                        data-label="Password" data-notnull="1" id="login-password" name="password" placeholder=
                        "Minimum 6 characters" type="password">
                    </div><!-- / form-group -->

                    <div class="form-group">
                        
                        <div class="btn-container">
                            <a class="badge-btn-submit btn btn-lg btn-primary btn-default btn-block signup_user"                            href="javascript:void(0);">Create 
                             <div id="login-spinner" class="spinner  rotating " style="margin: -21px auto 0px;"></div></a>
                        </div><!-- / btn-container -->
                       
                    </div>
                </form><!-- / col-md-6 -->
            </div><!-- / row -->
        </div><!-- / container -->
       
    </div>
</body>
</html>