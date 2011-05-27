<?php
/**
 * Template Name: homepage

*/

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/default.css">
<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="/css/styles_ie.css" />
	<![endif]-->
<script type="text/javascript" src="/js/l10n.js"></script>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/tfuse-top-panel.js"></script>
<script type="text/javascript" src="/js/sendmail.js"></script>
<link href="/css/default.css" rel="stylesheet" type="text/css">
<link href="/css/custom.css" rel="stylesheet" type="text/css">
<meta name="keywords" content="<?php echo get_post_meta($post->ID,'keywords',true) ?>">
<meta name="description" content="<?php echo get_post_meta($post->ID,'description',true) ?>">
<meta name="author" content="xtunes">
<script type="text/javascript" language="javascript" src="/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.innerfade.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.tools.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jcarousellite_1.3.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.columnhover.pack.js"></script>
<script type="text/javascript" language="javascript" src="/js/general.js"></script>
<link rel="stylesheet" type="text/css" href="/css/jquery-ui-1.8.4.custom.css">
<link rel="stylesheet" type="text/css" href="/css/ui.selectmenu.css">
<script type="text/javascript" language="javascript" src="/js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" language="javascript" src="/js/ui.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="/js/styled.selectmenu.js"></script>
<script type="text/javascript" language="javascript" src="/js/custom.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="/css/prettyPhoto.css">
<script type="text/javascript" language="javascript" src="/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="/js/anythingSlider.js"></script>
<script type="text/javascript" src="/js/preloadCssImages.js"></script>
<script type="text/javascript" language="javascript" src="/js/jquery.nivo.slider.js"></script>
<script language="javascript" type="text/javascript">     
		$(document).ready(function(){
	
			$('.slideshow').anythingSlider({
					easing: "easeInOutExpo",
					autoPlay: false,
					startStopped: false,
					animationTime: 600,
					hashTags: false,
					buildNavigation: true,
					buildArrows: false,
					pauseOnHover: true,
					startText: "Go",
					stopText: "Stop"
				});
				
		});
	</script>
<link rel="stylesheet" type="text/css" href="/css/home.css">
<script type="text/javascript" language="javascript" src="/js/home.js"></script>
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body onload="load_animations()">
<div class="header_img" id="aside2" style="height: 558px; background-image: none; opacity: 1; background-color: rgb(5, 64, 101); ">
	
  <div class="topnav">
    <div class="container_12">
      <div class="logo"><a href="/"><img src="/images/logo.png" alt="Envision"></a></div>
      <!-- topmenu -->
      <div class="menu-header">
        <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      </div>
      <!--/ topmenu -->
    </div>
  </div>
  <!--/ header -->
  <!-- slider -->
  <div class="container_12">
    <div class="slider">
      <div id="header_images" style="height: 468px; opacity: 1; "> <img src="/images/slider1_image_2.jpg" class="header_image" color="#054065" alt="" link="" target="_self" style="opacity: 1; margin-left: 0px; margin-top: 0px; width: 960px; height: 468px; display: block; "> <img src="/images/slider1_image_1.jpg" class="header_image" color="#17191e" alt="" link="" target="_self" style="opacity: 0; display: block; margin-left: 0px; margin-top: 0px; width: 960px; height: 468px; "> <img src="/images/slider1_image_3.jpg" class="header_image" color="#3f0731" alt="" link="" target="_self" style="opacity: 0; display: block; margin-left: 0px; margin-top: 0px; width: 960px; height: 468px; "> </div>
      <div class="header_controls"> <a href="http://themefuse.com/demo/wp/envision/#" id="header_controls_left" style="opacity: 1; display: block; left: 4.225000000000001px; ">Previous</a> <a href="http://themefuse.com/demo/wp/envision/#" id="header_controls_right" style="opacity: 1; display: block; right: 4.225000000000001px; ">Next</a> </div>
      <div id="overlay_bg" style="height: 468px; "></div>
    </div>
  </div>
  <!--/ slider -->
</div>
<div class="welcome_bar">
  <!-- bar -->
  <div class="container_12 bar">
    <div class="bar-icon"> <img src="/images/icon_rss.png"> </div>
    <div class="bar-title">
      <h1>Welcome to <span>Envision</span>, the interactive agency!</h1>
      <div class="breadcrumbs">We have a passion for pixel perfect design. But don’t take our word for it, look for yourself:</div>
    </div>
    <div class="bar-right">
      <p><a class="button_link  large_button" href="http://themefuse.com/demo/wp/envision/category/portfolio-4-columns/" target="_self"><span>View Portfolio</span></a> </p>
    </div>
    <div class="clear"></div>
  </div>
  <!--/ bar -->
