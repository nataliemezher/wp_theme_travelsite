<?php get_header();

$cups_query = new WP_Query([
    'post_type' => 'travel_cup',
    'posts_per_page' => 3,
    'orderby' => 'rand'
]); ?>

<div class="container pt-2">
    <div class="py-lg-18 py-10 bg-auto pb-5" style="background: url(https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img/https://www.collegescholarshipsusa.com/wp-content/uploads/2021/06/traveling.png)no-repeat , linear-gradient(180deg, rgba(0, 0, 0, 0) 100%, #000000 100%), rgba(0, 0, 0, 0.5) ; background-size: cover; background-position: top center">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h1 class="display-2 pt-5 mb-3 text-primary"><span class="text-light px-3 px-md-0">Cupresor</span></h1>
                        <div class=" mb-2 text-light bg-secondary">

                        </div>

                        <a href="#" class="btn btn-secondary">CTA</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">

        <!-- HEADING w pic  -->
        <div class="col-sm pt-5">
            <h2>Cuper</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatibus similique maxime repellat nostrum commodi nobis ipsum nesciunt dolor. Laborum doloremque cum at numquam rerum quis tempore eveniet expedita repellat?</p>

        </div>
        <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" width="300px" height="200" alt="Coming Soon" />

        </div>

    </div>



    <?php
    get_template_part('template-parts/featured-cups');
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