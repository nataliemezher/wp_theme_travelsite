<?php get_header(); ?>

<div class="container pt-2">
    <div class="py-lg-18 py-10 bg-auto pb-5" style="background: url(https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img/https://www.collegescholarshipsusa.com/wp-content/uploads/2021/06/traveling.png)no-repeat , linear-gradient(180deg, rgba(0, 0, 0, 0) 100%, #000000 100%), rgba(0, 0, 0, 0.5) ; background-size: cover; background-position: top center">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h1 class="display-2 pt-5 mb-3 text-primary"><span class="text-light px-3 px-md-0">Träningsläger</span></h1>
                        <a href="#" class="btn btn-primary">CTA</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="column d-flex justify-content-center  text-center  p-5   flex-wrap text-wrap " id="content-display">
        <?php the_content(); ?>
    </div>


    <div class="row pt-5">
        <div class="d-flex justify-content-center col-sm">
            <div>
                <h2>Träningsläger</h2>
                <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque maiores sequi. Lorem ipsum dolor, similique asperiores nisi beatae dolor cupiditate quisquam, totam fuga nihil pariatur. Aliquid obcaecati ab reiciendis quia numquam, ea rerum minima culpa cumque, illo dignissimos. Expedita ullam soluta ipsa.</span>
            </div>
        </div>
        <div class="d-flex justify-content-center col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" width="400px" height="200" alt="Coming Soon" />

        </div>

    </div>

    <?php
    get_template_part('template-parts/featured-travels');
    get_template_part('template-parts/tripdetails');
    ?>
    <?php
    get_template_part('template-parts/reviews');
    ?>

    <div id="latest-updates">
        <!-- latest update/news 3 posts row -->
        <?php
        get_template_part('template-parts/latestupdates');
        ?>
    </div>
    <div id="newsletter">
        <?php
        get_template_part('template-parts/newsletter'); ?>
    </div>



</div>




<?php get_footer(); ?>