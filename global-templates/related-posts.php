<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$posts_ids = false;

if ( is_singular() ) {
	$posts_ids = get_post_meta( get_the_ID(), 'related_posts', true );
} elseif( is_tax() ) {
	$posts_ids = get_term_meta( get_queried_object_id(), 'related_posts', true );
}

if ( $posts_ids ) {

	$args = array(
		'post_type'			=> 'any',
		'post__in'			=> $posts_ids,
		'orderby'			=> 'post__in',
		'order'				=> 'ASC',
	);

} else {

	global $post;

	$category_ids = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );

	$args = array(
		'posts_per_page'			=> 5,
		'orderby'					=> 'rand',
		'post__not_in'				=> array( $post->ID ),
		'tax_query' => array(
			'relation'	=> 'OR',

			array(
				'taxonomy' => 'category',
				'fields' => 'term_id',
				'terms' => $category_ids,
			)
		)
	);

	$tag_ids = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );

	if ( $tag_ids ) {

		$tags_tax_query = array(
			'taxonomy'		=> 'post_tag',
			'fields'		=> 'term_id',
			'terms'			=> $tag_ids,
		);

		$args['tax_query'][] = $tags_tax_query;
	}


}

$q = new WP_Query($args);

if ( $q->have_posts() ) { ?>

	<div class="relsted-posts-title card card-body bg-primary text-white">
		<h2 class="h4"><?php echo __( 'Artículos relacionados', 'airhorizont' ); ?></h2>
	</div>

	<div class="slick-carousel related-posts">

		<?php while ( $q->have_posts() ) { $q->the_post();

			get_template_part( 'loop-templates/content', 'carousel', array( 'number' => $q->current_post ) );

		} ?>

	</div>

<?php }

wp_reset_postdata();