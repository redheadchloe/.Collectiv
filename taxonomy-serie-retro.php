<?php get_header(); ?>

<?php
// $serie = get_terms([
//     'taxonomy' => 'serie',
// ]);

$term = get_queried_object();
?>

<?php get_template_part('template-parts/breadcrumb'); ?>


<div class="retro-container my-10 grid">
    <div class="retro-title">
        <h1 class="my-2 tax-title"><?php echo $term->name; ?></h1>

        <p class="category-description my-2"><?php echo $term->description; ?></p>
    </div>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <a href="<?php echo the_permalink(); ?>">
                <div class="retro-wrapper grid">
                    <div class="img-wrapper">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else : ?>
                            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                        <?php endif; ?>
                    </div>
                    <div class="retro-text">
                        <h2 class="mb-1"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

</div>

<?php get_footer(); ?>