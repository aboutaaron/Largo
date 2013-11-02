<?php
/**
 * Template Name: Pimp My Story!
 * Single Post Template: Pimp My Story!
 * Description: Test longform template
 */
get_header( 'slim' );
?>

<div id="content" class="span12" role="main">
	<?php
		while ( have_posts() ) : the_post();
			if ( is_page() ) {
				get_template_part( 'content', 'page' );
			} else {
				get_template_part( 'content', 'single' );
				comments_template( '', true );
			}
		endwhile; // end of the loop.
	?>
</div><!--#content-->

<?php get_footer(); ?>