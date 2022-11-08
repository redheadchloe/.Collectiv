<?php get_header(); ?>


<?php get_template_part('template-parts/breadcrumb'); ?>

<h2 class="text-center my-2"><?php echo is_month() ? the_time('Y年m月') : wp_title(''); ?></h2>
<?php get_template_part('template-parts/sidebar'); ?>
<?php get_template_part('template-parts/result'); ?>



<?php get_footer(); ?>