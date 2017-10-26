<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php if ( has_post_thumbnail() ) : ?>
		<header class="post-header has-thumbnail">
			<div class="post-thumbnail">
				<?php the_post_thumbnail( $post->ID, 'large' ); ?>
			</div>
	<?php else : ?>
		<header class="post-header">
	<?php endif; ?>
			<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
		</header>

	<div class="post-content">

		<?php the_content(); ?>

	</div>

</article>
