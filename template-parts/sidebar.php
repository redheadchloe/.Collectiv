<aside>
    <h3 class="category-title">カテゴリー</h3>
    <ul class="category-list mb-2">
        <?php
        $args = [
            'title_li' => '', // to remove the name
            'show_count' => 'true',
        ];
        wp_list_categories($args);
        ?>
    </ul>

    <h3 class="tag-title">タグ一覧</h3>
    <ul class="tag-list mb-2">
        <?php

        $tags = get_tags();
        foreach ($tags as $tag) :
            $tag_link = get_tag_link($tag->term_id);
        ?>
            <li>
                <a href="<?php echo $tag_link ?>" title="<?php echo $tag->name; ?>"><?php echo $tag->name; ?> (<?php echo $tag->count; ?>)</a>
            </li>
        <?php endforeach; ?>
    </ul>


    <h3 class="archive_title">月別記事</h3>
    <ul class="archive_list mb-2">
        <?php
        $args = [
            'type' => 'monthly',
            'show_post_count' => 'true',
        ];
        wp_get_archives($args);
        ?>
    </ul>
    <?php
    $args = [
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post__not_in' => [$post->ID],
    ];
    $the_query = new WP_query($args);
    if ($the_query->have_posts()) : ?>
        <h3 class="archive_title">人気記事</h3>
        <ul class="archive_list mb-2">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    <?php endif; ?>
</aside>