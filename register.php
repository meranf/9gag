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
                        <span style="color:red; display:none" id="error-login" >Login not found.</span>

                        <div class="row gutter-10 social-btn">
                            <div class="col-sm-2"></div>

                            <div class="col-sm-4">
                                <a class=
                                "badge-connect-facebook btn btn-block btn-social btn-lg btn-facebook"
                                href="javascript:void(0);"><i class=
                                "fa fa-facebook"></i> Facebook</a>
                            </div>

                            <div class="col-sm-4">
                                <span class=
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
                            <a class=
                            "badge-btn-submit btn btn-lg btn-primary btn-default btn-block signup_user"
                            href="javascript:void(0);">Create</a>
                        </div><!-- / btn-container -->
                    </div>
                </form><!-- / col-md-6 -->
            </div><!-- / row -->
        </div><!-- / container -->
       
    </div>
</body>
</html>