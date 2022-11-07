<nav>
    <a href="<?php echo home_url(''); ?>" class="logo"><?php bloginfo('name'); ?></a>
    <?php
    wp_nav_menu([
        'menu' => 'menu',
        'menu_class' => 'flex',
        'container' => false,
    ])
    ?>
    <input type="text" placeholder="検索する">
    <button class="mobile-btn">
        <span></span>
        <span></span>
        <span></span>
    </button>
</nav>