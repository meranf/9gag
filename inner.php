<!DOCTYPE html>
<html>
<hcssead>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>9GAG.tv</title>
 

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
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
                            <li><a rel="nofollow" onclick="app.views.userStatus.clearLocalStorage();" href="http://accounts.9gag.com/account/logout?continue=http%3A%2F%2F9gag.tv%2Faccount%2Fauthenticate-callback%3Fnext%3Dhttp%3A%2F%2F9gag.tv%2Fp%2FaKGeX3%2Frainbow-and-nutella-valentine-day-gift-for-you&amp;app_key=a_49bbbcf3f844aa9481265cb2a86d9b8a1de586" data-evt="UserAction,Logout,Clicked" class="badge-evt badge-account-logout">Logout</a>
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
                    <li><a data-evt="SiteAction,ChannelBar,Home-Clicked" href="http://9gag.tv">Home</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,game-Clicked" href="/channel/game">Game</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,prank-Clicked" href="/channel/prank">Fail &amp; Prank</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,cute-Clicked" href="/channel/cute">Cute</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,music-Clicked" href="/channel/music">Music</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,movie-and-tv-Clicked" href="/channel/movie-and-tv">Movie &amp; TV</a>
                    </li>
                    <li class=""><a class="badge-evt" data-evt="SiteAction,ChannelBar,nsfw-Clicked" href="/channel/nsfw">NSFW</a>
                    </li>
                </ul>
            </div>
            <!-- / container -->
        </div>

        <div class="badge-post-main-container post-grid" data-hashed-id="aKGeX3" data-index-key="LJEGX"></div>
        <div class="stage">
            <div class="container">
                <div class="row">
                    <div class="badge-stage-left col-md-8">
                        <div id="jsid-post-container" class="post-list-t1" data-starttime="0" data-endtime="260" data-external-id="NoAofKePuHw" data-external-provider="1" data-interval="260" data-cover="http://cdn-jarvis-ftw.9gaging.com/media/photo/pkWPpdNW4_720w_v1.jpg" data-url="http://9gag.tv/p/aKGeX3/rainbow-and-nutella-valentine-day-gift-for-you" data-shorten-url="http://9gag.tv/p/aKGeX3" data-title="Heard You Love Rainbow And Nutella, Here Is The Best Valentine&#039;s Day Gift For You"></div>
                        <div id="jsid-youtube-subscription-bar" class="youtube-bar clearfix">
                            <h4 class="cta"><b>Subscribe to 9GAG</b></h4>
                            <div class="youtube">
                                <div class="g-ytsubscribe" data-channelid="UC_RpglAWgl88DYZsmECPlwg" data-layout="default" data-count="default"></div>
                            </div>
                        </div>
                        <!-- / youtube-bar -->
                        <div id="jsid-post-single-shares-bottom-container">
                            <div class="post-bar">
                                <div class="btn-container clearfix">
                                    <div class="pull-left hidden-xs hidden-sm"><a class="badge-upvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Upvote" href="javascript:void(0);"><i class="fa fa-arrow-up"></i></a><a class="badge-downvote-btn badge-evt btn btn-invert btn-lg" data-evt="PostAction,Vote,Downvote" href="javascript:void(0);"><i class="fa fa-arrow-down"></i></a>
                                    </div>
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
                        <div id="jsid-post-playlist" class="playlist">
                            <div class="scrollbar">
                                <div class="track">
                                    <div id="jsid-scrollbar-thumb" class="thumb">
                                        <div class="end"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="viewport">
                                <div class="overview">
                                    <div id="jsid-post-playlist-container" class="badge-post-grid-container post-list-t1 horizontal sidebar col-4" data-grid-key="PostPage-Playlist">
                                        <div class="badge-grid-item badge-post-item-a5wgX4" data-hashed-id="a5wgX4">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a5wgX4/cate-blanchett-gets-even-classier-in-disney-s-second-trailer-for-cinderella" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pVGbZbkGk_360w_v1.png') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a5wgX4/cate-blanchett-gets-even-classier-in-disney-s-second-trailer-for-cinderella" data-ga-label="TitleClicked"><h4>Cate Blanchett Gets Even Classier In Disney&#039;s Second Trailer For &quot;Cinderella&quot;</h4></a>
                                                    <div class="meta">
                                                        <p>2:23</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKGeZo" data-hashed-id="aKGeZo">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKGeZo/dr-phil-with-no-dialogue-can-tell-thousand-words" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pNWaJd4Gk_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKGeZo/dr-phil-with-no-dialogue-can-tell-thousand-words" data-ga-label="TitleClicked"><h4>&quot;Dr Phil&quot; With No Dialogue Can Tell Thousand Words</h4></a>
                                                    <div class="meta">
                                                        <p>2:10</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9PBMO" data-hashed-id="a9PBMO">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9PBMO/pole-vaulting-from-an-athlete-s-point-of-view" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/paGRjYNGx_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9PBMO/pole-vaulting-from-an-athlete-s-point-of-view" data-ga-label="TitleClicked"><h4>Pole Vaulting From An Athlete&#039;s Point Of View</h4></a>
                                                    <div class="meta">
                                                        <p>1:23</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9Jogv" data-hashed-id="a9Jogv">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9Jogv/teens-react-to-power-glove-nintendo" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/peGpO9bWO_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9Jogv/teens-react-to-power-glove-nintendo" data-ga-label="TitleClicked"><h4>Teens Try To Play Nintendo&#039;s &quot;Power Glove&quot; From 1989 And They Love It!</h4></a>
                                                    <div class="meta">
                                                        <p>8:49</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aV7ER2" data-hashed-id="aV7ER2">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aV7ER2/this-is-how-women-really-think-about-valentine-s-day" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/p5QrkE6WZ_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aV7ER2/this-is-how-women-really-think-about-valentine-s-day" data-ga-label="TitleClicked"><h4>This Is How Women Really Think About Valentine&#039;s Day</h4></a>
                                                    <div class="meta">
                                                        <p>3:18</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9MLMy" data-hashed-id="a9MLMy">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9MLMy/jon-stewart-is-going-to-leave-the-daily-show" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/ppGDVzKQN_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9MLMy/jon-stewart-is-going-to-leave-the-daily-show" data-ga-label="TitleClicked"><h4>Jon Stewart Is Going To Leave &quot;The Daily Show&quot;</h4></a>
                                                    <div class="meta">
                                                        <p>3:21</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aVn6ye" data-hashed-id="aVn6ye">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aVn6ye/europe-first-space-taxi-vega-has-successful-lift-off" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW18KqQ0_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aVn6ye/europe-first-space-taxi-vega-has-successful-lift-off" data-ga-label="TitleClicked"><h4>Europe&#039;s First &quot;Space Taxi&quot;, &quot;Vega&quot; Has Successful Lift Off</h4></a>
                                                    <div class="meta">
                                                        <p>4:44</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKl6b0" data-hashed-id="aKl6b0">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKl6b0/tongue-tied-miley-cyrus-nyc-porn-film-festival-nsfw" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pPgXAX5QJ_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKl6b0/tongue-tied-miley-cyrus-nyc-porn-film-festival-nsfw" data-ga-label="TitleClicked"><h4>&quot;Tongue Tied&quot; - Miley Cyrus&#039;s Official Entry Into The NYC Porn Film Festival (NSFW)</h4></a>
                                                    <div class="meta">
                                                        <p>2:03</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKj6va" data-hashed-id="aKj6va">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKj6va/the-guy-on-the-left-could-beat-lebron-james-anytime" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/p0W0woAQl_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKj6va/the-guy-on-the-left-could-beat-lebron-james-anytime" data-ga-label="TitleClicked"><h4>The Guy On The Left Could Beat LeBron James Anytime</h4></a>
                                                    <div class="meta">
                                                        <p>1:14</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9LWeX" data-hashed-id="a9LWeX">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9LWeX/barack-obama-deserves-a-grammy-for-his-shake-it-off" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pbWzKlkGk_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9LWeX/barack-obama-deserves-a-grammy-for-his-shake-it-off" data-ga-label="TitleClicked"><h4>Barack Obama Deserves A Grammy For His &quot;Shake It Off&quot;</h4></a>
                                                    <div class="meta">
                                                        <p>1:31</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKGeX3" data-hashed-id="aKGeX3">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKGeX3/rainbow-and-nutella-valentine-day-gift-for-you" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pkWPpdNW4_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKGeX3/rainbow-and-nutella-valentine-day-gift-for-you" data-ga-label="TitleClicked"><h4>Heard You Love Rainbow And Nutella, Here Is The Best Valentine&#039;s Day Gift For You</h4></a>
                                                    <div class="meta">
                                                        <p>4:20</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9JoZY" data-hashed-id="a9JoZY">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9JoZY/in-cat-s-language-no-no-no-means-yes-please-do" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/p2gOlXaQo_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9JoZY/in-cat-s-language-no-no-no-means-yes-please-do" data-ga-label="TitleClicked"><h4>In Cat&#039;s Language, &quot;No No No&quot; Means &quot;Yes, Please Do!&quot;</h4></a>
                                                    <div class="meta">
                                                        <p>00:36</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9pWJe" data-hashed-id="a9pWJe">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9pWJe/have-you-ever-wondered-if-you-will-die-on-mars" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/p3gKydqWq_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9pWJe/have-you-ever-wondered-if-you-will-die-on-mars" data-ga-label="TitleClicked"><h4>Have You Ever Wondered If You Will Die On Mars?</h4></a>
                                                    <div class="meta">
                                                        <p>10:22</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKWz1y" data-hashed-id="aKWz1y">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKWz1y/pitch-perfect-2-official-trailer-comes-in-like-a-wrecking-ball" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pkWPpXqW4_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKWz1y/pitch-perfect-2-official-trailer-comes-in-like-a-wrecking-ball" data-ga-label="TitleClicked"><h4>The New &quot;Pitch Perfect 2&quot; Official Trailer Comes In Like A Wrecking Ball</h4></a>
                                                    <div class="meta">
                                                        <p>2:23</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9Zd03" data-hashed-id="a9Zd03">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9Zd03/fifty-shades-of-buscemi-is-a-nightmare" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pzg2aJDGo_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9Zd03/fifty-shades-of-buscemi-is-a-nightmare" data-ga-label="TitleClicked"><h4>&quot;Fifty Shades Of Buscemi&quot; Is A Nightmare</h4></a>
                                                    <div class="meta">
                                                        <p>2:19</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aK1ynJ" data-hashed-id="aK1ynJ">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aK1ynJ/when-you-meet-a-pretty-woman" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pnQEEXwQy_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aK1ynJ/when-you-meet-a-pretty-woman" data-ga-label="TitleClicked"><h4>This Is Everything That Goes Through Your Head When You Meet A Pretty Woman</h4></a>
                                                    <div class="meta">
                                                        <p>4:00</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a5Bn8G" data-hashed-id="a5Bn8G">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a5Bn8G/be-careful-you-may-find-this-offensive" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pKGMxdLWP_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a5Bn8G/be-careful-you-may-find-this-offensive" data-ga-label="TitleClicked"><h4>Be Careful, You May Find This OFFENSIVE!</h4></a>
                                                    <div class="meta">
                                                        <p>3:48</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aVY80x" data-hashed-id="aVY80x">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aVY80x/how-the-dragons-in-game-of-thrones-season-4-are-created" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pVGbZMPGk_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aVY80x/how-the-dragons-in-game-of-thrones-season-4-are-created" data-ga-label="TitleClicked"><h4>This Is How The Dragons In &quot;Game of Thrones&quot; Season 4 Are Created</h4></a>
                                                    <div class="meta">
                                                        <p>4:19</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a94kne" data-hashed-id="a94kne">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a94kne/parrot-is-not-listening-when-you-re-having-sex" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pjQY0KogD_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a94kne/parrot-is-not-listening-when-you-re-having-sex" data-ga-label="TitleClicked"><h4>You Should Make Sure Your Parrot Is Not Listening When You&#039;re Having Sex With Your Partner</h4></a>
                                                    <div class="meta">
                                                        <p>00:51</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-aKk6Q0" data-hashed-id="aKk6Q0">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/aKk6Q0/jamie-dornan-fifty-accents-of-grey" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pZg8m0vQv_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/aKk6Q0/jamie-dornan-fifty-accents-of-grey" data-ga-label="TitleClicked"><h4>Watch Jamie Dornan Try &quot;Fifty ACCENTS  Of Grey&quot; On Jimmy&#039;s Show</h4></a>
                                                    <div class="meta">
                                                        <p>3:42</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="badge-grid-item badge-post-item-a9z0JA" data-hashed-id="a9z0JA">
                                            <div class="item clearfix post-playlist ">
                                                <a class="img-container" href="http://9gag.tv/p/a9z0JA/sia-live-performance-kristen-wiig-maddie-ziegler-grammys" data-ga-label="ImageClicked">
                                                    <div class="responsivewrapper" style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pPgXAdoQJ_360w_v1.jpg') center; background-size: cover;"></div>
                                                    <div class="responsivewrapper playing-mask hide"></div>
                                                </a>
                                                <div class="info"><a class="title" href="http://9gag.tv/p/a9z0JA/sia-live-performance-kristen-wiig-maddie-ziegler-grammys" data-ga-label="TitleClicked"><h4>Sia&#039;s Live Performance With Kristen Wiig And Maddie Ziegler At Grammys Is Perfect</h4></a>
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
                                    <div class="col-xs-6"><a class="badge-post-next btn btn-lg btn-invert btn-block " href="http://9gag.tv/p/a9LWeX/barack-obama-deserves-a-grammy-for-his-shake-it-off" role="button"><i class="fa fa-arrow-left"></i> Previous</a>
                                    </div>
                                    <!-- / col-xs-6 -->
                                    <div class="col-xs-6"><a class="badge-post-prev btn btn-lg btn-invert btn-block " href="http://9gag.tv/p/a9JoZY/in-cat-s-language-no-no-no-means-yes-please-do" role="button">Next <i class="fa fa-arrow-right"></i></a>
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
                                <h1>Heard You Love Rainbow And Nutella, Here Is The Best Valentine's Day Gift For You <small>4:20</small></h1>
                                <p class="meta"><span class="badge-post-upvote-count">19</span> points · <span class="badge-post-comment-count">59</span> comments</p>
                                <p id="jsid-description">Make it for your boyfriend/girlfriend/OWN, they will definitely love it. Share your masterpiece by hashtagging #9gagtv on Instagram! Check out Yoyomax12's channel for more awesome cooking recipes. <a target="_blank" href="http://goo.gl/E7bU77">http://goo.gl/E7bU77</a>
                                </p>
                                <p><b>8,340</b> views</p>
                            </header>
                        </div>
                    </article>
                    <div class="block-comment" id="comment">
                        <ul class="nav nav-tabs nav-justified aosp-fix">
                            <li class="badge-comment-li active"><a data-tab="comment" data-evt="CommentAction,PostPage-Tab,CommentSystemClicked" class="badge-comment-tab badge-comment-tab-comment badge-evt" href="javascript:void(0);">9GAG <span class="hidden-xs">Comments</span>&nbsp;<span class="badge-comment-count badge">59</span></a>
                            </li>
                            <li class="badge-comment-li"><a data-tab="facebook" data-evt="CommentAction,PostPage-Tab,FacebookCommentClicked" class="badge-comment-tab badge-comment-tab-fb badge-evt" href="javascript:void(0);">Facebook <span class="hidden-xs">Comments</span>&nbsp;<span class="badge-comment-count badge"></span></a>
                            </li>
                        </ul>
                        <div class="badge-comment-content plain" id="jsid-comment-comment">
                            <div class="badge-comment" id="jsid-comment-system-plugin" style="width: 100%; height: 542px;" data-rendered="1" data-href="http://9gag.tv/p/aKGeX3">
                                <iframe width="100%" height="700" frameborder="0" style="min-height: 100px; height: 542px;" src="about:blank" scrolling="no" id="gcomment-widget-jsid-comment-system-plugin" name="gcomment-widget-jsid-comment-system-plugin"></iframe>
                            </div>
                        </div>
                        <!-- / well -->
                        <div class="badge-comment-content fb-comments-responsive hide" id="jsid-comment-facebook" style="">
                            <div data-colorscheme="light" data-numposts="5" data-href="http://9gag.tv/p/aKGeX3" class="fb-comments fb_iframe_widget" id="jsid-comment-facebook-plugin" data-width="617" fb-xfbml-state="rendered"><span style="height: 0px; width: 617px;"><iframe id="f2af71e3d4ed162" name="f3d6f49a1a2e5e2" scrolling="no" style="border: medium none; overflow: hidden; height: 0px; width: 617px;" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=135197996682153&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FDU1Ia251o0y.js%3Fversion%3D41%23cb%3Df3bae891a457372%26domain%3D9gag.tv%26origin%3Dhttp%253A%252F%252F9gag.tv%252Ffd8273aa44623a%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2F9gag.tv%2Fp%2FaKGeX3&amp;locale=en_US&amp;numposts=5&amp;sdk=joey&amp;skin=light&amp;width=617"></iframe></span>
                            </div>
                        </div>
                        <!-- / fb-comments-responsive -->
                    </div>
                    <!-- / block-comment -->
                </div>
                <!-- / col-md-8 -->
                <div class="col-md-4 hidden-sm hidden-xs">
                    <div id="jsid-grid-random-post-container" class="sidebar">
                        <div class="section-header">
                            <h3>Most Popular</h3>
                        </div>
                        <div class="post-list-t1">
                            <div data-grid-key="PostPage-RandomPostsGrid" class="badge-post-grid-container">
                                <div data-hashed-id="aKWdPe" class="badge-grid-item badge-post-item-aKWdPe">
                                    <div class="item clearfix r-17-7">
                                        <a data-ga-label="ImageClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="img-container">
                                            <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW1a2qW0_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                        </a>
                                        <div class="info">
                                            <a data-ga-label="TitleClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="title">
                                                <h4>Here's How Cats See The World Around Them <small>1:56</small></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-t1">
                            <div data-grid-key="PostPage-RandomPostsGrid" class="badge-post-grid-container">
                                <div data-hashed-id="aKWdPe" class="badge-grid-item badge-post-item-aKWdPe">
                                    <div class="item clearfix r-17-7">
                                        <a data-ga-label="ImageClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="img-container">
                                            <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW1a2qW0_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                        </a>
                                        <div class="info">
                                            <a data-ga-label="TitleClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="title">
                                                <h4>Here's How Cats See The World Around Them <small>1:56</small></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-t1">
                            <div data-grid-key="PostPage-RandomPostsGrid" class="badge-post-grid-container">
                                <div data-hashed-id="aKWdPe" class="badge-grid-item badge-post-item-aKWdPe">
                                    <div class="item clearfix r-17-7">
                                        <a data-ga-label="ImageClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="img-container">
                                            <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW1a2qW0_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                        </a>
                                        <div class="info">
                                            <a data-ga-label="TitleClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="title">
                                                <h4>Here's How Cats See The World Around Them <small>1:56</small></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-t1">
                            <div data-grid-key="PostPage-RandomPostsGrid" class="badge-post-grid-container">
                                <div data-hashed-id="aKWdPe" class="badge-grid-item badge-post-item-aKWdPe">
                                    <div class="item clearfix r-17-7">
                                        <a data-ga-label="ImageClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="img-container">
                                            <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW1a2qW0_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                        </a>
                                        <div class="info">
                                            <a data-ga-label="TitleClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="title">
                                                <h4>Here's How Cats See The World Around Them <small>1:56</small></h4>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-list-t1">
                            <div data-grid-key="PostPage-RandomPostsGrid" class="badge-post-grid-container">
                                <div data-hashed-id="aKWdPe" class="badge-grid-item badge-post-item-aKWdPe">
                                    <div class="item clearfix r-17-7">
                                        <a data-ga-label="ImageClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="img-container">
                                            <div style="background: url('http://cdn-jarvis-ftw.9gaging.com/media/photo/pRW1a2qW0_360w_v1.jpg') center; background-size: cover;" class="responsivewrapper"></div>
                                        </a>
                                        <div class="info">
                                            <a data-ga-label="TitleClicked" href="http://9gag.tv/p/aKWdPe/here-s-how-cats-see-the-world-around-them?ref=tcr" class="title">
                                                <h4>Here's How Cats See The World Around Them <small>1:56</small></h4>
                                            </a>
                                        </div>
                                    </div>
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