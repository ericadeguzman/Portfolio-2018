<?php
/* Template Name: Full-width Template */	
	
get_header();
?>

<!-- FEATURE IMAGE
================================================== -->



<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-sm-12">
			
			<section class="main-content">
				
				<?php while ( have_posts() ) : the_post(); ?>
					
					<?php the_content(); ?>
					
				<?php endwhile; // end of the loop ?>
				
			</section><!-- main-content -->
			
		</div><!-- content -->
	</div><!-- row -->
</div><!-- container -->
</section>
 <section id="resume-download">
<div class="container">
<div class="row">
<div class="col-lg-12">
<a target="_blank" href="http://ericadeguzman.com/assets/resume.pdf">
Download Resume <i class="fa fa-download"><!-- --></i>
</a>
</div>
</div>
</div>
</section> 
<?php get_footer(); ?>