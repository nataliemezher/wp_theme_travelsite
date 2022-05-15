<?php $cups_query = new WP_Query([
    'post_type' => 'travel_cup',
    'posts_per_page' => 3,
    'orderby' => 'rand',
]) ?>

<div class="row pt-5">
    <h2>Featured Cups</h2>
    <?php
    if ($cups_query->have_posts()) :
        while ($cups_query->have_posts()) : $cups_query->the_post(); ?>
            <div class="pt-2 text-center col-sm">

                <a href="<?php
                            the_permalink(); ?>">
                    <p><?php
                        the_title(); ?></p>
                </a>

                <div id="our-post-thumbnail">
                    <?php if (!empty(get_the_post_thumbnail())) { ?>
                        <?php the_post_thumbnail('featured_gallery'); ?>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.jpg" width="200px" height="150" alt="" />
                    <?php } ?>


                </div>
                <p>
                    <?php the_excerpt(); ?>
                </p>
                <a href="<?php
                            the_permalink(); ?>"><button type="button" class="btn btn-secondary">Läs mer</button></a>

            </div>

    <?php
        endwhile;

        if (is_single()) :
            previous_post_link();
            next_post_link();
        endif;
    else :
        _e('Sorry, no posts matched your criteria.', 'textdomain');
    endif;
    ?>

    <?php ?>
</div>