</div>
<!-- middle body -->
<div class="middle homepage" id="full_width">
  <div class="container_12">
    <!-- <div class="text">	-->
    <div class="col col_1_3 ">
      <div class="inner">
        <h2 class="blue">Multiple Colors &amp; Slider options</h2>
        <p>Sliders in all forms &amp; colors: Javascript, Flash, you name it! We’ve got it! But <img src="/images/temp_img_1.png" alt="" width="93" height="76" class="alignright"> the best part is that they can be easily modified to fit your company’s look &amp; feel.<br>
          <a class="link-more" href="http://themefuse.com/demo/wp/envision/#">more details</a> </p>
      </div>
    </div>
    <div class="col col_1_3 ">
      <div class="inner">
        <h2>Award winning design &amp; coding</h2>
        <p>These three icons below the text paragraphs are <img src="/images/temp_img_2.png" alt="" width="93" height="76" class="alignright"> custom created for the Envision theme &amp; the included PSD files contain all the layers needed to edit them.<br>
          <a class="link-more" href="http://themefuse.com/demo/wp/envision/#">more details</a> </p>
      </div>
    </div>
    <div class="col col_1_3 ">
      <div class="inner">
        <h2>Great support in just 24 hours</h2>
        <p>If you buy this theme we offer 24 hours <img src="/images/temp_img_3.png" class="alignright"> response time on our dedicated support forums. That’s “best in class” support offer, it just can’t get better &amp; faster than this!<br>
          <a class="link-more" href="http://themefuse.com/demo/wp/envision/#">more details</a> </p>
      </div>
    </div>
    <div class="divider_space"></div>
    <div class="box big box_white">
      <div class="col col_2_3 ">
        <div class="inner">
          <div id="testimonials" class="quoteBox-big">
            <div class="quote-title"><strong>WHAT OTHERS SAY ABOUT US:</strong></div>
            <div id="quotes" style="position: relative; height: 115px; " class="innerfade">
              <div class="fadecontents" style="z-index: 2; position: absolute; display: none; ">
                <div class="quote-text" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">Over the last eighteen months our sales have increased three-fold since the launch of our new web site. We have to say it has made us delighted we chose Envision.</div>
                <div class="quote-author"><span class="violet">George MANSION, </span> FOUNDER SILICON APP inc</div>
              </div>
              <div class="fadecontents" style="z-index: 1; position: absolute; display: block; ">
                <div class="quote-text" style="margin-top: 0px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; ">To me, ThemeFuse themes are like designer clothes for your website. I’d love to get a whole closet full of them.</div>
                <div class="quote-author"><span class="violet">Marissa, </span> Seo Marketing Tips</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col col_1_3 ">
        <div class="inner">
          <!-- newsletter -->
          <p></p>
          <div class="newsletterBox">
            <div class="bg">
              <div class="ribbon"></div>
              <h2>Stay in touch with us!</h2>
              <div class="before-text">Sign up for our weekly newsletter to receive updates, news, and interesting tidbits.</div>
              <form action="http://themefuse.com/demo/wp/envision/#" method="post">
                <input type="text" value="" name="newsletter" class="inputField">
                <input type="submit" value="" name="" class="btn-submit">
                <div class="clear"></div>
                <p></p>
              </form>
            </div>
          </div>
          <p>
            <!--/ newsletter -->
          </p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="divider_space"></div>
    <div class="col col_1_2 ">
      <div class="inner">
        <!-- tab box -->
        <div class="tabBox">
          <div class="tabTitle">
            <h3>Services:</h3>
          </div>
          <ul class="tabs">
            <li class="current"><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_1.png" width="51" height="42"></a></li>
            <li><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_2.png" width="51" height="42" alt="Apps" title="Apps"></a></li>
            <li><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_3.png" width="51" height="42"></a></li>
          </ul>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: block; ">
            <div class="inner"> <img src="/images/temp_img_1.jpg" alt="" width="230" height="143" class="alignleft">
              <h3>Creative webdesign</h3>
              The point of using Lorem Ipsum is that it has a near “more-or-less” normal and distribution of letters.
              <div class="clear"></div>
            </div>
          </div>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: none; ">
            <div class="inner"> <img src="/images/temp_img_2.jpg" alt="" width="230" height="143" class="alignleft">
              <h3 class="">Apps for Mobile phones</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
              <div class="clear"></div>
            </div>
          </div>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: none; ">
            <div class="inner"> <img src="/images/temp_img_3.jpg" alt="" width="230" height="143" class="alignright">
              <h3>Statistics</h3>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <!--/ tab box -->
      </div>
    </div>
    <div class="col col_1_2 ">
      <div class="inner">
        <!-- tab box -->
        <div class="tabBox">
          <div class="tabTitle">
            <h3>Solutions:</h3>
          </div>
          <ul class="tabs">
            <li class="current"><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_5.png" width="51" height="42"></a></li>
            <li><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_4.png" width="51" height="42"></a></li>
            <li><a href="http://themefuse.com/demo/wp/envision/#"><img src="/images/icon_6.png" width="51" height="42"></a></li>
          </ul>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: block; ">
            <div class="inner"> <img src="/images/temp_img_3.jpg" width="230" height="143" class="alignleft">
              <h3>Apps for Mobile phones</h3>
              The point of using Lorem Ipsum is that it has a near “more-or-less” normal and distribution of letters.
              <div class="clear"></div>
            </div>
          </div>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: none; ">
            <div class="inner">
              <h3>Everything for your need!</h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <div class="clear"></div>
            </div>
          </div>
          <div id="tf_tabs_" .$k.="" class="tabcontent" style="display: none; ">
            <div class="inner"> <img src="/images/temp_img_2.jpg" alt="Weather" width="230" height="143" class="alignleft">
              <h3>Weather</h3>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <!--/ tab box -->
      </div>
    </div>
    <!-- </div> -->
    <div class="clear"></div>
  </div>
