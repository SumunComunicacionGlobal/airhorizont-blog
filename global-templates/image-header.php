<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$image_id = false;
$title = '';
$description = '';

if ( is_singular() ) {
	$image_id = get_post_thumbnail_id( get_the_ID() );
	$title = get_the_title();
} elseif ( is_archive() ) {
	$image_id = get_term_meta( get_queried_object_id(), 'thumbnail_id', true );
	$title = get_the_archive_title();
	$description = get_the_archive_description();
}
?>

<header class="wp-block-cover alignfull is-style-image-header">

	<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>

	<?php if ( $image_id ) echo wp_get_attachment_image( $image_id, 'large', false, array('class' => 'wp-block-cover__image-background') ); ?>

	<div class="wp-block-cover__inner-container">

		<header class="entry-header">

			<?php understrap_entry_footer(); ?>

			<h1 class="entry-title animated fadeInUp delay1 duration1 eds-on-scroll"><?php echo $title; ?></h1>

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta text-white animated fadeInUp delay1 duration1 eds-on-scroll">
					<?php understrap_posted_on(); ?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

			<?php if ( $description) { ?>
				
				<div class="lead"><?php echo $description; ?></div>
			
			<?php } ?>

		</header>

	</div>

</header>

<?php smn_breadcrumb(); ?>

