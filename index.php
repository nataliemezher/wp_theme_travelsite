<?php get_header(); ?>
<div class="container">
	<div>
		<?php the_content(); ?>
	</div>
	<h2>INDEX.PHP</h2>




	<!--<div>
		<form class="form-inline active-pink-3 active-pink-4">
			<i class="fas fa-search" aria-hidden="true"></i>
			<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
		</form>
	</div>
-->
	<div>
		<article class="content px-3 py-5 p-md-5">
			<?php if (have_posts()) {
				while (have_posts()) {
					the_post();
				}
			} ?>

		</article>
	</div>







</div>
<?php
get_footer(); ?>