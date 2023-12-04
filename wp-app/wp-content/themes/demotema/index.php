<?php
get_header();
?>


<div class="side-menu">
    <?php
    $menu_args = array(
        'theme_location' => 'secondary', // Replace with the actual menu location
        'container' => false,
        'menu_class' => 'nav-menu',
    );
    wp_nav_menu($menu_args);
    ?>
</div>



<?php
get_footer();
?>
