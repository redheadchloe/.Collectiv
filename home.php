<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>
<h1>国内外の良い建築物</h1>
<p class="mb-2">一度は訪れてみたい！世界中の良い建築物ご紹介します！</p>

<?php get_template_part('template-parts/sidebar'); ?>
<div class="home-container my-10">
    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-item grid mb-2 py-2">
                    <?php if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } else { ?>
                        <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                    <?php } ?>
                    <div class="content">
                        <small class="m-1"><?php the_tags(); ?> | <?php the_time('Y.m.d'); ?></small>
                        <h2 class="title my-2"><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <div class="section-btn my-5"><a href="<?php the_permalink(); ?>">続きを読む</a></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </main>

</div>

<?php get_footer(); ?>