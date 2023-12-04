<!-- archive.php implementeras oxå med “the loop” -->
<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>
    <?php endwhile; ?>
<?php endif; ?>
