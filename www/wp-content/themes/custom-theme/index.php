<!-- Tutorial WP Theme Dev ("Posts Archive Page....") || Time: 1:54:00 -->
<!-- "Screenshot" recommended dimensions: 1200x900 pixels -->
<!-- Command to create a new plugin: npx @wordpress/create-block@latest <Name of Plugin> --variant dynamic --target-dir . -->

<!-- package.json file: "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->

<!-- "build": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json'",
    "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->
<!-- % "npm run watch" -->

<!-- Look into making "Custom Post Types", "Custom Fields", "etc." -->

<h2><?php get_header(); ?></h2>

<article class="px-3 py-5">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

    <?php the_posts_pagination(); ?>
</article>


<?php get_footer(); ?>