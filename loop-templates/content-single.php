<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-content">

		<?php get_template_part( 'global-templates/image-header' ); ?>

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php airhorizont_all_entry_tags(); ?>
		
	</footer><!-- .entry-footer -->

	<?php get_template_part( 'global-templates/related-posts' ); ?>

</article><!-- #post-## -->
