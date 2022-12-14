<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>
    <div class="preloader">
        <div class="progress-bar">
            <h1 class="text-center percent"></h1>
            <div class="progress"></div>
        </div>
    </div>
    <div class="scroll-indicator">

    </div>

    <header>
        <?php get_template_part('template-parts/nav'); ?>
    </header>