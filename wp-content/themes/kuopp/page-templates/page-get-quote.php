<?php
/**
 * Template Name: Get A Quote
 */

get_header(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
	
	<div class="inner-wrap">
		<h2 class="secondary-title">GET A QUOTE</h2>
		
<!--
		<div class="intro">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
		</div>
-->
		
		<h3>Our Process</h3>
		<ul class="our-process-accordion">
		  <li>
		    <input type="checkbox" >
		    <h4>Phase 1: Schematic Design</h2>
		    <p>During this phase of the architectural design process, we will take the information we’ve gathered from you and through our field surveys to create two to three design options for your consideration. We will generally present these options in the form of sketches, so you can visualize the different routes your project could take.</p>
		    <p>We will also attach a rough cost estimate to each option to aid you in selecting a design that meets both your aesthetic preferences and budget requirements. You will also have the opportunity to request any modifications you’d like us to make to your preferred design. Once you have selected a design option that best suits your needs, we will begin the process of refining the design during the Design Development phase.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 2: Design Development</h2>
		     <p>At this point, we will take the schematic design you selected, as well as any requested modifications, and revise the design as necessary. We will also update the cost estimate we provided during the Schematic Design phase to reflect any changes we’ve made to the initial design. We take our clients’ budgets very seriously and continually strive to provide accurate estimates throughout the early stages of design.</p>
<p>This phase may require additional give and take as we work with you to finalize the details of the design before moving into the next phase.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 3: Construction Documents</h2>
		    <p>By now, we will have settled on a final design and will begin preparing drawings, notes, and technical specifications necessary for bidding, construction, and permit application. This is the phase that many people think of when they picture the work of an architect – the creation of blueprints.</p>
				<p>Contractors will use these detailed drawings and specifications to prepare for the next phase in the architectural design process.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 4: Bidding</h2>
		     <p>Having an architect on your side during the bidding phase of home construction is of great advantage to you. At minimum, we can aid you in developing a list of qualified contractors for your bid list and submitting bid packages to bidders. But we can also review submitted bids, provide analysis, and help you compare the cost figures that you receive from your bidders.</p>
				<p>This phase will ensure the contractors you are considering for your construction project are reading the blueprints correctly and are providing an accurate bid for your project.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		  <li>
		    <input type="checkbox" checked>
		    <h4>Phase 5: Construction Administration</h2>
		     <p>Finally, once you have selected a contractor and construction is under way, we move into the fifth phase of the architectural design process – construction administration. During this phase, we will administer the construction process to assure conformance with design intent, visit the site during construction, and address any field conditions as they arise.</p>
				<p>This final phase, along with all the others described above, will ensure the smooth and satisfactory completion of your home construction or renovation project. Our ultimate goal as architects is to help you turn your dream of a new or renovated home into an affordable reality. Contact us and take the first step toward your new home.</p>
		    <img src="<?php bloginfo('template_url') ?>/images/portfolio-arrow.jpg" alt="portfolio-arrow" width="8" height="13" />
		  </li>
		</ul><!-- .our-process-accordion -->
		
		<div class="quote-form-wrap">
			<h3>Get a Quote</h3>
			<p>Complete the form below and we will contact you as soon as possible.</p>
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
		</div>
		
		
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
