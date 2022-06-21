<?php get_header();

$cups_query = new WP_Query([
    'post_type' => 'travel_cup',
    'posts_per_page' => 3,
]); ?>

<div class="container pt-2">
    <div class="py-lg-18 py-10 bg-auto pb-5" style="background: url(https://sp-ao.shortpixel.ai/client/to_auto,q_glossy,ret_img/https://www.collegescholarshipsusa.com/wp-content/uploads/2021/06/traveling.png)no-repeat , linear-gradient(180deg, rgba(0, 0, 0, 0) 100%, #000000 100%), rgba(0, 0, 0, 0.5) ; background-size: cover; background-position: top center">
        <div class="container">
            <!-- Hero Section -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="py-8 py-lg-0 text-center">
                        <h2 id="article-title" class="display-2 pt-5  mb-3 text-primary">
                            <p class="text-light px-3 px-md-0"> <?php the_title(); ?></p>
                            SINGLE.PHP
                        </h2>



                        <a href="#" class="btn btn-primary">CTA</a>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="content-display" class="pt-5 mb-2">
        <?php the_content(); ?>
    </div>

    <div class="row pt-5">
        <div class="col-sm">
            <h2>HEADING</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque maiores beatae architecto ratione accusamus? Magnam adipisci similique alias modi sequi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit esse placeat eligendi porro maxime sed quaerat unde facilis quasi quas excepturi eum, similique asperiores nisi beatae dolor cupiditate quisquam, totam fuga nihil pariatur. Aliquid obcaecati ab reiciendis quia numquam, ea rerum minima culpa cumque, illo dignissimos. Expedita ullam soluta ipsa.</p>

        </div>
        <div class="col-sm">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" width="300px" height="200" alt="Coming Soon" />

        </div>

    </div>

    <div id="trip-details">
        <!-- hårdkoda grejer -->
        <div class="row">
            <!-- två bilder/text per row -->
            <div class="col-sm"></div>
            <div class="col-sm"></div>

        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm"></div>

        </div>
        <div class="row">
            <div class="col-sm"></div>
            <div class="col-sm"></div>

        </div>
        <!-- REVIEWS -->
        <div class="row" id="reviews">
            <div class="col-sm"></div>
            <div class="col-sm"></div>
            <div class="col-sm"></div>

        </div>


    </div>

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