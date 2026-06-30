<div class="card w-96 bg-base-100 shadow-sm">
    <div class="card-body">
        <span class="badge badge-xs badge-warning">Post Comments:</span>
        <div class="flex justify-between">
            <h2 class="text-3xl font-bold">
                <?php
                if (!have_comments()) {
                    echo "Leave a Comment";
                } else {
                    $comment_number = get_comments_number();
                    echo "$comment_number Comments";
                }
                ?>
            </h2>
        </div>
        <div>
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 120,
                    'style' => 'div',
                )
            );
            ?>
        </div>
        <hr class="">
        <div>
            <?php
            if (comments_open()) {
                comment_form(
                    array(
                        'class_form' => '',
                        'title_reply_before' => '<h2 id="reply-title" class="" >',
                        'title_reply_after' => '</h2>'
                    )
                );
            }
            ?>
        </div>
    </div>
</div>
</div>