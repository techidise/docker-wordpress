<!-- Tutorial WP Theme Dev ("Posts Archive Page....") || Time: 1:54:00 -->
<!-- "Screenshot" recommended dimensions: 1200x900 pixels -->
<!-- Command to create a new plugin: npx @wordpress/create-block@latest <Name of Plugin> --variant dynamic --target-dir . -->

<!-- package.json file: "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->

<!-- "build": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json'",
    "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->
<!-- % "npm run watch" -->

<!-- Look into making "Custom Post Types", "Custom Fields", "etc." -->

<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article class="flex flex-col grow min-h-screen pt-12">
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="card bg-primary text-primary-content w-96 m-4">
                <div class="card-body items-center">
                    <div class="card-title">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                    </div>
                    <div>
                        <span>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span>
                            by <?php the_author(); ?>
                        </span>
                        <p class="font-display">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>

        <div class="mx-auto">
            <?php the_post_navigation(); ?>
        </div>

    <?php else : ?>
        // When no post are found, output this text.
        <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

    <!-- The secondary query. Note that you can use any category name here. In our example,
            we use "example-category". -->

    <?php $secondary_query = new WP_Query('category_name=news'); ?>


    <div class="mx-auto bg-gray-100 p-4 rounded-lg shadow-md mt-4 w-96 text-primary-content">
        <?php if ($secondary_query->have_post()) : ?>
            <?php while ($secondary_query->have_posts()) : $secondary_query->the_post(); ?>
                <ul class="card items-center">

                    <?php the_title('<li>', '</li>'); ?>

                </ul>
            <?php endwhile; ?>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>

        </article>

        <!-- Pagination Section -->
        <div class="p-4">
            <?php the_posts_pagination(); ?>
        </div>

        <?php get_footer(); ?>



        <!-- Back Up copy of Original -->
        <!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <!-- <title></title> -->
        <!-- </head>

<body class="flex flex-col min-h-screen">
    ?php get_header(); ? -->

        <!-- <main class="grow flex flex-col px-3 py-5 items-center justify-center">
        <div class="grid grid-cols-2">
            ?php
            // Start the main loop
            if (have_posts()) :
                while (have_posts()) : the_post();
                    echo '<div class="card bg-primary text-primary-content w-96 m-4">'; // Beginning Card
                    echo '<div class="card-body">'; // Beginning Card Body

                    echo '<div class="card-title">'; // Beginning Card-Title
                    the_title();
                    echo '</div>'; // Ending Card-Title

                    echo '<p class="font-display">'; // Beginning Card-Title
                    the_content();
                    echo '</p>'; // Ending Card-Title

                    echo '</div>'; // Ending Card Body
                    echo '</div>'; // Ending Card
                endwhile;
            else :
                // When no post are found, output this text.
                _e('Sorry, no posts matched your criteria.');
            endif;
            wp_reset_postdata();

            /*
            * The secondary query. Note that you can use any category name here. In our example, 
            * we use "example-category". 
            */
            $secondary_query = new WP_Query('category_name=news');
            ?>

            <div class="bg-gray-100 p-4 rounded-lg shadow-md mt-4 w-96 text-primary-content">
                <php
                // The second loop.
                if ($secondary_query->have_posts()) :
                    echo '<ul class="card">';
                    while ($secondary_query->have_posts()) : $secondary_query->the_post();
                        the_title('<li>', '</li>');
                    endwhile;
                    echo '</ul>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </main> -->

        <!-- Pagination Section -->
        <!-- <div class="p-4">
        ?php the_posts_pagination(); ?
    </div>
</body>

</html>


?php get_footer(); ? -->