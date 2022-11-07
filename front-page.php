<?php get_header(); ?>

<section class="popular-container section">
    <h2>今週の話題記事</h2>
    <p class="mb-5">こちらの記事を読まれています。</p>
    <div class="popular-wrapper flex">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php echo the_permalink(); ?>">
                    <div class="popular-article flex">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                        <?php endif; ?>
                        <small class="m-1"><?php the_tags(); ?> | <?php the_time('Y.m.d'); ?></small>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
    </div>
<?php endwhile; ?>
<?php endif; ?>
<div class="section-btn"><a href="<?php echo home_url('/blog/'); ?>">すべての記事を見る</a></div>
</section>

<?php get_footer(); ?>