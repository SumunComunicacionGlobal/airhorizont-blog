<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class( 'hfeed-post mb-2' ); ?> id="post-<?php the_ID(); ?>">

	<div class="card">

		<div class="card-img-top">

			<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => '' ) ); ?>

		</div>

		<div class="card-body">

			<header class="entry-header animated fadeInUp duration1 eds-on-scroll">

				<?php
				the_title(
					sprintf( '<h2 class="h3 entry-title"><a class="stretched-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
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

			<?php understrap_entry_footer(); ?>

			<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

			<?php endif; ?>

		</div>

	</div>

</article><!-- #post-## -->
