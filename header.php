<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light  d-flex justify-content-center">
        <div class="container-fluid">

            <?php if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            } ?>

            <a href="#"><img class="mb-3 mx-auto logo" width="60" height="40" src="<?php echo $logo[0] ?>" alt="Sitelogo"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => '',
                    'items_wrap' => '<ul class="navbar-nav mr-auto "> %3$s </ul>'

                ]);

                ?>
            </div>
        </div>


        </div>
    </nav>