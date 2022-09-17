<!DOCTYPE html>

<?php
if (!is_rtl()) {
  $dir = 'ltr';
} else {
  $dir = 'rtl';
}
$lang = get_locale();
?>

<html dir="<?php echo $dir; ?>" lang="<?php echo $lang; ?>">

<head>
  <?php wp_head() ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#d32f2f">

  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K5ZK9LL');
  </script>

  <script>
    document.documentElement.classList.add("js-active");
  </script>

</head>

<body <?php body_class(); ?>>

  <?php
  if (!is_home()) { ?>

    <header id="main-header" class="flex">
      <div id="main-nav-wrapper">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'headerMenuNav',
            'container' => 'nav'
          )
        );
        ?>
      </div>
      <div class="language-switch">
        <?php $text = (is_rtl()) ? 'EN' : 'فا';
        $link =  (is_rtl()) ? '/' : '/fa';     ?>
        <a href="<?php echo $link ?>" class="flex-center">
          <?php echo $text; ?>
        </a>
      </div>
    </header>

  <?php }
  ?>


  <canvas id="noise"></canvas>
  <div class="page-wrapper">