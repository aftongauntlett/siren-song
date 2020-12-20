<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  wp_head();
  ?>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fondamento&family=Tangerine:wght@700&display=swap" rel="stylesheet">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta name="theme-color" content="#fafafa">
</head>

<body>
  <nav class="navmenu navbar navbar-expand-lg navbar-light sticky-top" style="background-color: #343a40">
<a class="navbar-brand" href="/"><img src="<?php echo wp_get_attachment_url(get_theme_mod('lawyer_navbar_logo_image')) ?>" alt=""></a>
    

    <button 
      class="navbar-toggler" 
      type="button" 
      data-toggle="collapse" 
      data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" 
      aria-expanded="false" 
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
        wp_nav_menu(array(
          'theme_location' => 'headerNavbar',
          'depth'           => 3, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'navbarSupportedContent',
          'menu_class'      => 'navbar-nav ml-auto mr-5',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
      ?>
  </nav>
  