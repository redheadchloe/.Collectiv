<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<h1 class="my-5 text-center">シリーズアーカイブ</h1>


<?php
$term = get_term_by('slug', 'color', 'serie');
$term_link = get_term_link($term);
?>
<div class="archive-series-container grid">
    <div class="archive-series-text">
        <h2 class="mb-2"><?php echo $term->name; ?></h2>
        <p><?php echo $term->description; ?></p>
        <div class="mt-5 section-btn"><a href="<?php echo $term_link; ?>">シリーズを見る</a></div>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/img/archive-color.jpeg" alt="">
</div>

<?php
$term = get_term_by('slug', 'retro', 'serie');
$term_link = get_term_link($term);
?>
<div class="archive-series-container grid">
    <div class="archive-series-text">
        <h2 class="mb-2"><?php echo $term->name; ?></h2>
        <p><?php echo $term->description; ?></p>
        <div class="mt-5 section-btn"><a href="<?php echo $term_link; ?>">シリーズを見る</a></div>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/img/archive-retro.jpeg" alt="">
</div>



<?php get_footer(); ?>