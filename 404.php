<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Bootstrap to WordPress
 */

get_header(); ?>

	

	<div class="container">
		
		<div id="primary" class="row">
				
			<main id="content" class="col-sm-8">
			
				<div class="error-404 not-found">
					
					<div class="page-content">
						
						<h2>404: You've stumbled into the Twilight Zone</h2>
						<p>Not sure where you're headed? Well how about looking at some cool <a href="/">projects I made</a>.</p>
						
						
					</div><!-- .page-content -->
					
				</div><!-- .error-404 -->
			
			</main><!-- #content -->
			
			<!-- SIDEBAR
			================================================== -->
			<aside class="col-sm-4">
				<?php get_sidebar(); ?>
			</aside>
				
		</div><!-- #primary -->
		
	</div><!-- .container -->

<?php get_footer(); ?>
