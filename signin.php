<?php include('api/config.php');  ?>
 
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
        <span data-gapiattached="true" id="" class="badge-connect-gplus btn btn-block btn-social btn-lg btn-google-plus" onclick="googleDialog('<?php echo $auth_url;?>');">
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