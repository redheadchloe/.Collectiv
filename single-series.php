<?php get_header(); ?>
<?php


// $the_query = new WP_Query([
//     'post_type' => 'series',
//     'posts_per_page' => 1,
// ]);

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





<?php get_footer(); ?>

<script>
    let contentIndex = 0;
    const content = document.querySelector('.top-wrapper');
    const color = content.dataset.color;
    document.documentElement.style.setProperty('--accent-1', color);
</script>