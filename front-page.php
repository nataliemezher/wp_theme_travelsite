<?php get_header(); ?>
<div class="container pt-5">
    <div>
        <?php the_content(); ?>
    </div>

    <div class="text-center row pt-5" id="smallmeny">
        <div class="col-md-4 "><a href="traningslager"> <button class="btn btn-outline-secondary">TräningsLäger</button></a> </div>
        <div class="col-md-4"><a href="travel_cups"><button class="btn btn-outline-secondary">Cuper</button></a> </div>
        <div class="col-md-4 "><a href="fotbollsresor"><button class="btn btn-outline-secondary">Fotbollsresor</button></a> </div>

    </div>

    <?php
    get_template_part('template-parts/search');
    get_template_part('template-parts/featured-travels');
    get_template_part('template-parts/featured-cups');
    get_template_part('template-parts/spotlight');
    get_template_part('template-parts/newsletter');
    ?>



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