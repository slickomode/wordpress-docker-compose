<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add your CSS styling for a consistent look -->
    <?php wp_head(); ?> <!-- Add this line to include WordPress stylesheets and scripts -->
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-container">
            <div class="under-container"></div>
            <div class="centered">
                <h1>
                    <?php echo get_bloginfo('name'); ?>
                </h1>
            </div>

            <div class="under-container">
                <form id="searchform" class="searchform" action="/">
                    <div>
                        <input type="text" value="<?php get_search_query(); ?>" name="s" />
                        <input type="submit" value="Sök" />
                    </div>
                </form>
            </div>
        </div>
    </header>

    <!-- In your header.php or wherever you want the navigation to appear -->
    <nav>
        <?php
        $menu_args = array(
            'theme_location' => 'primary', // Use the registered menu location
            'container' => false,
            'menu_class' => 'nav-menu',
        );
        wp_nav_menu($menu_args);
        ?>
    </nav>
