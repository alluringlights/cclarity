<button class="sidebar-toggle">
</button>

<ul class="widgets">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php endif; ?>
</ul>