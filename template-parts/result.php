<?php if (have_posts()) : ?>
    <div class="result-container grid-4 my-10">
        <?php while (have_posts()) : the_post(); ?>
            <div class="result-wrapper">
                <?php if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail('meidum'); ?>
                <?php } else { ?>
                    <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
                <?php } ?>
                <small><time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
                <h3 class="news_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><a href="<?php the_permalink(); ?>">[続きを読む]</a></small>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center my-2">検索結果はありませんでした。</p>
    <?php endif; ?>
    </div>