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
                        <div class="col-xs-12">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <?php if (has_post_thumbnail()): ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                <?php endif; ?>

                                <header class="entry-header">
                                    <h2 class="title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>

                                    <ul class="meta">
                                        <li>
                                            <i class="fa fa-calendar"></i>
                                            <?php the_date(); ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-user"></i>
                                            <?php the_author_posts_link(); ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-tag"></i>
                                            <?php the_category(', '); ?>
                                        </li>
                                    </ul>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div><!-- .entry-content -->

                            </article><!-- #post-<?php the_ID(); ?> -->

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
