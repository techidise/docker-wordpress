<div id="post-<?php the_ID(); ?> >" class="flex flex-col min-h-screen">
    <h1 class="text-7xl"><?php the_title(); ?></h1>
    <div class=""> <!-- grid grid-cols-1 -->
        <div class="card lg:card-side bg-base-300 shadow-sm">
            <figure>
                <img src="https://img.daisyui.com/images/stock/photo-1494232410401-ad00d5433cfa.webp"
                    alt="Album">
            </figure>
            <div class="card-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>