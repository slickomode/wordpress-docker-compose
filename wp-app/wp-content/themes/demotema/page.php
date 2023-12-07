<?php
get_header();
?>
<!-- Start the Loop. -->
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <h1>
                            <?php the_title(); ?>
                        </h1>
                        <p>
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>
