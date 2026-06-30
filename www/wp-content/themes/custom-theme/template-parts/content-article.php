<div class="">
    <header>
        <div class="">
            <span class=""><?php the_date(); ?></span>
            <?php the_tags('<span class=""><i class=""></i>', '</span><span class=""><i class=""></i>', '</span>'); ?>
            <span class=""><a href="#"><i class=""></i>
                    <?php comments_number(); ?>
                </a></span>
        </div>
    </header>
    <?php
    the_content();
    ?>

    <?php
    comments_template();
    ?>
</div>