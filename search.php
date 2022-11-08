<?php get_header(); ?>

<main class="main">
    <?php get_template_part('template-parts/breadcrumb'); ?>
    <h2 class="text-center">「<?php the_search_query(); ?>」の検索結果</h2>

    <?php get_template_part('template-parts/result'); ?>

    <?php if (function_exists('wp_pagenavi')) {
        wp_pagenavi();
    } ?>

</main>


<?php get_footer(); ?>