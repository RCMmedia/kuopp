<?php
/*
AJAX Results Template Example

This is an example of a template part which can be used to customize how search
results appear when using AJAX.
*/
?>

<?php if ( have_posts() ): ?>
<h3>Search Results</h3>
   <?php while ( have_posts() ): the_post(); ?>

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
  					
  		</div><!-- .project-box -->

    <?php endwhile; ?>

<?php else : ?>

    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php wp_reset_query(); ?>

