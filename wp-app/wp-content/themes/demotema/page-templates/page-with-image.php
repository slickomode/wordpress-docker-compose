<!-- search.php implementeras oxå med “the loop” -->
<?php
/*
    Template Name: Page with picture
*/
get_header();
?>
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main>
            <section>
                <div class="main-container">
                    <div class="undersida4">
                        <div class="text4">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                        <div class="image-container">
                            <img id="whatever" src="<?php the_post_thumbnail_url('medium') ?>" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>
