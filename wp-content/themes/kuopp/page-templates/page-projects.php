<?php
/**
 * Template Name: Projects
 */

get_header(); ?>

	<div id="wpas-results" class="clearfix">
		
		
	</div>

	<h1 class="page-title"><?php the_title(); ?></h1>
	
		
		<div class="featured-project-wrap" style="display: none;">
			



					<?php $featured_projects_query = new WP_Query( array( 'post_type' => 'project', 'order' => 'DSC','posts_per_page' => 2  ) ); while($featured_projects_query->have_posts()) : $featured_projects_query->the_post(); ?>

					<div class="project-box">
				<div class="featured-image">
					<?php 
						$image = get_field('featured_image');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					<div class="project-title">
						<div><img src="<?php bloginfo('template_url') ?>/images/featured-icon.png" alt="featured-icon" width="27" height="27" /></div>
						<h4><?php the_title(''); ?></h4>
						<div class="read-more">
							<a class="" href="<?php the_permalink() ?>">read more <img src="<?php bloginfo('template_url') ?>/images/blue-arrow.png" alt="blue-arrow" width="5" height="9" /></a>
						</div>
					</div><!-- .project-title -->
				</div><!-- .featured-image -->
  		</div><!-- .project-box -->
					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>



		</div><!-- .featured-project-wrap -->
		
		<div class="reg-projects-wrap clearfix">
		<?php
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$temp = $wp_query;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query -> query('post_type=project&showposts=6'.'&paged='.$paged);
			
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			
			<div class="project-box">
				<div class="featured-image">
					<?php 
						$image = get_field('featured_image');
						$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
						if( $image ) {
							echo wp_get_attachment_image( $image, $size );
						}
					?>
					<div class="project-title">
						<h4><?php the_title(''); ?></h4>
						<div class="read-more">
							<a class="" href="<?php the_permalink() ?>">read more <img src="<?php bloginfo('template_url') ?>/images/blue-arrow.png" alt="blue-arrow" width="5" height="9" /></a>
						</div>
					</div><!-- .project-title -->
					
				</div>
  			
  			<?php the_excerpt(''); ?>
		
  		</div><!-- .project-box -->
			<?php endwhile; // end of the loop. ?>

			<div class="pagenav">
				<div class="alignleft"><?php previous_posts_link('Previous') ?></div>
				<div class="alignright"><?php next_posts_link('Next') ?></div>
			</div>
			
			<?php $wp_query = null; $wp_query = $temp; ?>
		</div><!-- .reg-projects-wrap -->
		
	
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

  
<?php if(basename($_SERVER['REQUEST_URI']) == 'projects'){  ?>
	<script>
		jQuery('.featured-project-wrap').show();
	</script>
<?php } ?>



<?php get_footer(); ?>
