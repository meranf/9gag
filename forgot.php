

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
        <p>Alerady a member? <strong><a class="navbar-link" href="register.php">
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
    <img src="images/logos.jpg">
</div>
        </div><!-- / col-md-12 -->
    </div>

    <div class="row">
        <div class="col-md-8 col-center-block">
                 <div class="page-header">
                    <h3>Forgot Password</h3>
                </div>

                <div class="form-group">
                    <p class="help-block">
                        Forgot your password? Enter your email address to reset it.
                    </p>
                <span style="color:red; display:none" id="error-login" >Login not found.</span>

                </div>

                <div class="form-group">
                    <label for="login-email">Email Address <span class="msg text-danger" style="display:none;">
                    </span></label>
                    <input name="email" class="form-control" id="login-email" type="email">
                </div><!-- / form-group -->

                <div class="btn-container">
                    <input class="btn btn-primary btn-default reset_password" value="Reset Password" type="button">
                      <img id="login-spinner" src="images/loader.gif" style="display:none;" />
                </div><!-- / btn-container -->

            </form>
        </div><!-- / col-md-6 -->
    </div><!-- / row -->
</div><!-- / container -->

</body>
</html>