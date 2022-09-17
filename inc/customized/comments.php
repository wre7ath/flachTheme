<?php


if (!defined('ABSPATH')) {
    exit;
};

function falch_comment_reply_text($link)
{
    $link = str_replace('Reply', 'پاسخ', $link);
    return $link;
}
add_filter('comment_reply_link', 'falch_comment_reply_text');
