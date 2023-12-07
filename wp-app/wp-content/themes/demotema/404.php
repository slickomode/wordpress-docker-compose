<?php
get_header();
?>
<!-- Start the Loop. -->
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
        <main>
            <section>
                <div class="main-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="hero">
                                <div class="text">
                                    <h1>
                                        Denna sida hittas inte
                                    </h1>
                                </div>
                            </div>
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
