<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$post_count = '';
if ( isset( $args['number']) ) {
	$number = str_pad( $args['number'] + 1, 2, '0', STR_PAD_LEFT );
	$post_count = '<p class="post-count">'. $number .'</p>';
}
?>

<article <?php post_class( 'carousel-post' ); ?> id="post-<?php the_ID(); ?>">

	<div class="card">

		<div class="card-body">

			<header class="entry-header">

				<?php echo $post_count; ?>

				<?php
				the_title(
					sprintf( '<h2 class="h5 entry-title"><a class="stretched-link" href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
					'</a></h2>'
				);
				?>

				<?php understrap_entry_footer(); ?>
			
			</header><!-- .entry-header -->

		</div>

		<?php echo get_the_post_thumbnail( $post->ID, 'large', array( 'class' => 'card-img-top' ) ); ?>

	</div>

</article><!-- #post-## -->
