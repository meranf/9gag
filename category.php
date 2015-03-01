<?php include('api/config.php');  ?>
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

    <input type="hidden" id="gallery_start" value="0" />
    <input type="hidden" id="mode" value="home" />

        <input type="hidden" id="cat_id" value="<?php echo $_REQUEST['id']; ?>" />
        <!-- Static navbar -->
       <?php include('inc/header.php'); ?>

        <?php include('inc/channel.php'); ?>

<div class="post-list-t1 cover"></div>
        <div class="listview">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div data-grid-type="gridAppend" data-index-key="dJ4km" data-ref-id="aKAepk" data-limit="20" id="jsid-video-post-grid-container">
                            <div class="main">
                                <div id="home_list" class="badge-post-grid-container post-list-t1 horizontal col-4">
                                    <img id="login-spinner" src="images/loader.gif" style="margin: 134px auto 0px; position: absolute; left: 50%;">
                                   
                                </div>
                                <!-- / post-list-t1 -->
                            </div>
                            <!-- / main -->
                        </div>
                    </div>
                    <!-- / col-md-8 -->
                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div  id="jsid-sidebar-post-grid-container" class="sidebar" data-limit="15" >
                            <div class="section-header">
                                <h3>Most Popular In <?php echo $_REQUEST['title']; ?></h3>
                            </div>

                            

                        </div>
                        <!-- / sidebar -->
                    </div>
                    <!-- / col-md-4 -->
                      <div id="jsid-post-grid-pager-bottom" class="col-md-12 load-more btn">
                    <a href="javascript:;" class="gallery-tabs" style="display:none;">Load More</a>
                    <p class="badge-post-grid-load-more loading-spinner galspinner" style="display:none">
                    <i class="fa fa-spinner fa-spin"></i> Loading</p>

                </div>

                </div>
            </div>
            <!-- / container --><a href="javascript: void(0);" class="badge-back-to-top back-to-top hide"><i class="fa fa-arrow-up"></i></a>
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

        <script>
            $(function(){
                var cat_id = $("#cat_id").val();
                $(".chanelnav"+cat_id).addClass('active');
            });

            
        </script>
        <script>
            $(function(){
                    $.GetGallery();
                    $.GetInnerGallery();
                    $(".gallery-tabs").click(function(){
                        $.GetGallery();
                    });

            });
    </script>

    </body>

</html>