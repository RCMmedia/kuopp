<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>


	<div class="hero-banner">
		<img src="<?php the_field('homepage_main_banner'); ?>">
	</div><!-- .hero-banner -->
	<div class="get-quote">
		<img class="bg" src="<?php bloginfo('template_url') ?>/images/blueprint.png" alt="get-quote-bg" width="305" height="428" />
		<div class="get-quote-inner">
			<h2><?php the_field('homepage_intro_h2'); ?></h2>
			<?php the_field('homepage_intro_paragraph'); ?>
			<a class="portfolio-link" href="<?php bloginfo('url') ?>/projects/">View some of our projects<img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" /></a>
<!-- 			<a class="portfolio-link" href="">Commercial <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" /></a> -->
			<a class="gold-button" href="<?php bloginfo('url') ?>/quote/">Get a Quote</a>
			<a class="gold-button" href="<?php bloginfo('url') ?>/about-us">About Us</a>
		</div>
	</div><!-- .get-quote -->
	
	<div class="our-process">
		 
		<div id="ajax-tab-container" class="tab-container">
			
			<ul class="tabs progress">
		 		<li class="tab circle">
		 			<a href="#step1" class="label"><span>1</span></a>
		 			<span class="title">0%</span>
		 		</li>
		 		<span class="bar"></span>
		 		<li class="tab circle">
		 			<a href="#step2" class="label"><span>2</span></a>
		 			<span class="title">25%</span>
		 		</li>
		 		<span class="bar half"></span>
		 		<li class="tab circle">
		 			<a href="#step3" class="label"><span>3</span></a>
		 			<span class="title">50%</span>
		 		</li>
		 		<span class="bar"></span>
		 		<li class="tab circle">
		 			<a href="#step4" class="label"><span>4</span></a>
		 			<span class="title">75%</span>
		 		</li>
		 		<span class="bar"></span>
		 		<li class="tab circle">
		 			<a href="#step5" class="label"><span>5</span></a>
		 			<span class="title">100%</span>
		 		</li>
		 	</ul>
		 	
		 	<div class="panel-container clearfix">
			 	
			 	
		  	<div id="step1">
			  	<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title"><?php the_field('title_step_1'); ?></h3>
						  <?php the_field('content_step_1'); ?>
				  	</div><!-- .textbox -->
			  	</div>
				  <div class="next-back-wrap">
				  	<a rel="1" class="next-tab btn success first" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-next.png"/></a>				  	
				  </div>
		  	</div><!-- .step1 -->
		  	
		  	<div id="step2">
			  	<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title"><?php the_field('title_step_2'); ?></h3>
						  <?php the_field('content_step_2'); ?>
				  	</div><!-- .textbox -->
			  	</div>
				  <div class="next-back-wrap">
					  <a rel="0" class="prev-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-back.png"/></a>
						<a rel="2" class="next-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-next.png"/></a>
				 	</div><!-- .next-back-wrap -->
		  	</div><!-- .step2 -->
		  	
		  	<div id="step3">
		  		<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title"><?php the_field('title_step_3'); ?></h3>
						  <?php the_field('content_step_3'); ?>
				  	</div><!-- .textbox -->
		  		</div>
				  <div class="next-back-wrap">
				  	<a rel="1" class="prev-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-back.png"/></a>
						<a rel="3" class="next-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-next.png"/></a>
				  </div>
		  	</div><!-- .step3 -->
		  	
		  	<div id="step4">
			  	<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title"><?php the_field('title_step_4'); ?></h3>
						  <?php the_field('content_step_4'); ?>
				  	</div><!-- .textbox -->
			  	</div>
				  <div class="next-back-wrap">
				  	<a rel="2" class="prev-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-back.png"/></a>
						<a rel="4" class="next-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-next.png"/></a>
				  </div>
		  	</div><!-- .step4 -->
		  	
		  	<div id="step5">
			  	<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title"><?php the_field('title_step_5'); ?></h3>
						  <?php the_field('content_step_5'); ?>
				  	</div><!-- .textbox -->
			  	</div>
				  <div class="next-back-wrap">
				 		<a rel="3" class="prev-tab btn success" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-back.png"/></a>
				  </div>
		  	</div><!-- .step5 -->
		  </div><!-- .panel-container -->
		</div><!-- #ajax-tab-container -->
		
	</div><!-- .our-process -->
	
	<div id="options-only" class="big_numbers">
		<div class="box_third">
			<div class="odometer1"> +</div>
			<span id="odometer-text1">completed projects<br> in past 2 years</span>
		</div><!-- .box_third -->
		<div class="box_third">
			<div class="odometer2"> +</div>
			<span id="odometer-text2">years of building design and<br> construction experience</span>
		</div><!-- .box_third -->
		<div class="box_third">
			<div class="odometer3"></div>
			<span id="odometer-text3">founded in 1990</span>
		</div><!-- .box_third -->
	</div><!-- .big_numbers -->
	

<script>
	$(document).ready(function(){
  	$('#ajax-tab-container').easytabs();
  	$( "li.circle.active" ).prevAll().css( "background-color", "#d5982e" );

  	$("a.label").on("click", function () {
  		$( "li.circle.active" ).prevAll().css( "background-color", "#d5982e" );
  		$( "li.circle.active" ).nextAll().css( "background", "none" );
		});
		
		var $tabContainer = $('#ajax-tab-container'),
    $tabs = $tabContainer.data('easytabs').tabs,
    $tabPanels = $(".tabs")
    totalSize = $tabPanels.length;



		$(".next-tab").click(function() {
		  var i = parseInt($(this).attr("rel"));
		  var tabSelector = $tabs.children("a:eq(" + i + ")").attr("href");
		  $tabContainer.easytabs("select", tabSelector);
		  $( "li.circle.active" ).prevAll().css( "background-color", "#d5982e" );
		  return false;
		});
		
		$(".prev-tab").click(function() {
		  var i = parseInt($(this).attr("rel"));
		  var tabSelector = $tabs.children("a:eq(" + i + ")").attr("href");
		  $tabContainer.easytabs("select", tabSelector);
		  $( "li.circle.active" ).nextAll().css( "background", "none" );
		  return false;
		});
		
		//animate numbers
  	$('#options-only').waypoint(function(event, direction) {
  	  $(".odometer1").animateNumber({ number: 100 },
			  "slow",
			  function() {
			    $("#odometer-text1").css("opacity","1")
			  }).css("opacity","1");
			setTimeout(function(){
			  $(".odometer2").animateNumber({ number:  30 },
			  "slow",
			  function() {
			    $("#odometer-text2").css("opacity","1")
			  }).css("opacity","1");
			}, 1000);
			setTimeout(function(){
			  $(".odometer3").animateNumber({ number: 1990 },
			  "slow",
			  function() {
			    $("#odometer-text3").css("opacity","1")
			  }).css("opacity","1");
			}, 2000);
			
			this.destroy()
			
  	}, {offset: '90%'});// try bottom-in-view instead of 90%
  	
	});
</script>
<?php get_footer(); ?>
