<?php
/**
 * The template for displaying search forms
 */
?>
	<form class="form-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
			<input type="text" placeholder="<?php _e('Search', 'largo'); ?>" class="searchbox search-query" value="" name="s" />
			<input type="submit" value="<?php _e('GO', 'largo'); ?>" name="search submit" class="search-submit btn">
		</div>
	</form>