<?php if (have_comments()) : ?>
    <div id="comments" class="comments-area">
        <h2 class="comments-title">
            دیدگاه خود را ثبت کنید
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 75,
            ));
            ?>
        </ol>

        <?php
        if (get_comment_pages_count() > 1 && get_option('page_comments')) :
        ?>
            <nav class="navigation comment-navigation" role="navigation">
                <h3 class="screen-reader-text section-heading"><?php _e('Comment navigation', 'twentythirteen'); ?></h3>
                <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'twentythirteen')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'twentythirteen')); ?></div>
            </nav>
        <?php endif; // Check for comment navigation 
        ?>
    <?php endif; // have_comments() 
    ?>

    <?php
    $comment_send = 'ارسال';
    $comment_reply = 'ارسال نظر';
    $comment_reply_to = 'ارسال پاسخ';

    $comment_author = 'نام';
    $comment_email = 'ای‌میل';
    $comment_body = 'نظر خود را وارد کنید';
    $comment_cancel = 'لفو ارسال پاسخ';

    $comments_args = array(
        //Define Fields
        'fields' => array(

            'author' => '<p class="comment-form-author"><br /><input id="author" name="author" aria-required="true" placeholder="' . $comment_author . '"></input></p>',
            'email' => '<p class="comment-form-email"><br /><input id="email" name="email" placeholder="' . $comment_email . '"></input></p>',
        ),

        'label_submit' => __($comment_send),
        'title_reply' => __($comment_reply),
        'title_reply_to' => __($comment_reply_to),
        'cancel_reply_link' => __($comment_cancel),
        'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body . '"></textarea></p>',
        'comment_notes_before' => __($comment_before),
        'comment_notes_after' => '',
        'id_submit' => __('comment-submit'),
    );
    comment_form($comments_args);

    ?>
    </div>

    <div class="pagination">
        <?php paginate_comments_links(); ?>
    </div>