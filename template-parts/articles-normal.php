<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a href="<?php the_permalink(); ?>">

		<div class="post-header">

			<?php if ( has_post_thumbnail() ) : ?>
				<?php
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src( $image_id, true );
				?>
				<figure class="post-thumbnail" style="background-image: url('<?php echo esc_url( $image_url[0] ); ?>');">
			<?php else : ?>
				<figure class="post-thumbnail" style="background-image: url('<?php echo esc_url( get_theme_file_uri( '/img/no-image.jpg' ) ); ?>');">
			<?php endif; ?>

					<?php if ( get_the_category() ) : ?>
						<div class="post-category">
							<?php
								$cat_output = '';
							foreach ( (get_the_category()) as $cat ) {
								$cat_output .= $cat->cat_name . ',';
							}
								echo esc_html( rtrim( $cat_output, ',' ) );
							?>
						</div>
					<?php endif; ?>

					<div class="post-author">
						<span class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 16 ); ?></span>
						<span class="name"><?php the_author_meta( 'display_name' ); ?></span>
					</div>

					<figcaption>READ MORE</figcaption>

				</figure>
		</div>

		<div class="post-content">
			<time datetime="<?php the_time( 'c' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
			<h2 class="post-title"><?php the_title(); ?></h2>
		</div>

	</a>

</article>
