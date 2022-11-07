<?php get_header(); ?>
<?php
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$pagenum_link = html_entity_decode(get_pagenum_link());
$url_parts    = explode('?', $pagenum_link);
$pagenum_link = trailingslashit($url_parts[0]) . '%_%';

$the_query = new WP_Query([
    'post_type' => 'series',
    'posts_per_page' => 1,
    'paged' => $paged,
]);

?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="top-container my-10">

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="top-wrapper grid" data-color="<?php the_field('color'); ?>">
                <div class="img-wrapper">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php else : ?>
                        <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                    <?php endif; ?>
                </div>
                <div class="text-wrapper">
                    <span><?php the_field('city'); ?></span>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>



<?php echo paginate_links([
    'base' => $pagenum_link,
    'current' => max(1, get_query_var('paged')),
    'format' => '?page=%#%',
    'type' => 'list',
    'total' => $the_query->max_num_pages,
    'prev_text' => '前のシリーズ',
    'next_text' => '次のシリーズ',
    'show_all' => true,
]); ?>

<?php get_footer(); ?>