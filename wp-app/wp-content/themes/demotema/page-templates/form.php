<?php
/*
    Template Name: Contact Form
*/

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

                        <?php echo do_shortcode('[contact-form-7 id="ddb9561" title="Kontakt"]'); ?>

                    </div>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
?>
