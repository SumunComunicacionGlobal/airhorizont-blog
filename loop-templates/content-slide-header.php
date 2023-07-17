<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class( 'hfeed-post airhorizont-slide-header' ); ?> id="post-<?php the_ID(); ?>">

	<div class="wp-block-cover">

		<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'wp-block-cover__image-background' ) ); ?>

		<span aria-hidden="true" class="wp-block-cover__background has-black-background-color has-background-dim"></span>

		<div class="wp-block-cover__inner-container text-white">

			<header class="entry-header">

				<?php understrap_entry_footer(); ?>	

				<?php
				the_title(
					sprintf( '<h2 class="entry-title animated fadeInUp delay1 duration1 eds-on-scroll"><a class="stretched-link text-secondary" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>

			</header><!-- .entry-header -->

		</div>

	</div>

</article><!-- #post-## -->
