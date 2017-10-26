<?php get_header(); ?>

<main class="page-single-main">

	<?php
	while ( have_posts() ) :
		the_post();
	?>

		<?php get_template_part( 'template-parts/single-content' ); ?>

		<?php get_template_part( 'template-parts/prev-next' ); ?>

	<?php endwhile; ?>

</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
