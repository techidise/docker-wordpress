<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <main class="flex flex-col min-h-screen">
            <div class="relative isolate px-3 lg:px-2">
                <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
                </div>
                <div class="mx-auto max-w-2xl py-32 sm:py-12 lg:py-24">
                    <div class="text-center">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">

                            <?php if (has_post_thumbnail()) : ?>
                                <div>
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php endif; ?>

                            <h1 class="text-2xl"><?php the_title(); ?></h1>

                            <div>
                                <span><?php echo get_the_date(); ?></span>
                                <span><?php the_author(); ?></span>
                            </div>

                            <div class="mt-6 text-base leading-7 text-gray-700">
                                <?php the_content(); ?>
                            </div>

                            <div class="flex justify-center">
                                <?php get_template_part('template-parts/content', 'article'); ?>
                            </div>

                            <nav class="flex justify-between items-center py-6 border-t border-gray-600 mt-10">
                                <?php
                                the_post_navigation([
                                    'prev_text' => '<span aria-hidden="true">&larr;</span> %title',
                                    'next_text' => '%title <span aria-hidden="true">&rarr;</span>',
                                ]);
                                ?>
                            </nav>

                        </article>
                    </div>
                </div>
                <div aria-hidden="true" class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
                    <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75"></div>
                </div>
            </div>
        </main>

    <?php endwhile; ?>

<?php else : ?>
    // When no post are found, output this text.
    <?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>

<?php get_footer(); ?>