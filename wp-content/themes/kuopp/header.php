<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<title>
<?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url') ?>/style-global.css" />
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
</script> <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.9.8/TweenMax.min.js'></script>

<script src="<?php bloginfo('template_url') ?>/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.animateNumber.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.cycle.min.js"></script>
<script>
	
	$(document).ready(function() {
		var config = {};
		config.window = $(window);
		config.wWidth = config.window.width();
		config.wHeight = config.window.height();
		config.t = 1;
		config.t2 = 3;
		config.e = Power2.easeOut;
		config.e2 = Power2.easeIn;
		config.pageTrans = new TimelineMax({
		    repeat: -1,
		    repeatDelay: 0,
		    yoyo: true
		});
		config.pageTrans.fromTo('.green', config.t, { x: config.wWidth / 2 }, {
		    x: 0,
		    ease: config.e
		}, 'f').fromTo('.dark-blue', config.t, { x: -config.wWidth / 2 }, {
		    x: 0,
		    ease: config.e
		}, 'f').fromTo('.black', config.t, { y: -config.wHeight }, {
		    y: 0,
		    ease: config.e
		}, 'f').fromTo('.gold', config.t, { y: config.wHeight }, {
		    y: 0,
		    ease: config.e
		}, 'f').fromTo('.dark-blue', config.t2, { y: 0 }, {
		    y: -config.wHeight / 2,
		    ease: config.e2
		}, 'f+=.8').fromTo('.green', config.t2, { y: 0 }, {
		    y: config.wHeight / 2,
		    ease: config.e2
		}, 'f+=.8').fromTo('#pre-loader', 2.5, { rotation: 0 }, {
		    rotation: 10,
		    ease: config.e
		}, 'f').fromTo('.vic-gb', 0.8, {
		    rotation: 0,
		    scale: 0
		}, {
		    rotation: -10,
		    scale: 1,
		    ease: Back.easeOut
		}, 'f+=.6');
 
    setTimeout(function(){
	    //stop preloader animation
      TweenMax.killAll(false, true, false);
	    //load wrapper after all assets are loaded and page loader finishes
	    $("#wrapper").addClass("loaded");
	    //fadeout preloader
      $("#pre-loader").hide();      
      $(".our-process-accordion").addClass("loaded")
      //about us page accordian
      jQuery('.expand_content').hide();
    	jQuery('h4.expand').on('click', function() {
    	    var state = jQuery(this).next('.expand_content').is('.open');
    	    if (state) {
    	        jQuery(this).next('.expand_content').removeClass('open').fadeOut();
    	    }else{
    	        jQuery(this).next('.expand_content').addClass('open').slideDown()
    	               .siblings('.expand_content').removeClass('open').slideUp();
    	    }
    	});
			
    	}, 3000);
 
	});
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="pre-loader">
  <div class="square black"></div>
  <div class="square green"></div>
  <div class="square gold"></div>
  <div class="square dark-blue"></div>
  
  <div class="vic-gb"></div>
</div>
<div id="wrapper" class="hfeed">
	<div class="green-trim"></div>
	<div class="sidebar">
		<div id="mobile-menu-icon">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
		<div class="logo">
			<a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo" width="167" height="64"></a>
		</div><!-- .logo -->
			
			
		<span class="show-main-navigation gold-button">Main Menu <span class="icon-hamburger"></span></span>	

			<div class="main-navigation-wrap">
				
			<div class="navigation">
				<ul>
					<li><img src="<?php bloginfo('template_url') ?>/images/nav-icon-getaquote.png" alt="nav-icon-getaquote" width="20" height="24"><a href="<?php bloginfo('url') ?>/quote/">Get a Quote</a><span></span></li>
					<li><img src="<?php bloginfo('template_url') ?>/images/nav-icon-aboutus.png" alt="nav-icon-aboutus" width="20" height="24"><a href="<?php bloginfo('url') ?>/about-us">About Us</a><span></span></li>
					<li><img src="<?php bloginfo('template_url') ?>/images/nav-icon-projects.png" alt="nav-icon-projects" width="20" height="24"><a href="<?php bloginfo('url') ?>/projects/">Projects</a><span></span></li>
					<li><img src="<?php bloginfo('template_url') ?>/images/nav-icon-location.png" alt="nav-icon-location" width="20" height="24"><a href="<?php bloginfo('url') ?>/locations">Locations</a><span></span></li>
					<li><img src="<?php bloginfo('template_url') ?>/images/nav-icon-reviews.png" alt="nav-icon-reviews" width="20" height="24"><a href="<?php bloginfo('url') ?>/reviews">Leave a review</a><span></span></li>
				</ul>
			</div><!-- .navigation -->
			<div class="social-icons">
				<a href=""><img src="<?php bloginfo('template_url') ?>/images/social-icon-fb.png" alt="social-icon-fb"></a>
				<a href=""><img src="<?php bloginfo('template_url') ?>/images/social-icon-houzz.png" alt="social-icon-fb"></a>
				<a href=""><img src="<?php bloginfo('template_url') ?>/images/social-icon-dunno.png" alt="social-icon-fb"></a>
				<a href=""><img src="<?php bloginfo('template_url') ?>/images/social-icon-linkedin.png" alt="social-icon-fb"></a>
				<a href=""><img src="<?php bloginfo('template_url') ?>/images/social-icon-gplus.png" alt="social-icon-fb"></a>
			</div><!-- .social-icons -->
		</div><!-- .main-navigation-wrap -->
		
		<?php if ( is_singular('project') || is_page_template('page-templates/page-projects.php') ) { ?>
			
			<h3>Search:</h3>
			
			<?php $my_search = new WP_Advanced_Search('my-form');
					$my_search->the_form();
				
				 ?>
			
		<?php } ?>	
		<script>
			jQuery(".show-main-navigation").click(function(){
				jQuery(".main-navigation-wrap").slideToggle();
			});
			$('#mobile-menu-icon').click(function(){
				$(this).toggleClass('open');
				$(".sidebar").toggleClass("mobile-loaded")
			});
		</script>	
		
	</div><!-- .sidebar -->
	<div class="main-content-wrap">
<!-- 		FYI .main-content-wrap closes in the footer  -->
	