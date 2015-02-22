<?php include('api/config.php');  ?>
<?php 
if(isset($_SESSION['s_user_id']) && $_SESSION['s_user_id'] > 0 ){
  header('location: index.php')  ;
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
        <p>Already a member? <strong><a class="navbar-link" href="<?php echo WEBSITE_URL; ?>register.php">
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
                <h3>Set your new password to continue to 9GAG.tv</h3>
            </div>
        </div><!-- / col-md-12 -->
    </div>

    <div class="row">
        <div class="col-md-8 col-center-block">
            <form class="form be-signuplogin" role="form" method="POST">
                <div class="form-group">
                   

<div class="row gutter-10 social-btn">

    <div class="col-sm-2"> </div>
       
      


        </div>
                </div><!-- / form-group -->

                <div class="form-group">
                    
                   <div class="alert alert-danger" id="error-login" style="display:none">
                            Some Thing Wong!
                        </div>

                </div>

                <div class="form-group">
                <label for="login-email">Password</label>
                    <input name="code" class="form-control input-lg" id="code" value="<?php echo $_REQUEST['code']; ?>" type="hidden">
                    <input name="password" class="form-control input-lg" id="password" value="" type="password">
                </div><!-- / form-group -->

                <div class="form-group">
                <label for="login-password">Confirm Password</label>
                    <input name="cpassword" class="form-control input-lg" id="cpassword" type="password">
                </div><!-- / form-group -->

                <div class="btn-container">
                    <a class="badge-btn-submit btn btn-lg btn-primary btn-default resetpass" href="javascript:void(0);">Submit</a>
                     <img id="login-spinner" src="images/loader.gif" style="display:none;" />
                </div><!-- / btn-container -->
            </form>
        </div><!-- / col-md-6 -->
    </div><!-- / row -->
</div><!-- / container -->

</body></html>