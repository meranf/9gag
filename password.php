
<!DOCTYPE html>
<html>
<hcssead>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title>
 

    <!-- Latest compiled and minified JavaScript -->
     <link rel="stylesheet" href="css/jarvis-lib.css">
    <link rel="stylesheet" href="css/jarvis-main.css">
    <link rel="stylesheet" href="css/jarvis-tv.css">


    <link rel="stylesheet" href="css/jarvis-theme-2.css">
    <link rel="stylesheet" href="css/common.css">


    </head>

    <body>
        <!-- Static navbar -->
        <nav role="navigation" class="navbar navbar-inverse navbar-static-top">
    <div class="container"><a href="http://9gag.tv" data-evt="SiteAction,Navigation,SiteLogoClicked" class="badge-evt navbar-brand">9GAG.tv</a>
        <ul class="badge-account-me nav-account nav navbar-nav navbar-right">
            <li class="dropdown keepstyle"><a data-toggle="dropdown" data-evt="UserAction,UserMenu,Toggle" class="badge-evt dropdown-toggle" href="javascript:void(0);"><i class="caret"></i><div class="img-container"><img width="34" height="34" src="http://accounts-cdn.9gag.com/media/avatar/24363169_100_1.jpg" class="badge-account-avatar"></div><!-- / img-container --></a>
                <ul class="dropdown-menu">
                    <li><a href="http://9gag.tv/account/settings" data-evt="UserAction,Settings,Clicked" class="badge-evt">Settings</a>
                    </li>
                    <li><a rel="nofollow"  href="http://accounts.9gag.com/account/logout?continue=http%3A%2F%2F9gag.tv%2Faccount%2Fauthenticate-callback%3Fnext%3Dhttp%3A%2F%2F9gag.tv%2Fp%2FaKGeX3%2Frainbow-and-nutella-valentine-day-gift-for-you&amp;app_key=a_49bbbcf3f844aa9481265cb2a86d9b8a1de586" data-evt="UserAction,Logout,Clicked" class="badge-evt badge-account-logout">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <ul class="badge-user-functions">
            <li class="dropdown" id="jsid-notification-toggle"><a rel="nofollow" href="http://accounts.9gag.com/account/authenticate?continue=http%3A%2F%2F9gag.tv%2Faccount%2Fauthenticate-callback%3Fnext%3Dhttp%3A%2F%2F9gag.tv%2Fp%2FaKGeX3%2Frainbow-and-nutella-valentine-day-gift-for-you&amp;app_key=a_49bbbcf3f844aa9481265cb2a86d9b8a1de586" data-evt="UserAction,Login,Clicked" class="badge-account-login badge-evt btn btn-primary navbar-btn pull-right visitor-signin-btn hide">Sign in with 9GAG</a><a data-toggle="dropdown" data-evt="UserAction,UserMenu,Toggle" href="javascript:void(0);" class="badge-evt notification-btn dropdown-toggle badge-notification-btn"><i class="fa fa-bell fa-lg"></i><span class="badge hide" id="jsid-notification-unread-count">0</span></a><a href="http://9gag.tv/account/post/create/video" data-evt="SiteAction,Navigation,SubmitVideoClicked" class="badge-upload-btn upload-btn badge-evt"><i class="fa fa-plus fa-lg"></i></a>
                <div class="notification-menu hide" id="jsid-header-notification-items">
                    <div class="title">
                        <h3>Activities</h3><a href="javascript:void(0);" class="close-btn visible-xs"><i class="fa fa-times fa-lg"></i></a>
                    </div>
                    <div class="scrollbar" style="height: 0px;">
                        <div class="track" style="height: 0px;">
                            <div class="thumb"></div>
                        </div>
                    </div>
                    <div class="notification-list viewport">
                        <ul class="overview" id="jsid-header-notification-items-container" style="top: 0px;">
                            <li class="empty">
                                <div class="empty-message">
                                    <p>You don't have any notification yet.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="bumper hide"><a href="javascript:void(0);" class="see-all" id="jsid-header-notification-see-all">See all</a>
                    </div>
                </div>
                <!--end .notification-menu-->
            </li>
        </ul>
    </div>
</nav>
        <div class="channel-bar">
            <div class="container">
                  <ul class="nav nav-tabs channel">
                    <li><a data-evt="SiteAction,ChannelBar,Home-Clicked" href="index.php">Home</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,game-Clicked" href="category.php">Game</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,prank-Clicked" href="category.php">Fail &amp; Prank</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,cute-Clicked" href="category.php">Cute</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,music-Clicked" href="category.php">Music</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,movie-and-tv-Clicked" href="category.php">Movie &amp; TV</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,nsfw-Clicked" href="category.php">NSFW</a>
                    </li>
                </ul>
            </div>
            <!-- / container -->
        </div>
<div class="container">
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="be-setting" id="jsid-user-setting">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sidebar-tab">
                            <ul class="nav nav-pills nav-stacked">
                                <li class=""><a rel="nofollow" href="settings.php">Account</a>
                                </li>
                                <div class="divider"></div>
                                <li class="active"><a rel="nofollow" href="password.php">Password</a>
                                </li>
                                <li class=""><a rel="nofollow" href="profile.php">Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- / col-sm-3 -->
                     <div class="col-sm-9">
        <form action="http://9gag.tv/account/password" class="form-horizontal"
        id="settingForm" method="post" name="settingForm">
            <input name="nav" type="hidden" value="password">

            <div class="page-header">
                <h1>Password</h1>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputoldpassword1">Old Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputoldpassword1" name=
                    "setting[password][password][oldPassword]" type="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputnewpassword1">New Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputnewpassword1" name=
                    "setting[password][password][newPassword]" type="password">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for=
                "inputconfirmnewpassword1">Confirm Password</label>

                <div class="col-sm-9 col-lg-6">
                    <input class="form-control" id="inputconfirmnewpassword1"
                    name="setting[password][password][newPasswordConfirm]"
                    type="password">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="btn-container">
                        <input class="btn btn-primary" type="submit" value=
                        "Save Changes">
                    </div>
                </div>
            </div>
        </form>
    </div>
                    <!-- / col-sm-9 -->
                </div>
                <!-- / row -->
            </div>
            <!-- / be-account -->
        </div>
        <!-- / page-wrapper -->
    </div>
</div>

<footer>
        <div class="container">
            <div class="row hidden-sm hidden-xs">
                <div class="col-md-12">
                    <div class="dpa-728">
                        <div class="dpa-container size-728x90">
                            <!-- jarvis-list-footer-728x90 -->

                            <div id="div-gpt-ad-1397179863114-0" style=
                            "width: 728px; height: 90px;">
                                

                                <div id=
                                "google_ads_iframe_/16921351/jarvis-list-footer-728x90_0__container__"
                                style="border: 0pt none;"></div>
                            </div>
                        </div><!-- / dpa-container -->
                    </div><!-- / dpa-728 -->
                </div><!-- / col-md-12 -->
            </div><!-- / row-->

            <div class="row">
                <div class="col-md-12">
                    <p class="links"><a class="badge-evt" data-evt=
                    "SiteAction,Footer,FeedbackClicked" href=
                    ""
                    target="_blank">Send Feedback</a> 9GAG.tv  2015</p>
                </div><!-- / col-md-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </footer>
</body>

</html>