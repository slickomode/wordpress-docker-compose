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
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span></span>
            </label>

            <?php
            $menu_args = array(
                'theme_location' => 'primary', // Use the registered menu location
                'container' => false,
                'menu_class' => 'menu__box', // Set the same class as used in your HTML
            );
            wp_nav_menu($menu_args);
            ?>
        </div>

        <div class="header-container">
            <div class="side-container"></div>
            <div class="centered">
                <h1>
                    <?php echo get_bloginfo('name'); ?>
                </h1>
            </div>

            <div class="side-container">

            </div>
        </div>
    </header>

    <!-- In your header.php or wherever you want the navigation to appear -->
    <nav>


        <div class="left-side-container"></div>
        <?php
        $menu_args = array(
            'theme_location' => 'primary', // Use the registered menu location
            'container' => false,
            'menu_class' => 'nav-menu',
        );
        wp_nav_menu($menu_args);
        ?>

        <div class="side-container">
            <form id="searchform" class="searchform" action="/">
                <div id="search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input id="searchbar" type="text" value="<?php get_search_query(); ?>" name="s" placeholder="Sök" />
                </div>
            </form>
        </div>
    </nav>
