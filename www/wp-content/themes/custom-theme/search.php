<h2><?php get_header(); ?></h2>

<h2><?php the_archive_title(); ?></h2>

<article class="px-3 py-5">

    <?php
    while (have_posts()) {
        the_post(); ?>
        <div>
            <h3>
                <a href="<?php the_permalink(); ?>">
                    <?php
                    the_title();
                    get_template_part('template-parts/content', 'archive');
                    ?>
                </a>
            </h3>
        </div>
    <?php }
    ?>

</article>

<?php get_footer(); ?>