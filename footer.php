<footer class="bg-light text-center text-lg-start">
	<!-- Copyright -->
	<div class="container-fluid text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		<?php wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu' => 'footer',
				'container' => '',
				'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
			)
		); ?>

	</div>
	<!-- Copyright -->
</footer>
<?php wp_footer(); ?>
</body>

</html>