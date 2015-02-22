<?php include('api/config.php');  ?>
<!DOCTYPE html>
<html><head>

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
<body data-twttr-rendered="true">
    <div id="fb-root"></div>
    <!-- Static navbar -->
<?php include('inc/header.php'); ?>

<?php include('inc/channel.php'); ?>

    <div class="post-list-t1 cover">
        <div class="badge-post-grid-container row no-gutter" data-grid-key=
        "Landing-Headline">
            <?php 
             $query = db_execute_return("select * from video order by `like` desc limit 5");
             
             while($value = mysql_fetch_array($query)){

            
                $thumb_image = $value['thmbnail'];

              


              ?>
                    
              <div class="badge-grid-item badge-post-item-aKqLLy" data-hashed-id="<?php echo $id; ?>">
                <div class="col-md-3">
                    <div class="item">
                        <a class="img-container" data-ga-label="ImageClicked"
                        href="<?php echo WEBSITE_URL; ?>inner.php?id=<?php echo $value['id']; ?>">
                        <div class="responsivewrapper" style=
                        "background-image: url('<?php echo $thumb_image; ?>')">
                        </div>

                        <div class="img-shadow"></div></a>

                        <div class="info">
                            <a class="title" data-ga-label="" href="<?php echo WEBSITE_URL; ?>inner.php?id=<?php echo $value['id']; ?>">
                            <h4> <?php echo $value['title'] ?> </h4></a>
                        </div>
                    </div><!-- / item -->
                </div>
            </div>

            

             <?php }     ?>


        </div>
    </div>

   <div class="listview">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="jsid-video-post-grid-container" data-ref-id="aKl6b0" data-limit="20" data-index-key="LJEGX" data-grid-type="gridAppend">
                        <div class="main">
                            <div class="badge-post-grid-container post-list-t1 horizontal col-4" data-grid-key="Landing-TwoColumn-Left">
                                
<div class="badge-grid-item badge-post-item-a5wgg6"  >
                                    <div class="item twoColumn-left clearfix">
                                        <a class="img-container" data-ga-label="ImageClicked" href="">
                                        <div class="responsivewrapper" style="background: url(images/cover.jpg) center; background-size: cover;">
                                        </div></a>

                                        <div class="info">
                                            <a class="title" data-ga-label="TitleClicked" href="">
                                            <h4>"Fifty Shades Of Grey" In Real
                                            Life Doesn't Always Work
                                            <small>1:37</small></h4></a>

                                            <div class="meta">
                                                <p>You may take the stairs next
                                                time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
  <div class="badge-grid-item badge-post-item-a5wgg6" data-hashed-id="a5wgg6">
                                    <div class="item twoColumn-left clearfix">
                                        <a class="img-container" data-ga-label="ImageClicked" href="">
                                        <div class="responsivewrapper" style="background: url('images/cover.jpg') center; background-size: cover;">
                                        </div></a>

                                        <div class="info">
                                            <a class="title" data-ga-label="TitleClicked" href="">
                                            <h4>"Fifty Shades Of Grey" In Real
                                            Life Doesn't Always Work
                                            <small>1:37</small></h4></a>

                                            <div class="meta">
                                                <p>You may take the stairs next
                                                time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- / post-list-t1 -->
                        </div><!-- / main -->
                    </div>
                </div><!-- / col-md-8 -->

                <div class="col-md-4 hidden-sm hidden-xs">
                    <div id="jsid-sidebar-post-grid-container" data-ref-id="aK1ypA" data-limit="15" data-index-key="nJ1gX" data-grid-type="gridAppend" class="sidebar">
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
                        </div>
                    </div><!-- / sidebar -->
                </div><!-- / col-md-4 -->

                <div id="jsid-post-grid-pager-bottom" class="col-md-12">
                    <p class="badge-post-grid-load-more loading-spinner">
                    <i class="fa fa-spinner fa-spin"></i> Loading</p>
                </div>
            </div>
        </div><!-- / container --><a style="font-style: italic" href="javascript:%20void(0);" class="badge-back-to-top back-to-top fa fa-arrow-up"></a>
    </div>

  <!--   <div class="overlay-box-container" data-site-id="tv" id=
    "jsid-container-email-subscription">
        <div class="box">
            <a class="badge-subscription-close badge-evt close" data-evt=
            "SiteAction,SubscriptionBox,Dismiss" href=
            "javascript:void(0);"> hello</a>

            <div class="box-content">
                <h4 class="text-center">Subscribe to 9GAG.tv</h4>

                <div class="badge-subscription-form input-group">
                    <input class="badge-subscription-email form-control" type=
                    "email"><span class="input-group-btn"><a class=
                    "badge-subscription-submit btn btn-primary" href=
                    "javascript:void(0);">Subscribe</a></span>
                     
                </div> 

                <div class="badge-subscription-msg subscribe-message hide">
                    <p>Thank you for subscribing.</p>
                </div> 
            </div> 
        </div> 
    </div> -->

    <div class="alert-message-container" id="jsid-alert-message">
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
                                ""
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
                    target="_blank">Send Feedback</a> 9GAG.tv© 2015</p>
                </div><!-- / col-md-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </footer>
</body>

</html>