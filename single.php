<?php
/**
 * The template for displaying all single posts.
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>

	<!-- BLOG CONTENT
	================================================== -->
<div class="container">
		<div class="row" id="primary">
				
		<main id="content" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12" >

			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', 'single' ); ?>
	
				
	
			<?php endwhile; // end of the loop. ?>
			
				
			
<div class="mbottom40">
		<div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6 col-sm-12">
			<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
	<btn class="next-back-btn"><?php next_post_link('%link', 'Next Project'); ?></btn>
<?php endif; ?>	
		
	</div>
	<div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6 col-sm-12">
	<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
	<btn class="next-back-btn"><?php previous_post_link('%link', 'Previous Project'); ?></btn>
	<?php endif; ?></div>

	</div>
			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			
			
		</div><!-- #primary -->
	</div><!-- .container -->
<div class="mtop40">
	<?php get_footer(); ?>
</div>