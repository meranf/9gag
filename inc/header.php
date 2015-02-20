<?php include('../api/config.php');  ?>

<nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <a href="<?php echo WEBSITE_URL; ?>index.php" class="badge-evt navbar-brand"><img style="margin-top:-15px;" height="60" width="150" src="images/logos.jpg"></a>

            <?php if(isset($_SESSION['s_user_id']) && $_SESSION['s_user_id'] > 0){ ?>
            <ul class="badge-account-me nav-account nav navbar-nav navbar-right">
                <li class="dropdown keepstyle">
                    <a class="badge-evt dropdown-toggle" onclick="$('#login_options').toggle();" data-toggle="dropdown" href="javascript:void(0);"><i class="caret"></i>

                    <div class="img-container">
                        <?php
                        $src = WEBSITE_URL."images/blank.jpg";
                        if($_SESSION['userId'] > 0 && ($_SESSION['type'] == 'facebook' || $_SESSION['type'] == 'google' )){
                            $src = $_SESSION['pic'];
                        } 
                         ?>
                        <img class="badge-account-avatar" height="34" src="<?php echo $src; ?>" width="34">
                    </div>
                    <!-- / img-container --></a>

                    <ul class="dropdown-menu" id="login_options">
                        <li>
                            <a class="badge-evt" href="<?php echo WEBSITE_URL; ?>settings.php">Settings</a>
                        </li>

                        <li>
                            <a class="badge-evt badge-account-logout" href="<?php echo WEBSITE_URL; ?>logout.php" rel="nofollow">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        <?php } ?>

            <ul class="badge-user-functions">
                <li class="dropdown" id="jsid-notification-toggle">
                  
                  

            <?php if(isset($_SESSION['s_user_id']) && $_SESSION['s_user_id'] > 0){ ?>

                   <!--  <a class=
                    "badge-evt notification-btn dropdown-toggle badge-notification-btn"
                    data-toggle=
                    "dropdown" href="javascript:void(0);"><i class=
                    "fa fa-bell fa-lg"></i><span class="badge hide" id=
                    "jsid-notification-unread-count">0</span></a> -->

                    <a class=
                    "badge-upload-btn upload-btn badge-evt fa fa-plus fa-lg"
                   href="<?php echo WEBSITE_URL; ?>add.php"
                     style=
                    "font-style: italic"></a>
            <?php } else{?>
            <a class="badge-account-login badge-evt btn btn-primary navbar-btn pull-right visitor-signin-btn"
                    href="<?php echo WEBSITE_URL; ?>signin.php" rel="nofollow">Sign in with 9GAG</a>
            <?php } ?>

                    <div class="notification-menu hide" id="jsid-header-notification-items">
                        <div class="title">
                            <h3>Activities</h3><a class=
                            "close-btn visible-xs fa fa-times fa-lg" href=
                            "javascript:void(0);" style=
                            "font-style: italic"></a>
                        </div>

                        <div class="scrollbar" style="height: 0px;">
                            <div class="track" style="height: 0px;">
                                <div class="thumb"></div>
                            </div>
                        </div>

                        <div class="notification-list viewport">
                            <ul class="overview" id=
                            "jsid-header-notification-items-container" style=
                            "top: 0px;">
                                <li class="empty">
                                    <div class="empty-message">
                                        <p>Loading notifications...</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="bumper hide">
                            <a class="see-all" href="javascript:void(0);" id=
                            "jsid-header-notification-see-all">See all</a>
                        </div>
                    </div><!--end .notification-menu-->
                </li>
            </ul>
        </div>
    </nav>