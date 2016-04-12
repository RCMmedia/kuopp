<?php
/**
 * Template Name: About us
 */

get_header(); ?>
	<h1 class="page-title"><?php the_title(); ?></h1>
	<div class="inner-wrap">

		<h2 class="secondary-title">MEET KUOPPAMAKI DESIGNS</h2>
		
		<div class="banner-wrap">
			
			<img class="responsive banner" src="<?php the_field('aboutus_main_banner'); ?>" alt="banner-aboutus" width="715" height="207" />
			
			<div class="quote">
				<img src="<?php bloginfo('template_url') ?>/images/quote-left.jpg" alt="quote-left" width="14" height="14" /><?php the_field('aboutus_quote_text'); ?><img src="<?php bloginfo('template_url') ?>/images/quote-right.jpg" alt="quote-left" width="14" height="14" /><br>- <?php the_field('aboutus_quote_author'); ?> 
			</div><!-- .quote -->
		</div><!-- .banner-wrap -->
			
		<div class="aboutus_content clearfix">
			
				<?php the_field('aboutus_content_left'); ?>

<!--
			<div class="right">
				<?php the_field('aboutus_content_right'); ?>
			</div>
--><!-- .right -->
		</div><!-- .content -->
			
		<div class="partners clearfix">
			<h3>Meet the Partners</h3>
			<div class="team-member">
				<img src="<?php bloginfo('template_url') ?>/images/dave.jpg">
				<span>Dave Kuoppamaki<br>Owner</span>
			</div><!-- .team-member -->
			<div class="team-member">
				<img src="<?php bloginfo('template_url') ?>/images/dad.jpg">
				<span>Juha Kuoppamaki<br>Owner</span>
			</div><!-- .team-member -->
		</div><!-- .partners -->
		
	</div><!-- .inner-wrap -->
	
	<div class="bottom-get-quote">
		<div class="inner">
			<h3>Want to <span>learn more?</span></h3>
			<a href="">Get a Quote <img src="<?php bloginfo('template_url') ?>/images/arrow-white.png" alt="arrow-white" width="8" height="12" /></a>
		</div>
	</div><!-- .bottom-get-quote -->


<?php get_footer(); ?>
