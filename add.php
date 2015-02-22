<?php include('api/config.php');  ?>
<?php 
if(!isset($_SESSION['s_user_id'])){
  header('location: index.php')  ;
/* echo '<script>window.location="'.WEBSITE_URL.'";<script>';
*/}
 ?>
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
<?php include('inc/js.php'); ?>

    </head>

    <body>
        <!-- Static navbar -->
        <?php include('inc/header.php'); ?>

        <?php include('inc/channel.php'); ?>

<div class="user-upload-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Submit video</h1>
                </div>
            </div>
            <!-- / col-md-12 -->
        </div>
        <!-- / row -->
        <div class="row">
            <div class="col-md-4 col-md-push-8 hidden-sm hidden-xs">
                <div class="user-upload-preview">
                    <div class="responsivewrapper">
                       
                    </div>
                    <!-- responsivewrapper -->
                </div>
                <!-- / user-upload-preview -->
            </div>
            <!-- / col-md-4-->
            <div class="col-md-8 col-md-pull-4">
                <div class="user-upload-form">
                    <form class="form-user-upload">
                        <div class="form-group">
                         <input type="hidden" value="" class="form-control" id="video_id">

                            <input type="hidden" value="<?php echo $_SESSION['s_user_id']; ?>" class="form-control" id="user_id">
                                <div class="alert alert-danger" id="error-video" style="display:none">
                                Some Thing Wong!
                            </div>

                            <input type="url" placeholder="Paste Video Link..." class="form-control" id="vide_url">
                           
                            <!-- / alert -->
                        </div>
                        <!-- / form-group -->
                        <div class="form-group">
                            <input type="text" placeholder="Title" class="form-control badge-form-check-object" name="title" data-label="Title" data-notnull="1" data-maxlength="120" data-attr="title" id="title">
                        </div>
                        <!-- / form-group -->
                        <div class="form-group">
                            <textarea placeholder="Description (Optional)" rows="8" class="form-control" id="description"></textarea>
                        </div>
                        <!-- / formgroup -->
                        <div class="form-group">
                            <label>Channel:</label>
                            <p>
                                <label class="radio-inline">
                                    <input type="radio" checked="" value="1" name="category_id" id="jsid-form-channel-url-default"> Default
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="2" name="category_id" id="jsid-form-channel-url-prank"> Fail &amp; Prank
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="3" name="category_id" id="jsid-form-channel-url-music"> Music
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="4" name="category_id" id="jsid-form-channel-url-cute"> Cute
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="5" name="category_id" id="jsid-form-channel-url-nsfw"> NSFW
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="6" name="category_id" id="jsid-form-channel-url-movie-and-tv"> Movie &amp; TV
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="7" name="category_id" id="jsid-form-channel-url-game"> Game
                                </label>
                            </p>
                        </div>
                        <!-- / form-group -->
                        <div class="btn-container"><a href="javascript:void(0);" class="btn btn-primary badge-evt" id="video_submit">Save</a>
                        </div>
                        <!-- / btn-container -->
                    </form>
                </div>
                <!-- / user-upload-form -->
            </div>
            <!-- / col-md-8 -->
        </div>
        <!-- / row -->
    </div>
    <!-- / container -->
</div>


 <footer>
            <div class="container">
                <div class="row hidden-sm hidden-xs">
                    <div class="col-md-12">
                        <div class="dpa-728">
                            <div class="dpa-container size-728x90">
                                <!-- jarvis-list-footer-728x90 -->

                                <div id="div-gpt-ad-1397179863114-0" style="width: 728px; height: 90px;">


                                    <div id="google_ads_iframe_/16921351/jarvis-list-footer-728x90_0__container__" style="border: 0pt none;"></div>
                                </div>
                            </div>
                            <!-- / dpa-container -->
                        </div>
                        <!-- / dpa-728 -->
                    </div>
                    <!-- / col-md-12 -->
                </div>
                <!-- / row-->

                <div class="row">
                    <div class="col-md-12">
                        <p class="links"><a class="badge-evt" data-evt="SiteAction,Footer,FeedbackClicked" href="https://docs.google.com/a/9gag.com/forms/d/1SD9o9OxUGvYXHF6OE8X3Bwuuwa91e-C2t7aBusOEPkM/viewform" target="_blank">Send Feedback</a> 9GAG.tv Â© 2015</p>
                    </div>
                    <!-- / col-md-12 -->
                </div>
                <!-- / row -->
            </div>
            <!-- / container -->
        </footer>

        
    </body>

</html>