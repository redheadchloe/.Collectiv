<?php get_header(); ?>





<section class="trending-container section">
    <h2 class="mb-5">今注目されている建物</h2>
    <div class="trending-wrapper grid">
        <div class="trending-left">
            <h4 class="mb-2">透明度の高いベーカリーショップ</h4>
            <p class="mb-5">広島県呉市の呉駅前にオープンしたベーカリーショップ。
                オーナーからの最初の要望は透明度の高い空間づくり。
                厨房と売り場の境界をスチールとガラスで組み、フルオープンにできるように仕切ることで、厨房は売り場に開かれライブ感のある演出が可能となった。

                <a href="#1">続きを読む</a>
            </p>

            <div class="sub flex">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arch/trending-sub.jpeg" class="mr-05" alt="building">
                <small>
                    所在地：広島県呉市中央1-6-3メゾンフェニックス1階<br>
                    設計：FATHOM<br>
                    担当：中本尋之<br>
                    施工：松原ハウジング</small>
            </div>
        </div>
        <div class="trending-right">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/img/arch/trending.jpeg" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/img/arch/trending.jpeg" alt="building">
            </picture>
        </div>
    </div>
</section>

<section class="popular-container section">
    <h2>今週の話題記事</h2>
    <p class="mb-5">こちらの記事を読まれています。</p>
    <div class="popular-wrapper flex">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <a href="<?php echo the_permalink(); ?>">
                    <div class="popular-article flex">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
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

<section class="archive-container section">
    <h2>国内外の良い建物シリーズ</h2>
    <p class="mb-5">一度は訪れてみたい！世界中の良い建築物ご紹介します！</p>
    <div class="archive-wrapper grid">
        <div class="archive-left">
            <div class="archive-item">
                <img src="<?php echo get_template_directory_uri(); ?>/img/series/1.jpeg" alt="">
                <small>2022.08.15</small>
                <h4 class="m-1">タイトルがここに入ります。タイトルがここに入ります。</h4>
            </div>
        </div>
        <div class="archive-right">

        </div>
    </div>
    <div class="section-btn"><a href="#1">過去のシリーズを見る<span class="material-symbols-outlined">
                trending_flat
            </span></a></div>
</section>




<?php get_footer(); ?>