</div>
<!--/ middle body -->
<div class="footer">
  <div class="footer_bg">
    <div class="container_12">
      <div class="col_1_4 col">
        <div class="inner">
          <div id="text-6" class="widget widget_text">
            <h3>What we do</h3>
            <div class="textwidget">
              <ul>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Interactive Technology</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Online Marketing</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Website Design</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Strategy &amp; Analysis</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">E-Learning</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col_1_4 col">
        <div class="inner">
          <div id="text-7" class="widget widget_text">
            <h3>Who We Are</h3>
            <div class="textwidget">
              <ul>
                <li><a href="http://themefuse.com/demo/wp/envision/#">About us</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Our History</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Vision that drives us</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">The Mission</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col_1_4 col">
        <div class="inner">
          <div id="text-8" class="widget widget_text">
            <h3>Featured work</h3>
            <div class="textwidget">
              <ul>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Silicon App</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Art Gallery</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Bon Apetit </a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Exquisite Works</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Clean Classy Corp</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col_1_4 col">
        <div class="inner">
          <div id="text-9" class="widget widget_text">
            <h3>From our Blog</h3>
            <div class="textwidget">
              <ul>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Just released WS 2.3</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Not going to support IE6...</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Great feedback from...</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Don’t ask when!</a></li>
                <li><a href="http://themefuse.com/demo/wp/envision/#">Best tutorial on jQuery</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="divider_space"></div>
      <div class="col_2_3 col">
        <div class="inner">
          <div id="text-10" class="widget widget_text">
            <div class="textwidget"><a href="http://twitter.com/#!/themefuse" class="link-twitter" title="Twitter">Twitter</a> <a href="http://www.facebook.com/themefuse?v=app_4949752878" class="link-fb" title="Facebook">Facebook</a> <a href="http://www.flickr.com/photos/themefuse/" class="link-flickr" title="Flickr">Flickr</a> <a href="http://themefuse.deviantart.com/gallery/" class="link-da" title="deviantART">deviantART</a> <a href="http://feeds.feedburner.com/Themefusecom" class="link-rss" title="RSS Feed">RSS Feed</a></div>
          </div>
        </div>
      </div>
      <div class="col_1_3 col">
        <div class="inner">
          <div id="text-11" class="widget widget_text">
            <div class="textwidget">
              <p class="copyright">© 2010 <a href="http://www.themefuse.com/" target="_blank">Themefuse.com</a>. Please don’t steal!</p>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- SyntaxHighlighter -->
<script type="text/javascript" language="javascript" src="/js/shCore.js"></script>
<script type="text/javascript" language="javascript" src="/js/shBrushPlain.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="/css/shCore.css">
<link rel="stylesheet" type="text/css" media="screen" href="/css/shThemeDefault.css">
<!--/ SyntaxHighlighter -->
<!-- Code SyntaxHighlighter -->
<script type="text/javascript">
	SyntaxHighlighter.defaults['gutter'] = false;
	SyntaxHighlighter.defaults['toolbar'] = true;
	SyntaxHighlighter.all();
	</script>
<!--/ Code SyntaxHighlighter -->
</body>
</html>