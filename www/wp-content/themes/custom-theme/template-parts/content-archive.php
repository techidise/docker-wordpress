<div class="card w-96 bg-base-100 card-sm shadow-sm">
    <figure>
        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>" class="" alt="Image">
    </figure>
    <div class="card-body">
        <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div>
            <small><span><?php the_date(); ?></span></small>
            <!-- <small><span>5 min read</span></small> -->
            <small><span><?php comments_number(); ?></span></small>
        </div>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="">Read more &rarr;</a>
    </div>
</div>