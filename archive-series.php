<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<h1 class="my-5 text-center">シリーズアーカイブ</h1>


<?php
$terms = get_terms(['taxonomy' => 'serie']);
if (!empty($terms)) :
?>
    <div class="archive-series-container">
        <?php foreach ($terms as $term) : ?>
            <div class="archive-series-text my-2">
                <h2><?php echo $term->name; ?></h2>
                <p class="my-2"><?php echo $term->description; ?></p>
                <div class="section-btn"><a href="<?php echo get_term_link($term); ?>">シリーズを見る</a></div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<?php get_footer(); ?>