<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
} ?>

<div class="sidebar" id="sidebar">
	<div class="sidebar-inner">
		<div class="sidebar-content">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
	</div>
</div>
