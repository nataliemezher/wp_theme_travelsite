<?php $travels_query = new WP_Query([
  'post_type' => 'wcm_travel',
  'posts_per_page' => 3,
  'orderby' => 'rand',
]) ?>


<div class=" row pt-5 ">
  <h2>Featured Travels</h2>
  <?php
  if ($travels_query->have_posts()) :
    while ($travels_query->have_posts()) : $travels_query->the_post(); ?>
      <div class="pt-2 text-center col-sm  ">

        <a href="<?php
                  the_permalink(); ?>">
          <p><?php
              the_title(); ?></p>

        </a>

        <div id="our-post-thumbnail">
          <?php
          the_post_thumbnail('featured_gallery'); ?>
        </div>
        <div>
          <p>
            <?php the_excerpt(); ?>
          </p>
          <a href="<?php
                    the_permalink(); ?>"><button type="button" class="btn btn-secondary">Read More</button></a>
        </div>
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