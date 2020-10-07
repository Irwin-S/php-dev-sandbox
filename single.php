<?php get_header(); ?>

<article>
    <h2>
        Blog Post (Single)
        <?php the_title(); // This functions echos on its own?>
    </h2>
    <p>
        <strong>Article Published On: </strong>
        <time datetime="<?php echo get_the_date( DATE_ATOM ); ?>">
            <?php echo get_the_date(); // WP function; gets the date of the current "the_post()"?>
        </time>
    </p>
    <h3>Post Content</h3>
    <?php the_content(); // Displays post contents. ?>
</article>

<?php get_footer(); ?>