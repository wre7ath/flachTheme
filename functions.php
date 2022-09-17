<?php
include_once("inc/theme_features.php");


//theme setup
include_once("inc/theme_setup/setup_pages.php");

//customized
include_once("inc/customized/comments.php");

//dequeue
include_once("inc/theme_setup/dequeue_jquery_migrate.php");
include_once("inc/theme_setup/dequeue_wp_block_library.php");
include_once("inc/theme_setup/dequeue_wordpress_defaults.php");
include_once("inc/theme_setup/dequeue_emoji.php");
include_once("inc/theme_setup/remove_gutenberg_svg.php");

//general
include_once("inc/assets_manager.php");
include_once("inc/add_acf.php");


//cpt
include_once("inc/cpt/members_setup.php");


if (!function_exists('wreath_get_picture_tag')) :

    function wreath_get_picture_tag($id, $classes, $alt, $size, $responsive)
    {
        $image = wp_get_attachment_image_src($id, $size);
        $webp = (substr($image[0],-5) !== '.webp') ? wreath_webp_link($image) : $image[0];

        if ($responsive) {
            $image_responsive =  wp_get_attachment_image_src($id, $responsive);
            $webp_responsive = (substr($image_responsive[0],-5) !== '.webp') ? wreath_webp_link($image_responsive) : $image_responsive[0];
        }

        if (!$alt) {
            $alt = $image[3];
        }

        if ($responsive) {
            $picture = '
            <picture>
                <source media="(min-width:650px)" srcset="' . $webp . '" type="image/webp" />
                <source media="(min-width:650px)" srcset="' . $image[0] . '" />
                <source srcset="' . $webp_responsive . '" type="image/webp" />
                <source srcset="' . $image_responsive[0] . '" />
                <img src="' . $image[0] . '" class="' . $classes . '" alt="' . $alt . '" />
            </picture>
            ';
        } else {
            $picture = '
            <picture>
                <source srcset="' . $webp . '" type="image/webp" />
                <img src="' . $image[0] . '" class="' . $classes . '" alt="' . $alt . '" />
            </picture>
            ';
        }


        echo $picture;
    }
endif;


if (!function_exists('wreath_webp_link')) :

    function wreath_webp_link($image)
    {

        $webp = str_replace('uploads', 'uploads-webpc/uploads', $image[0]) . '.webp';
        return $webp;
    }

endif;

load_theme_textdomain('falch-text');
