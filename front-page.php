<?php get_header(); ?>

<section class="my-10 series-container">
    <?php
    $series_query = new WP_Query([
        'post_type' => 'series',
        'posts_per_page' => 3,
    ]); ?>
    <?php if ($series_query->have_posts()) :
        while ($series_query->have_posts()) :
            $series_query->the_post(); ?>
            <a href="<?php echo get_permalink(); ?>">
                <div class="series-slide">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(
                            'post-thumbnail',
                            ['size' => '(max-width:400px) 350px,
                                (max-width:800px) 500px,
                                60vw, ']
                        ); ?>
                        <h1><?php the_title(); ?></h1>
                </div>
            <?php else : ?>
                <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
            <?php endif; ?>
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</section>


<section class="popular-container section">
    <h1>今週の話題記事</h1>
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
                            <?php the_post_thumbnail(); ?>
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
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="section-btn"><a href="<?php echo home_url('/blog/'); ?>">すべての記事を見る</a></div>
</section>
<script>
    // img slider
    var i = 0;
    const imgs = document.querySelectorAll('.series-slide');
    console.log(imgs.length);
    var time = 3000;


    // imgs[i].style.display = 'flex';

    slide = () => {

        imgs.forEach(img => {
            img.style.display = 'none';
        })
        if (i < imgs.length - 1) {
            i++;
        } else {
            i = 0;
        }
        // console.log(i);
        imgs[i].style.display = 'block';
        imgs[i].classList.add('slide');

    }

    setInterval(slide, 3000)

    window.addEventListener('DOMContentLoaded', slide);
</script>
<?php get_footer(); ?>