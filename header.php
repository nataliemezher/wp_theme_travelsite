<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-end">
        <div class="container-fluid">
            <?php if (function_exists('the_custom_logo')) {
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
            } ?>
            <a class="navbar-brand ms-4" href="/index.php">
                <img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" width="60" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu' => 'primary',
                        'container' => '',
                        'items_wrap' => '<ul class="navbar-nav">%3$s</ul>'
                    )
                ); ?>
            </div>
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <li class="nav-item"><button type="button" class="btn btn-secondary">BOKA NU</button></li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>