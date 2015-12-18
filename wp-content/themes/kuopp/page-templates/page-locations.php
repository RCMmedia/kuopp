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
				<img src="http://maps.google.com/maps/api/staticmap?center=37.387800,-122.073153&zoom=12&size=200x120&sensor=true">
			</div>
			<div class="location-name">
				San Diego
			</div>
			<div class="location-info">
				<span class="address">123 Some Street<br>
				San Diego, CA 92109</span><br>			
				<span class="telephone"><a href="tel:555.555.5555">555.555.5555</a></span><br>				
				<span class="emailaddress"><a href="mailto:info@domain.com">info@domain.com</a></span>
			</div><!-- .location-info -->
			<div class="leave-review">
				<a class="gold-button" href="">Leave a Review</a>
			</div>
		</div><!-- .location-box -->
		
		<div class="location-box">
			<div class="map-image">
				<img src="http://maps.google.com/maps/api/staticmap?center=37.387800,-122.073153&zoom=12&size=200x120&sensor=true">
			</div>
			<div class="location-name">
				San Diego
			</div>
			<div class="location-info">
				<span class="address">123 Some Street<br>
				San Diego, CA 92109</span><br>			
				<span class="telephone"><a href="tel:555.555.5555">555.555.5555</a></span><br>				
				<span class="emailaddress"><a href="mailto:info@domain.com">info@domain.com</a></span>
			</div><!-- .location-info -->
			<div class="leave-review">
				<a class="gold-button" href="">Leave a Review</a>
			</div>
		</div><!-- .location-box -->
		
		
	</div><!-- .inner-wrap -->
	
	<div class="bottom-get-quote">
		<div class="inner">
			<h3>Want to learn <span style="color:">more?</span></h3>
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
