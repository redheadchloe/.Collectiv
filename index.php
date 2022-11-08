<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb'); ?>
<section class="my-10 grid index-container">
    <main>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php else : ?>
            <img src="https://dummyimage.com/400x300/000/fff.png&text=Hello+World!">
        <?php endif; ?>
        <small class="mt-2"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></small>
        <h3><?php the_title(); ?></h3>
        <div class="content my-2">
            <?php the_content(); ?>
        </div>
        <ul class="flex my-10">
            <li><?php previous_post_link('%link', '<i class="fa-solid fa-chevron-left"></i> %title '); ?></li>
            <li><?php next_post_link('%link', '%title <i class="fa-solid fa-chevron-right"></i>'); ?></li>
        </ul>
    </main>
    <?php get_template_part('template-parts/sidebar'); ?>
</section>
<?php get_footer(); ?>