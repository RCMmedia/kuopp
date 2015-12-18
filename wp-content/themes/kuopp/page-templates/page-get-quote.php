<?php
/**
 * Template Name: Get A Quote
 */

get_header(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
	
	<div class="inner-wrap">
		<h2 class="secondary-title">GET A QUOTE</h2>
		
		<div class="intro">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
		
		<h3>Our Process</h3>
		<ul class="our-process-accordion">
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 1: We meet</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 2: We talk</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 3: You pay</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 4: I work</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 5: You happy</h2>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		</ul><!-- .our-process-accordion -->
		
		<div class="quote-form-wrap">
			<h3>Apply Today</h3>
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
		
		
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
