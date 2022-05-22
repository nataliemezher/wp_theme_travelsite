<?php get_header();

$cups_query = new WP_Query([
    'post_type' => 'travel_cup',
    'posts_per_page' => 3,
]); ?>

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
    <div class="row">
        <div class="col-sm">
            <h2>HEADING</h2>

        </div>
        <div class="col-sm">
            <img src="" alt="pic">

        </div>

    </div>

    <div id="trip-details">
        <!-- hårdkoda grejer -->

    </div>

    <div class="">
        <!-- latest update/news 3 posts row -->
    </div>
    <div>
        <?php
        get_template_part('template-parts/newsletter'); ?>
    </div>



</div>




<?php get_footer(); ?>