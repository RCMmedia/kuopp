<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	<h1 class="page-title"><?php the_title(); ?></h1>
	<?php if(get_field('featured_at_top') == 'yes') : ?>
		<!–Output if toggled ‘yes’–>
			<div class="featured slider cycle-slideshow" data-cycle-slides=".featured-slideshow-image">
				<?php if(get_field('featured_slideshow')): ?>
					<?php while(the_repeater_field('featured_slideshow')): ?>
					<?php $image_main_slider = wp_get_attachment_image_src(get_sub_field('featured_slideshow_image'),'full');?>
					<div class="featured-slideshow-image" style="display: none;">
						<img src="<?php echo $image_main_slider[0]; ?>" />
					</div>
					<?php endwhile; ?>
					 <div class="cycle-pager"></div>
				<?php endif; ?>
			</div>
		<?php endif; //end acf conditional featured_at_top ?> 
		
		<div class="inner-wrap clearfix">

			<h2 class="secondary-title">MEET KUOPPAMAKI DESIGNS</h2>
		
			<?php if(get_field('featured_at_top') == 'yes') : ?>
				
				<?php if (have_posts()) :  while (have_posts()) :  the_post(); ?>
					
					<div class="featured-right">
						<div class="video">
							<?php the_field('featured_video'); ?>
						</div>
						<div class="project-statistics">
							<?php the_field('project_statistics'); ?>
						</div>
						<div class="links-wrap">
							<div class="addthis_sharing_toolbox"></div>
							<!-- <a class="gold-button" href="">Share This Project</a> -->
						  <a class="gold-button" href="">Get a Quote</a>
						  <a class="gold-button" href="">Leave a Review</a>
						</div><!-- .links-wrap -->
					</div><!-- .featured-right -->
					        
					<div class="featured-left">
					<?php the_content(); ?>
					</div><!-- .featured-left -->
					
					
					       
				<?php endwhile;?>
				<?php endif; //end regular loop ?>
			
			<?php else : ?>
			<!–Output if toggled ‘no’–>
			<?php if (have_posts()) :  while (have_posts()) :  the_post(); ?>
				<div class="project-image">
				<?php 
					$image = get_field('featured_image');
					$size = 'large'; // (thumbnail, medium, large, full or custom size)
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
				?>
				</div>
				<?php the_content(); ?>
				<div class="links-wrap">
					<div class="addthis_sharing_toolbox"></div>
					<!-- <a class="gold-button" href="">Share This Project</a> -->
				  <a class="gold-button" href="">Get a Quote</a>
				  <a class="gold-button" href="">Leave a Review</a>
				</div>
			<?php endwhile;?>
			<?php endif; //end regular loop ?>
		
		<?php endif; //end acf conditional featured_at_top ?> 
			
	</div><!-- .inner-wrap -->
<?php get_footer(); ?>
