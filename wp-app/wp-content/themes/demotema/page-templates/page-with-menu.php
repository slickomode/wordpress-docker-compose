<?php
/*
    Template Name: Page with menu
*/
get_header();
?>
<!-- Start the Loop. -->
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main>
            <section class="flex-container">
                <div class="menu-container">
                    <div class="row">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
                <div class="side-menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'sidomenu', // Use the registered menu location
                        )
                    );
                    ?>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
?>
