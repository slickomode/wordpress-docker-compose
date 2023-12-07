<?php
get_header();
?>

<main>
    <section class="flex-container">

        <aside class="sidebar2">
        </aside>

        <div class="loop-content">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <div class="blogg-container">

                        <div class="row">
                            <div class="col-xs-12 col-md-9">
                                <h1>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h1>

                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div><!-- .entry-content -->

                            </div>
                        </div>

                        <div class="row">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                                <?php if (has_post_thumbnail()): ?>
                                    <div class="post-thumbnail">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>

                                <header class="entry-header">
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

                            </article><!-- #post-<?php the_ID(); ?> -->
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>

    </section>
</main>

<?php
get_footer();
?>
