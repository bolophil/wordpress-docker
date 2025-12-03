<?php
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
  <div class="site-title"><?php bloginfo('name'); ?></div>
  <div class="site-subtitle">Engineer • Developer • Automation & Infrastructure Specialist</div>

  <nav class="main-nav">
    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => '',
        'fallback_cb' => false,
      ));
    ?>
  </nav>
</header>

<div class="site-wrapper">
