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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<!-- <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script> -->
<!-- <script src="<?php bloginfo('template_url') ?>/js/jquery.hashchange.min.js" type="text/javascript"></script> -->
<script src="<?php bloginfo('template_url') ?>/js/jquery.easytabs.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.animateNumber.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.cycle.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
	<div class="green-trim"></div>
	<div class="sidebar">
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
			
			G$ will add in the menu here
			
		<?php } ?>	
		<script>
			jQuery(".show-main-navigation").click(function(){
				jQuery(".main-navigation-wrap").slideToggle();
			});
		</script>	
		
		
	</div><!-- .sidebar -->
	<div class="main-content-wrap">
<!-- 		FYI .main-content-wrap closes in the footer  -->
	