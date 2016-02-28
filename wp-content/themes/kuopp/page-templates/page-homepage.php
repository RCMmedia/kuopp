<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>


	<div class="hero-banner">
		<img src="<?php the_field('homepage_main_banner'); ?>">
	</div><!-- .hero-banner -->
	<div class="get-quote">
		<img class="bg" src="<?php bloginfo('template_url') ?>/images/get-quote-bg2.png" alt="get-quote-bg" width="305" height="428" />
		<div class="get-quote-inner">
			<h2><?php the_field('homepage_intro_h2'); ?></h2>
			<?php the_field('homepage_intro_paragraph'); ?>
			<a class="portfolio-link" href="<?php bloginfo('url') ?>/projects/">View some of our projects<img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" /></a>
<!-- 			<a class="portfolio-link" href="">Commercial <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" /></a> -->
			<a class="gold-button" href="">Get a Quote</a>
			<a class="gold-button" href="">About Us</a>
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
						  <h3 class="step-title">Phase 1: Schematic Design</h3>
						  <p>During this phase of the architectural design process, we will take the information we’ve gathered from you and through our field surveys to create two to three design options for your consideration. We will generally present these options in the form of sketches, so you can visualize the different routes your project could take.</p>
						  <p>We will also attach a rough cost estimate to each option to aid you in selecting a design that meets both your aesthetic preferences and budget requirements. You will also have the opportunity to request any modifications you’d like us to make to your preferred design. Once you have selected a design option that best suits your needs, we will begin the process of refining the design during the Design Development phase.</p>
				  	</div><!-- .textbox -->
			  	</div>
				  <div class="next-back-wrap">
				  	<a rel="1" class="next-tab btn success first" href="#"><img src="<?php bloginfo('template_url') ?>/images/arrow-next.png"/></a>				  	
				  </div>
		  	</div><!-- .step1 -->
		  	
		  	<div id="step2">
			  	<div class="clearfix">
				  	<div class="textbox">
						  <h3 class="step-title">Phase 2: Design Development</h3>
						  <p>At this point, we will take the schematic design you selected, as well as any requested modifications, and revise the design as necessary. We will also update the cost estimate we provided during the Schematic Design phase to reflect any changes we’ve made to the initial design. We take our clients’ budgets very seriously and continually strive to provide accurate estimates throughout the early stages of design.
This phase may require additional give and take as we work with you to finalize the details of the design before moving into the next phase.</p>
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
						  <h3 class="step-title">Phase 3: Construction Documents</h3>
						  <p>By now, we will have settled on a final design and will begin preparing drawings, notes, and technical specifications necessary for bidding, construction, and permit application. This is the phase that many people think of when they picture the work of an architect – the creation of blueprints.</p>
							<p>Contractors will use these detailed drawings and specifications to prepare for the next phase in the architectural design process.</p>
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
						  <h3 class="step-title">Phase 4: Bidding</h3>
						  <p>Having an architect on your side during the bidding phase of home construction is of great advantage to you. At minimum, we can aid you in developing a list of qualified contractors for your bid list and submitting bid packages to bidders. But we can also review submitted bids, provide analysis, and help you compare the cost figures that you receive from your bidders.</p>
							<p>This phase will ensure the contractors you are considering for your construction project are reading the blueprints correctly and are providing an accurate bid for your project.</p>
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
						  <h3 class="step-title">Phase 5: Construction Administration</h3>
						  <p>Finally, once you have selected a contractor and construction is under way, we move into the fifth phase of the architectural design process – construction administration. During this phase, we will administer the construction process to assure conformance with design intent, visit the site during construction, and address any field conditions as they arise.</p>
							<p>This final phase, along with all the others described above, will ensure the smooth and satisfactory completion of your home construction or renovation project. Our ultimate goal as architects is to help you turn your dream of a new or renovated home into an affordable reality. Contact us and take the first step toward your new home.</p>
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
