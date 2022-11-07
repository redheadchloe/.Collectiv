<?php get_header(); ?>

<?php
$serie = get_terms(['taxonomy' => 'serie']);
?>

<?php get_template_part('template-parts/breadcrumb'); ?>

<div class="tax-top">
    <h1 class="my-2 tax-title"><?php the_taxonomies($args = [
                                    'template' => '%s: %l',
                                ]); ?></h1>
    <?php echo term_description(); ?>
</div>
<div class="tax-container grid-4">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="top-wrapper">
                <a href="<?php echo the_permalink(); ?>">
                    <div class="img-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                        <?php endif; ?>
                    </div>
                    <div class="text-wrapper">
                        <span><?php the_field('city'); ?></span>
                        <h3 class="mb-2"><?php the_title(); ?></h3>
                        <span class="flex">詳細を見る<i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
            </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</div>






<?php get_footer(); ?>