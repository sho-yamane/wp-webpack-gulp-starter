<?php
if ( ! is_404() ) {
	if ( is_front_page() || is_home() ) {
		echo '<meta property="og:type" content="website">';
	} else {
		echo '<meta property="og:type" content="article">';
	}
	if ( is_single() || is_page() ) {
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				if ( get_the_excerpt() === '' ) {
					echo '<meta property="og:description" content="';
					bloginfo( 'description' );
					echo '">';
					echo "\n";
				} else {
					echo '<meta property="og:description" content="' . esc_attr( wp_strip_all_tags( mb_substr( get_the_excerpt(), 0, 100 ) ) ) . '">';
					echo "\n";
				}
			endwhile;
		endif;
		echo '<meta property="og:title" content="';
		the_title();
		echo '">';
		echo "\n";
		echo '<meta property="og:url" content="';
		the_permalink();
		echo '">';
		echo "\n";
	} else {
		echo '<meta property="og:description" content="';
		bloginfo( 'description' );
		echo '">';
		echo "\n";
		echo '<meta property="og:title" content="';
		bloginfo( 'name' );
		echo '">';
		echo "\n";
		echo '<meta property="og:url" content="';
		bloginfo( 'url' );
		echo '">';
		echo "\n";
	}
	$str = $post->post_content;
	$search_pattern = '/<img.*?src=(["\'])(.+?)\1.*?>/i';
	if ( is_single() || is_page() ) {
		if ( has_post_thumbnail() ) {
			$image_id = get_post_thumbnail_id();
			$image = wp_get_attachment_image_src( $image_id, 'full' );
			echo '<meta property="og:image" content="' . esc_url( $image[0] ) . '">';
			echo "\n";
		} elseif ( preg_match( $search_pattern, $str, $imgurl ) && ! is_archive() ) {
			echo '<meta property="og:image" content="' . esc_url( $imgurl[2] ) . '">';
			echo "\n";
		} else {
			$ogp_image = get_template_directory_uri() . '/img/ogp.png';
			echo '<meta property="og:image" content="' . esc_url( $ogp_image ) . '">';
			echo "\n";
		}
	} else {
		if ( get_header_image() ) {
			echo '<meta property="og:image" content="' . esc_url( get_theme_file_uri( '/images/ogp.png' ) ) . '">';
			echo "\n";
			echo '<meta property="twitter:image" content="' . esc_url( get_theme_file_uri( '/images/ogp.png' ) ) . '">';
			echo "\n";
		} else {
			echo '<meta property="og:image" content="' . esc_url( get_theme_file_uri( '/images/ogp.png' ) ) . '">';
			echo "\n";
			echo '<meta property="twitter:image" content="' . esc_url( get_theme_file_uri( '/images/ogp.png' ) ) . '">';
			echo "\n";
		}
	}
}
?>
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP" />
<meta property="fb:app_id" content="XXXXXXXXXXXXXXXX">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@xxxxx">
<meta name="twitter:creator" content="@xxxxx">
