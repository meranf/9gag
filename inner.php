<?php include('api/config.php');  ?>

<!DOCTYPE html>
<html>
<head>

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

        <div class="badge-post-main-container post-grid" data-hashed-id="aKGeX3" data-index-key="LJEGX"></div>
        <div class="stage">
            <div class="container">
                <div class="row">
                    <div class="badge-stage-left col-md-8">
                        <?php 
                            $data = GetVideo($_REQUEST['id']);
                            

                             ?>
                            <div class="post-list-t1" id="jsid-post-container">
                           
                            <div class="badge-video-container item clearfix">
                              
                                <div class="responsivewrapper">

                                    <iframe frameborder="0" allowfullscreen="" src="<?php echo $data['link']; ?>" 
                                    id="player_b_xhSQGKxO4"  class="badge-youtube-player"></iframe>

                                </div>

                            </div>

                </div>

                        <!-- / youtube-bar -->
                        <div id="jsid-post-single-shares-bottom-container">
                            <div class="post-bar">
                                <div class="btn-container clearfix">
                                 
                                    <?php if(isset($_SESSION['s_user_id'])){ ?>
                                    <div class="pull-left hidden-xs hidden-sm"><a class="badge-upvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Upvote" href="javascript:void(0);"><i class="fa fa-arrow-up"></i></a><a class="badge-downvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Downvote" href="javascript:void(0);"><i class="fa fa-arrow-down"></i></a>
                                    </div>
                                    <?php } ?>
                                    <!-- / pull-left -->
                                    <div class="pull-right hidden-xs hidden-sm"><a class="badge-evt badge-share badge-share-facebook btn btn-facebook btn-social btn-lg" data-share="http://9gag.tv/p/aKGeX3/rainbow-and-nutella-valentine-day-gift-for-you?ref=jfs" data-evt="PostAction,Share-PostBottom,Facebook" href="javascript:void(0);" role="button"><i class="fa fa-facebook fa-lg"></i><span class="rps-text">Share on Facebook</span></a>
                                    </div>
                                    <!-- / pull-right -->
                                </div>
                            </div>
                        </div>
                        <!-- / post-bar -->


                    </div>
                    <!-- / col-md-8 -->
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <div class="playlist" id="jsid-post-playlist">
                            <div class="scrollbar">
                                <div class="track">
                                    <div class="thumb" id="jsid-scrollbar-thumb">
                                        <div class="end"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewport">
                                <div class="overview">
                                    <div data-grid-key="PostPage-Playlist" class="badge-post-grid-container post-list-t1 horizontal sidebar col-4" id="jsid-post-playlist-container">
                                          
                                        <div data-hashed-id="a9pWJe" class="badge-grid-item badge-post-item-a9pWJe">
                                            <div class="item clearfix post-playlist ">
                                                <a data-ga-label="ImageClicked" href="http://9gag.tv/p/a9pWJe/have-you-ever-wondered-if-you-will-die-on-mars" class="img-container">
                                                    <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/p3gKydqWq_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a data-ga-label="TitleClicked" href="http://9gag.tv/p/a9pWJe/have-you-ever-wondered-if-you-will-die-on-mars" class="title"><h4>Have You Ever Wondered If You Will Die On Mars?</h4></a>
                                                    <div class="meta">
                                                        <p>10:22</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                       
                                  
                                        <div data-hashed-id="a9z0JA" class="badge-grid-item badge-post-item-a9z0JA">
                                            <div class="item clearfix post-playlist ">
                                                <a data-ga-label="ImageClicked" href="http://9gag.tv/p/a9z0JA/sia-live-performance-kristen-wiig-maddie-ziegler-grammys" class="img-container">
                                                    <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pPgXAdoQJ_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a data-ga-label="TitleClicked" href="http://9gag.tv/p/a9z0JA/sia-live-performance-kristen-wiig-maddie-ziegler-grammys" class="title"><h4>Sia's Live Performance With Kristen Wiig And Maddie Ziegler At Grammys Is Perfect</h4></a>
                                                    <div class="meta">
                                                        <p>3:51</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end .post-list-t1-->
                                </div>
                            </div>
                        </div>
                        <!-- / playlist -->
                        <div class="badge-post-video-control video-next-prev sidebar">
                            <div id="jsid-post-single-control-container">
                                <div class="row gutter-10">
                                    <div class="col-xs-6"><a role="button" href="http://9gag.tv/p/a9LWeX/barack-obama-deserves-a-grammy-for-his-shake-it-off" class="badge-post-next btn btn-lg btn-invert btn-block "><i class="fa fa-arrow-left"></i> Previous</a>
                                    </div>
                                    <!-- / col-xs-6 -->
                                    <div class="col-xs-6"><a role="button" href="http://9gag.tv/p/a9JoZY/in-cat-s-language-no-no-no-means-yes-please-do" class="badge-post-prev btn btn-lg btn-invert btn-block ">Next <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                    <!-- / col-xs-6 -->
                                </div>
                                <!-- / row -->
                            </div>
                            <!-- / post-control -->
                        </div>
                        <!-- / video-next-prev -->
                    </div>

                    <!-- / col-md-4 -->
                    <div class="col-md-12 hidden-md hidden-lg">
                        <div class="mobile-bar">
                            <div id="jsid-post-single-shares-bottom-container-mobile">
                                <div class="post-bar">
                                    <div class="btn-container clearfix">
                                        <div class="pull-left "><a class="badge-upvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Upvote" href="javascript:void(0);"><i class="fa fa-arrow-up"></i></a><a class="badge-downvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Downvote" href="javascript:void(0);"><i class="fa fa-arrow-down"></i></a>
                                        </div>
                                        <!-- / pull-left -->
                                        <div class="pull-right "><a class="badge-evt badge-share badge-share-facebook btn btn-facebook btn-social btn-lg" data-share="http://9gag.tv/p/aKGeX3/rainbow-and-nutella-valentine-day-gift-for-you?ref=jfs" data-evt="PostAction,Share-PostBottom,Facebook" href="javascript:void(0);" role="button"><i class="fa fa-facebook fa-lg"></i><span class="rps-text">Share</span></a>
                                        </div>
                                        <!-- / pull-right -->
                                    </div>
                                </div>
                            </div>
                            <div class="video-next-prev">
                                <div class="video-next-prev">
                                    <div id="jsid-post-single-control-mobile">
                                        <div class="row gutter-10">
                                            <div class="col-xs-6"><a class="badge-post-next btn btn-lg btn-invert btn-block " href="http://9gag.tv/p/a9LWeX/barack-obama-deserves-a-grammy-for-his-shake-it-off" role="button"><i class="fa fa-arrow-left"></i> Previous</a>
                                            </div>
                                            <!-- / col-xs-6 -->
                                            <div class="col-xs-6"><a class="badge-post-prev btn btn-lg btn-invert btn-block " href="http://9gag.tv/p/a9JoZY/in-cat-s-language-no-no-no-means-yes-please-do" role="button">Next <i class="fa fa-arrow-right"></i></a>
                                            </div>
                                            <!-- / col-xs-6 -->
                                        </div>
                                        <!-- / row -->
                                    </div>
                                    <!-- / post-control-mobile -->
                                </div>
                                <!-- / video-next-prev -->
                            </div>
                            <!-- / video-next-prev -->
                        </div>
                        <!-- / mobile-bar-->
                    </div>
                    <!-- / col-md-12 -->
                </div>
                <!-- / row -->
            </div>
            <!-- / container -->
        </div>

        <!-- / stage -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <article class="article-t1">
                        <div id="jsid-post-single-meta-container">
                            <header class="header-t1">
                                <h1><?php echo $data['title']; ?></h1>
                                <p class="meta"><span class="badge-post-upvote-count"><?php echo $data['like']; ?></span> points<span class="badge-post-comment-count"><?php echo $data['share']; ?></span> shares</p>
                                <p id="jsid-description"> <?php echo $data['description']; ?>
                                </p>
                                <p><b><?php echo $data['view']; ?></b> views</p>
                            </header>
                        </div>
                    </article>
                   <div id="comment" class="block-comment">
                        <ul class="nav nav-tabs nav-justified aosp-fix">
                            <!-- <li class="badge-comment-li active"><a href="javascript:void(0);" class="badge-comment-tab badge-comment-tab-comment badge-evt" data-evt="CommentAction,PostPage-Tab,CommentSystemClicked" data-tab="comment">9GAG <span class="hidden-xs">Comments</span>&nbsp;<span class="badge-comment-count badge">59</span></a>
                            </li> -->
                            <li class="badge-comment-li"><a href="javascript:void(0);" class="badge-comment-tab badge-comment-tab-fb badge-evt" data-evt="CommentAction,PostPage-Tab,FacebookCommentClicked" data-tab="facebook">Facebook <span class="hidden-xs">Comments</span>&nbsp;<span class="badge-comment-count badge"></span></a>
                            </li>
                        </ul>
                        <div id="jsid-comment-comment" class="badge-comment-content plain hide">
                            
                        </div>
                        <!-- / well -->
                        <div style="" id="jsid-comment-facebook" class="badge-comment-content fb-comments-responsive">
                            
                        </div>
                        <!-- / fb-comments-responsive -->
                    </div>

                    <!-- / block-comment -->
                </div>
                <!-- / col-md-8 -->
              <div class="col-md-4 hidden-sm hidden-xs">
                    <div class="sidebar" id="jsid-grid-random-post-container">
                        <div class="section-header">
                            <h3>Most Popular</h3>
                        </div> 

                        <div class="post-list-t1">
                            <div class="badge-post-grid-container" data-grid-key="PostPage-RandomPostsGrid">
                                <div class="badge-grid-item badge-post-item-aKWdPe" data-hashed-id="aKWdPe">
                                   
                            <?php 
                             $query = db_execute_return("select * from video order by `like` desc limit 5");
                             
                             while($value = mysql_fetch_array($query)){

                                $thumb_image = $value['thmbnail'];
                                ?>
                                    <div class="item clearfix r-17-7">
                                        <a class="img-container" href="<?php echo WEBSITE_URL.'inner.php?id='.$value['id']; ?>">
                                            <div class="responsivewrapper" style="background: url(<?php echo $thumb_image; ?>) center; background-size: cover;"></div>
                                        </a>
                                        <div class="info">
                                            <a class="title" href="<?php echo WEBSITE_URL.'inner.php?id='.$value['id']; ?>">
                                                <h4> <?php echo $value['title']; ?></h4>
                                            </a>
                                        </div>
                                    </div>
                            <?php } ?>


                                </div>
                            </div>
                        </div>
                        <!-- / post-list-t1 -->
                    </div>
                    <!-- / sidebar -->
                </div>

                <!-- / col-md-4 -->
            </div>
            <!-- / row --><a href="javascript: void(0);" class="badge-back-to-top back-to-top hide"><i class="fa fa-arrow-up"></i></a>
        </div>


    </body>

</html>