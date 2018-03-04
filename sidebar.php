<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Bootstrap to WordPress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
<!-- <?php dynamic_sidebar( 'sidebar-1' ); ?> -->
<div class="mbottom40">
	<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
	<btn class="next-back-btn"><?php next_post_link('%link', 'Next Project'); ?></btn>
<?php endif; ?>	
		<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
	<btn class="next-back-btn"><?php previous_post_link('%link', 'Previous Project'); ?></btn>
	<?php endif; ?>
	</div>


</div><!-- #secondary -->
