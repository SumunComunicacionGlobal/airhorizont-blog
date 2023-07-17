<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<header class="term-header mb-3">

	<div class="term-header-name d-none d-lg-flex">

		<span class="h2"><?php echo __( 'Sección', 'airhorizont' ); ?></h2>

	</div>

	<div class="term-header-title">

		<h1 class="entry-title"><?php echo get_the_archive_title(); ?></h1>

	</div>

	<div class="term-header-search d-none d-md-flex">

		<?php get_search_form(); ?>

	</div>

</header>

<?php smn_breadcrumb(); ?>

