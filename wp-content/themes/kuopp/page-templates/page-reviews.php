<?php
/**
 * Template Name: Reviews
 */

get_header(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
		
	<div class="review-module">
					<div class="vertically-align">
						<div class="stars_wrap">
							<div class="cta">
								How are we doing? <br> 
								Your <span class="blue">feedback</span> is important to us!
							</div><!-- .my_title -->
							<div class="stars">
								<input type="radio"  id="choice_1star" value="1star" class="star-1 star">
								<label onclick="ga('send', 'event', 'Review Module', 'Click', '1 Star');" id="label_1star" class="star-1"></label>
								
								<input type="radio"  id="choice_2star" value="2star" class="star-2 star">
								<label onclick="ga('send', 'event', 'Review Module', 'Click', '2 Star');"  id="label_2star" class="star-2"></label>
								
								<input type="radio"  id="choice_3star" value="3star" class="star-3 star">
								<label onclick="ga('send', 'event', 'Review Module', 'Click', '3 Star');"  id="label_3star" class="star-3"></label>
								
								<input type="radio"  id="choice_4star" value="4star" class="star-4 star">
								<label onclick="ga('send', 'event', 'Review Module', 'Click', '4 Star');"  id="label_4star" class="star-4"></label>
								
								<input type="radio"  id="choice_5star" value="5star" class="star-5 star">
								<label onclick="ga('send', 'event', 'Review Module', 'Click', '5 Star');"  id="label_5star" class="star-5"></label>
								<span></span>
							</div> <!-- .stars -->
						</div><!-- .stars_wrap -->
						
						<div class="review-form" style="display: none">
							<p>You're not supposed to be here. Lets talk about it. Fill out the form below and we will contact shortly.<br>
- Kuoppamaki Designs Management </p>
							<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); //review contact form ?>
						</div>
						
						<div class="review-sites" style="display: none">
							<p class="cta">We value your opinion. Please pick your review site of choice and take a quick moment to write us a review. Tell us about your experience!</p>
							<?php
								if ( get_field('location_facebook_link')){
									 	echo ('<a href="'.get_field('location_facebook_link').'" class="social-icon facebook"></a>'); 
								} else {
										echo('<a href="https://www.facebook.com/Kuopdesigns/reviews/" class="social-icon facebook"></a>');
								}
								?>
								
							<?php
								if ( get_field('location_google_plus_link')){
									 	echo ('<a href="'.get_field('location_google_plus_link').'" class="social-icon google"></a>'); 
								} else {
										echo('<a href="https://plus.google.com/117426444200055406259/about" class="social-icon google"></a>');
								}
								?>
								
							<?php
								if ( get_field('location_yelp_link')){
									 	echo ('<a href="'.get_field('location_yelp_link').'" class="social-icon yelp"></a>'); 
								} else {
										echo('<a href="http://www.yelp.com/biz/rubicon-deli-san-diego" class="social-icon yelp"></a>');
								}
								?>
						</div><!-- .review-sites -->
					</div>
				</div><!-- .review-module -->		
		
	<div class="bottom-get-quote">
		<div class="inner">
			<h3>Want to <span>learn more?</span></h3>
			<a href="">Get a Quote <img src="<?php bloginfo('template_url') ?>/images/arrow-white.png" alt="arrow-white" width="8" height="12" /></a>
		</div>
	</div><!-- .bottom-get-quote -->
<script>
	//review star logic
			jQuery("label.star-1").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
				jQuery(".review-module").css("height","600px");
  		});			
	  	jQuery("label.star-2").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
				jQuery(".review-module").css("height","600px");
 			});			
	  	jQuery("label.star-3").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
				jQuery(".review-module").css("height","600px");
  		}); 		
	  	jQuery("label.star-4").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review-sites').fadeIn();
				});
  		});			
	  	jQuery("label.star-5").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review-sites').fadeIn();
				});
  		});
</script>

<?php get_footer(); ?>
