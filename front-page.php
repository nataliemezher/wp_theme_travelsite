<?php get_header(); ?>
<div class="container pt-5">
    <div class="py-lg-18 py-10 bg-auto pb-5" style="background: url(https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img/https://www.collegescholarshipsusa.com/wp-content/uploads/2021/06/traveling.png)no-repeat , linear-gradient(180deg, rgba(0, 0, 0, 0) 100%, #000000 100%), rgba(0, 0, 0, 0.5) ; background-size: cover; background-position: top center">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h1 class="display-2  mb-3 text-primary"><span class="text-light px-3 px-md-0">Travel Site</span>
                        </h1>
                        <div class=" mb-2 text-light bg-secondary">
                            <?php the_content(); ?>
                        </div>

                        <a href="#" class="btn btn-secondary">CTA</a>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="text-center row pt-5" id="smallmeny">
        <div class="col-md-4 "><a href="traningslager"> <button class="btn btn-outline-secondary">Träningsläger</button></a> </div>
        <div class="col-md-4"><a href="cups"><button class="btn btn-outline-secondary">Cuper</button></a> </div>
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