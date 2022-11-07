<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>
<article class="my-10">
    <div class="grid">
        <main <?php post_class('texe-center'); ?>>
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
            <?php else : ?>
                <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
            <?php endif; ?>
            <small><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
            <h3 class="mb-2"><?php the_title(); ?></h3>
            <div class="content my-2">
                <?php the_content(); ?>
            </div>
        </main>
        <?php get_template_part('template-parts/sidebar'); ?>
    </div>
</article>
<div class="pager text-center">
    <ul class="flex">
        <li><?php previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i> %title '); ?></li>
        <li><?php next_post_link('%link', '%title <i class="fa-solid fa-chevron-right"></i>'); ?></li>
    </ul>
</div>
<?php get_footer(); ?>