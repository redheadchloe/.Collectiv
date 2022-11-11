<?php get_header(); ?>



<section class="popular-container section">
    <h2 class="mt-10">今週の話題記事</h2>
    <p>こちらの記事を読まれています。</p>
    <div class="popular-wrapper grid-4 my-10">
        <?php
        $blog_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 5,
        ]);
        ?>
        <?php if ($blog_query->have_posts()) : ?>
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <a href="<?php echo the_permalink(); ?>">
                    <div class="popular-article">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else : ?>
                            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                        <?php endif; ?>
                        <?php
                        $post_tags = get_the_tags();
                        if ($post_tags) {
                            foreach ($post_tags as $tag) {
                            }
                        } ?>
                        <small class="m-1"><?php echo $tag->name; ?> | <?php the_time('Y.m.d'); ?></small>
                        <h5><?php the_title(); ?></h5>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="section-btn"><a href="<?php echo home_url('/blog/'); ?>">すべての記事を見る</a></div>
</section>

<?php get_footer(); ?>