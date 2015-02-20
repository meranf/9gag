<?php include('api/config.php');  ?>
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
<div id="fb-root"></div>
<div class="corner-signuplogin-switch" style="z-index:999">
        <p>Not a member? <strong><a class="navbar-link" href="register.php">
        Sign up</a></strong></p>
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
<div class="site-branding-container">
                <div class="site-branding-container"><img src="images/logo.jpg" width="200"></div>
</div>
            <div class="text-center">
                <h3>Sign in to continue to 9GAG.tv</h3>
            </div>
        </div><!-- / col-md-12 -->
    </div>

    <div class="row">
        <div class="col-md-8 col-center-block">
            <form class="form be-signuplogin" role="form" method="POST">
                <div class="form-group">
                    <p class="help-block text-center">
    Connect with a social network
</p>
<div class="row gutter-10 social-btn">

    <div class="col-sm-2"> </div>
        <div class="col-sm-4">
        <a href="javascript:void(0);" class="badge-connect-facebook btn btn-block btn-social btn-lg btn-facebook fbconnectbtn">
            <i class="fa fa-facebook"></i> Facebook
        </a>
    </div>
            <div class="col-sm-4">
        <span data-gapiattached="true" id="" class="badge-connect-gplus btn btn-block btn-social btn-lg btn-google-plus" onclick="googleDialog('<?php echo $authUrl;?>');">
            <i class="fa fa-google-plus"></i> Google
        </span>
    </div>
        </div>
                </div><!-- / form-group -->

                <div class="form-group">
                    <p class="help-block text-center">
                        Sign in with your email address / username
                    </p>
                    <span style="color:red; display:none" id="error-login" >Login not found.</span>
                </div>

                <div class="form-group">
                <label for="login-email">Email Address / Username</label>
                    <input name="email" class="form-control input-lg" id="login-email" value="" type="email">
                </div><!-- / form-group -->

                <div class="form-group">
                <label for="login-password">Password</label>
                    <input name="password" class="form-control input-lg" id="login-password" type="password">
                </div><!-- / form-group -->

                <div class="btn-container">
                    <a class="badge-btn-submit btn btn-lg btn-primary btn-default login" href="javascript:void(0);">Sign In</a>
                    <a class="btn btn-link btn-lg" href="forgot.php">Forgot Password?</a>
                    <img id="login-spinner" src="images/loader.gif" style="display:none;" />
                </div><!-- / btn-container -->
            </form>
        </div><!-- / col-md-6 -->
    </div><!-- / row -->
</div><!-- / container -->

</body></html>