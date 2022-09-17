<?php

if (!defined('ABSPATH')) {
  exit;
}

add_action('wp_enqueue_scripts', 'theme_files');

function theme_files()
{
  wp_enqueue_style('falch_main_styles', get_stylesheet_uri(), NULL, microtime(), false);

  wp_enqueue_script('common_js', get_theme_file_uri('assets/js/common.js'), '', microtime(), TRUE);

  if (is_home()) {
    wp_enqueue_style('frontPage', get_theme_file_uri('assets/css/frontPage.css'), NULL, microtime(), false);

    wp_enqueue_script('anime', get_theme_file_uri('/vendor/anime/anime.js'), '', microtime(), TRUE);
    wp_enqueue_script('frontPage', get_theme_file_uri('/assets/js/frontPage.js'), '', microtime(), TRUE);
  }
  if (is_page() && (get_the_ID() == url_to_postid("the-hand"))) {
    wp_enqueue_style('the_hand', get_theme_file_uri('assets/css/theHand.css'), NULL, microtime(), false);
    wp_enqueue_style('plyr', get_theme_file_uri('/vendor/plyr/plyr.css'), NULL, microtime(), false);
    wp_enqueue_script('plyr', get_theme_file_uri('/vendor/plyr/plyr.js'), '', microtime(), TRUE);
    wp_enqueue_script('the_hand', get_theme_file_uri('assets/js/theHand.js'), 'JQuery', microtime(), TRUE);
  }

  if (is_singular('member')) :
    wp_enqueue_style('member-page_css', get_theme_file_uri('assets/css/member.css'), NULL, microtime(), false);
    wp_enqueue_script('member-page_js', get_theme_file_uri('assets/js/member.js'), '', microtime(), TRUE);
  endif;

  if ((is_page() && (get_the_ID() == url_to_postid("about-falch"))) || (is_page() && (get_the_ID() == url_to_postid("درباره-فالش")))) {

    wp_enqueue_style('about-falch', get_theme_file_uri('assets/css/about.css'), NULL, microtime(), false);
    wp_enqueue_script('anime', get_theme_file_uri('/vendor/anime/anime.js'), '', microtime(), TRUE);
    wp_enqueue_script('about-falch', get_theme_file_uri('/assets/js/about.js'), '', microtime(), TRUE);
  }


  wp_enqueue_style('pripheral', get_theme_file_uri('assets/css/pripheral.css'), NULL, microtime(), false);
};
