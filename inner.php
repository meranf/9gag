<?php include('api/config.php');  ?>
<?php 
      $data = GetVideo($_REQUEST['id']);
 ?>
 
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title>


    <meta property="og:title" content="<?php echo $data['title']; ?>" />
        <meta property="og:site_name" content="9GAG.tv" />
        <meta property="og:description" content="<?php echo $data['description']; ?>" />
<meta property="app_id" content="863460623710098" />

<meta property="og:url" content="<?php echo WEBSITE_URL.'inner.php?id='.$data['id']; ?>" />
<meta property="og:image" content="<?php echo $data['thmbnail']; ?>" />
 

    <!-- Latest compiled and minified JavaScript -->
    <link rel="stylesheet" href="css/jarvis-lib.css">
    <link rel="stylesheet" href="css/jarvis-main.css">
    <link rel="stylesheet" href="css/jarvis-tv.css">


    <link rel="stylesheet" href="css/jarvis-theme-2.css">
    <link rel="stylesheet" href="css/common.css">

<?php include('inc/js.php');
$_SESSION['last_video_page'] = WEBSITE_URL.'inner.php?id='.$_REQUEST['id'];
 ?>
 <script type="text/javascript" src="js/jquery.tinyscrollbar.js"></script>

    </head>

    <body>
        <div id="fb-root"></div>
        <input type="hidden" id="video_id" value="<?php echo $_REQUEST['id']; ?>" /> 
         <input type="hidden" id="uid" value="<?php echo $_SESSION['s_user_id']; ?>" /> 
         <input type="hidden" id="start_limit" value="0" /> 

         


        <!-- Static navbar -->
       <?php include('inc/header.php'); ?>

        <?php include('inc/channel.php'); ?>

        <div class="badge-post-main-container post-grid" data-hashed-id="aKGeX3" data-index-key="LJEGX"></div>
        <div class="stage">
            <div class="container">
                <div class="row">
                    <div class="badge-stage-left col-md-8">
                        
          <input type="hidden" id="video_title" value="<?php echo $data['title']; ?>" /> 
          <input type="hidden" id="shareImage" value="<?php echo $data['thmbnail']; ?>" /> 
           <input type="hidden" id="video_desc" value="<?php echo $data['description']; ?>" /> 

                            <div class="post-list-t1" id="jsid-post-container">
                           
                            <div class="badge-video-container item clearfix">
                              
                                <div class="responsivewrapper">

                                    <iframe frameborder="0" allowfullscreen="" src="<?php echo $data['link']; ?>" 
                                    id="player_iframe"  class="badge-youtube-player"></iframe>

                                </div>

                            </div>

                </div> 
          

                        <!-- / youtube-bar -->
                        <div id="jsid-post-single-shares-bottom-container">
                            <div class="post-bar">
                                <div class="btn-container clearfix">
                                 
                                    <?php if(isset($_SESSION['s_user_id'])){ ?>

                                   
                                        <?php 
                                        $check_vote = check_vote($_REQUEST['id'],$_SESSION['s_user_id']); 

                                        if(is_array($check_vote) ){
                                            
                                            if($check_vote['action'] == 'like'){
                                                $class1 = "badge-upvote-btn badge-evt btn btn-primary btn-lg vote_up_btns";
                                                $class2 = "badge-upvote-btn badge-evt btn btn-invert btn-lg vote_down_btns";
                                             }else{ 
                                                $class1 = "badge-upvote-btn badge-evt btn btn-invert btn-lg vote_up_btns";
                                                $class2 = "badge-upvote-btn badge-evt btn  btn-primary btn-lg vote_down_btns";
                                             }
                                             ?>
                                                 <div class="pull-left hidden-xs hidden-sm">
                                        <a class="<?php echo $class1; ?>" href="javascript:$.UpdateVideo('<?php echo $_REQUEST['id'] ?>','<?php echo $_SESSION['s_user_id'] ?>','like');">
                                            <i class="fa fa-arrow-up"></i></a>
                                        
                                        <a class="<?php echo $class2; ?>" href="javascript:$.UpdateVideo('<?php echo $_REQUEST['id'] ?>','<?php echo $_SESSION['s_user_id'] ?>','dislike');">
                                                <i class="fa fa-arrow-down"></i></a>
                                          </div>

                                       <?php  }else{
                                        ?>
                                            <div class="pull-left hidden-xs hidden-sm">
                                        <a class="badge-upvote-btn badge-evt btn btn-invert btn-lg vote_up_btns" href="javascript:$.UpdateVideo('<?php echo $_REQUEST['id'] ?>','<?php echo $_SESSION['s_user_id'] ?>','like');">
                                            <i class="fa fa-arrow-up"></i></a>
                                        
                                        <a class="badge-downvote-btn badge-evt btn btn-invert btn-lg vote_down_btns" href="javascript:$.UpdateVideo('<?php echo $_REQUEST['id'] ?>','<?php echo $_SESSION['s_user_id'] ?>','dislike');">
                                                <i class="fa fa-arrow-down"></i></a>
                                          </div>
                                         <?php } ?>

                                    <?php } else{ ?>

                                    <div class="pull-left hidden-xs hidden-sm">
                                        <a class="badge-upvote-btn badge-evt btn btn-invert btn-lg" href="<?php echo WEBSITE_URL.'signin.php?redirect=1'; ?>">
                                            <i class="fa fa-arrow-up"></i></a>
                                            <a class="badge-downvote-btn badge-evt btn btn-invert btn-lg" href="<?php echo WEBSITE_URL.'signin.php?redirect=1'; ?>">
                                                <i class="fa fa-arrow-down"></i></a>
                                    </div>

                                    <?php } ?>
                                    <!-- / pull-left -->
                                    <div class="pull-right hidden-xs hidden-sm"><a class="badge-evt badge-share badge-share-facebook btn btn-facebook btn-social btn-lg publishbtn" href="javascript:void(0);" role="button"><i class="fa fa-facebook fa-lg"></i><span class="rps-text">Share on Facebook</span></a>
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
                                    <div class="thumb">
                                        <div class="end"></div></div></div></div>
                                
                                <div class="viewport">
                                 <div class="overview">



                             <div class="badge-post-grid-container post-list-t1 horizontal sidebar col-4" id="jsid-post-playlist-container">
                               <!-- here  -->
                            <div class="badge-grid-item sidear_listing" data-id="<?php echo  $data['id']; ?>" id="video-<?php echo  $data['id']; ?>" >
                                            <div class="item clearfix post-playlist">
                                                <a href="javascript:;" class="img-container left_nav_video" data-id="<?php echo $data['id']; ?>" >
                                                    <div style="background: url(<?php echo $data['thmbnail']; ?>) center; background-size: cover;" class="responsivewrapper"></div>
                                                    <div class="responsivewrapper playing-mask"></div>
                                                </a>
                                                <div class="info">
                                                <a href="<?php echo WEBSITE_URL.'inner.php?id='.$data['id']; ?>" class="title"><h4><?php echo $data['title']; ?></h4></a>
                                                    <div class="meta">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 

                        

                               </div>

                        </div>

                                    </div>
                                    </div>

                        <!-- / playlist -->
                        <div class="badge-post-video-control video-next-prev sidebar">
                            <div id="jsid-post-single-control-container">
                                <div class="row gutter-10">
                                    <div class="col-xs-6"><a id="previous_btn" role="button" href="javascript:;" class="badge-post-prev btn btn-lg btn-invert btn-block "><i class="fa fa-arrow-left"></i> Previous</a>
                                    </div>
                                    <!-- / col-xs-6 -->
                                    <div class="col-xs-6"><a id="next_btn" role="button" href="javascript:;" class="badge-post-prev btn btn-lg btn-invert btn-block ">Next <i class="fa fa-arrow-right"></i></a>
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
                                <h1 id="video_title"><?php echo $data['title']; ?></h1>
                                <p class="meta">
                                    <span class="badge-post-upvote-count" id="like_count">
                                    <?php echo ($data['like']-$data['dislike']); ?></span> 
                                    points<span class="badge-post-comment-count" id="share_count">
                                    <?php echo $data['share']; ?></span> shares</p>

                                <p id="jsid-description"> <?php echo $data['description']; ?>
                                </p>
                                <p><b id="view_count"><?php echo $data['view']; ?></b> views</p>
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

        <script>
        $(function(){
            
            $.GetDetailPageGallery();
            var video_id = $("#video_id").val();
            $.UpdateVideo(video_id,0,'view');



            $(".publishbtn").bind('click',function(){
  
                    
                    var shareImage = $("#shareImage").val(); 
                    var video_id= $("#video_id").val();
                    var title = $("#video_title").val(); 
                    var description = $("#video_desc").val(); 
                    var uid = $("#uid").val(); 
                      var url = canvas_url+'inner.php?id='+video_id;
                     var image = shareImage;
                    window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + description + '&p[url]=' + url + '&p[images][0]=' + shareImage, 'sharer','toolbar=0,status=0,width=550,height=325');
       
                    /*
                    Globalobj = {
                    method: 'share',
                    link : canvas_url+'inner.php?id='+video_id,    
                    picture: http://vegatechnologies.net/9gag/images/share.jpg,
                    name: title,
                    caption: '9GAG TV',
                    description: description
                    }; 
                    
                    FB.ui(Globalobj, $.UpdateVideo(video_id, uid, 'share'));*/
        });
    


        });
            

        </script>
    </body>

</html>