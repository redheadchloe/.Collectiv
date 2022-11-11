<div class="social-wrapper">
    <a><i class="fa-brands fa-square-facebook"></i></a>
    <a><i class="fa-brands fa-square-instagram"></i></a>
    <a><i class="fa-brands fa-square-twitter"></i></a>
    <a><i class="fa-brands fa-line"></i></a>
</div>

<footer class="mt-10">
    <div class="grid-3 mt-5">
        <div>
            <a href="<?php echo home_url(''); ?>" class="logo"><?php bloginfo('name'); ?></a>
            <p class="my-2"><?php bloginfo('description'); ?></a></p>
            <div>
                <a><i class="fa-brands fa-square-facebook"></i></a>
                <a><i class="fa-brands fa-square-instagram"></i></a>
                <a><i class="fa-brands fa-square-twitter"></i></a>
                <a><i class="fa-brands fa-line"></i></a>
            </div>
        </div>
        <div>
            <h3 class="mb-1">カテゴリーで探す：</h3>
            <ul class="category-list my-1 flex">
                <?php
                $args = [
                    'title_li' => '', // to remove the name
                    'show_count' => 'true',
                ];
                wp_list_categories($args);
                ?>
            </ul>

            <h3 class="m-1">シリーズで探す：</h3>
            <ul class="series-list my-1">
                <?php
                $taxes = get_terms(['taxonomy' => 'serie']);
                if (!empty($taxes)) :
                ?>
                    <?php foreach ($taxes as $tax) :
                        $tax_link = get_term_link($tax, 'serie'); ?>
                        <li>
                            <a href="<?php echo $tax_link; ?>"><?php echo $tax->name; ?> (<?php echo $tax->count; ?>)</a>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

        <div>
            <h3 class="tag-title mb-1">タグで探す：</h3>
            <ul class="tag-list">
                <?php

                $tags = get_tags();
                foreach ($tags as $tag) :
                    $tag_link = get_tag_link($tag->term_id);
                ?>
                    <li class="mb-1">
                        <a href="<?php echo $tag_link ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name; ?> (<?php echo $tag->count; ?>)</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <small class="text-center mt-5">.Collectiv &copy; Copyright <span class="time"></span>. All rights reserved.</small>
</footer>

<button id="top"><i class="fa-regular fa-circle-up"></i></button>

<?php wp_footer(); ?>
</body>

</html>