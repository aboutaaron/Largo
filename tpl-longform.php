<?php
/**
 * Template Name: Pimp My Story!
 * Single Post Template: Pimp My Story!
 * Description: Test longform template
 */
get_header( 'slim' );

while ( have_posts() ) : the_post();
?>

<div id="content" class="span12" role="main">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'hnews item' ); ?> itemscope itemtype="http://schema.org/Article">

		<header>
	 		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>
	 		<h5 class="byline"><?php largo_byline(); ?></h5>

	 		<meta itemprop="description" content="<?php echo strip_tags(largo_excerpt( $post, 5, false, '', false ) ); ?>" />
	 		<meta itemprop="datePublished" content="<?php echo get_the_date( 'c' ); ?>" />
	 		<meta itemprop="dateModified" content="<?php echo get_the_modified_date( 'c' ); ?>" />
	 		<?php
	 			if ( has_post_thumbnail( $post->ID ) ) {
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
					echo '<meta itemprop="image" content="' . $image[0] . '" />';
				}
	 		?>
		</header>

		<div class="entry-content clearfix" itemprop="articleBody">
			<?php largo_entry_content( $post ); ?>
		</div><


		<footer class="post-meta bottom-meta">
		</footer>

	</article>
</div><!--#content-->

<?php
endwhile; // end of the loop.

get_footer();
?>