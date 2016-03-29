<?php
/**
 * Template Name: Locations
 */

get_header(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
	
	<div class="inner-wrap">
		<h2 class="secondary-title">Find Us</h2>
		
		<div class="location-box">
			<div class="map-image">
				<a href="https://www.google.com/maps/place/3962+Mt+Acadia+Blvd,+San+Diego,+CA+92111/@32.8132155,-117.1841667,17z/data=!3m1!4b1!4m2!3m1!1s0x80dc000cdc29b3b3:0x9dfe5f1b27de7738" target="_blank"><img src="http://maps.google.com/maps/api/staticmap?center=32.813211,-117.181978&zoom=13&markers=32.813211,-117.181978|32.813211,-117.181978&size=200x120&sensor=true"></a>
			</div>
			<div class="location-name">
				San Diego
			</div>
			<div class="location-info">
				<span class="address">3962 Mt Acadia Blvd<br>
				San Diego 92111<br></span>			
				<span class="emailaddress"><a href="mailto:davidk@kuopdesigns.com">davidk@kuopdesigns.com</a></span>
			</div><!-- .location-info -->
			<div class="leave-review">
				<a class="gold-button" href="<?php bloginfo('url') ?>/reviews">Leave a Review</a>
			</div>
		</div><!-- .location-box -->
		
		<div class="location-box">
			<div class="map-image">
				<a href="https://www.google.com/maps/place/1730+Peregrino+Way,+San+Jose,+CA+95125/@37.2885373,-121.9145554,17z/data=!3m1!4b1!4m2!3m1!1s0x808e349a10119983:0xc9f4d826b4cb94f2" target="_blank"><img src="http://maps.google.com/maps/api/staticmap?center=37.288533,-121.912367&zoom=13&markers=32.813211,-117.181978|32.813211,-117.181978|37.288533,-121.912367&size=200x120&sensor=true"></a>
			</div>
			<div class="location-name">
				San Jose
			</div>
			<div class="location-info">
				<span class="address">1730 Peregrino Way<br>
				San Jose 95125</span><br>			
				<span class="emailaddress"><a href="mailto:davidk@kuopdesigns.com">davidk@kuopdesigns.com</a></span>
			</div><!-- .location-info -->
			<div class="leave-review">
				<a class="gold-button" href="<?php bloginfo('url') ?>/reviews">Leave a Review</a>
			</div>
		</div><!-- .location-box -->
		
		
	</div><!-- .inner-wrap -->
	
	<div class="bottom-get-quote">
		<div class="inner">
			<h3>Want to <span>learn more?</span></h3>
			<a href="">Get a Quote <img src="<?php bloginfo('template_url') ?>/images/arrow-white.png" alt="arrow-white" width="8" height="12" /></a>
		</div>
	</div><!-- .bottom-get-quote -->
<script>
jQuery(document).ready(function() {
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
});
</script>
<?php get_footer(); ?>
