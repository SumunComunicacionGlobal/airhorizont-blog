<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class( 'hfeed-post airhorizont-slide' ); ?> id="post-<?php the_ID(); ?>">

	<div class="row">

		<div class="col-md-6">

			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

		</div>

		<div class="col-md-6 pt-2">

			<div class="slide-content p-md-3">

				<header class="entry-header">

					<?php understrap_entry_footer(); ?>	

					<?php
					the_title(
						sprintf( '<h2 class="h3 entry-title animated fadeInUp duration1 eds-on-scroll"><a class="stretched-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
						'</a></h2>'
					);
					?>

				</header><!-- .entry-header -->

				<div class="entry-content animated fadeInUp duration1 eds-on-scroll">

					<?php
					the_excerpt();
					understrap_link_pages();
					?>

				</div><!-- .entry-content -->

			</div>

		</div>

	</div>

</article><!-- #post-## -->
