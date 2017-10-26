<?php get_header(); ?>

<main class="main main-archive">
	<section class="section">
		<div class="section-inner">
			<div class="section-archives-title">
				<?php get_template_part( 'template-parts/archive-title' ); ?>
			</div>
			<div class="section-content">
				<?php if ( have_posts() ) : ?>
					<div class="articles">
						<?php
						while ( have_posts() ) :
							the_post();
						?>
							<?php get_template_part( 'template-parts/articles-normal' ); ?>
						<?php endwhile; ?>
					</div>
					<?php
					the_posts_pagination(
						array(
							'format' => '/page/%#%',
							'prev_text' => '<',
							'next_text' => '>',
						)
					);
					?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/articles-none' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
