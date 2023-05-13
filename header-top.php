<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta property="og:locale" content="ja_JP">



  <!--googleadsence-->
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-6092164536333052",
      enable_page_level_ads: true
    });
  </script>
  <!--googleadsence-->

  <!--- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-122670438-4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-122670438-4');
  </script>
  <!--- Google Analytics -->

  <!-- Google tag (gtag.js) GA4-->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-TFWGN4PM5J"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-TFWGN4PM5J');
  </script>

  <!--個別ページ用のmetaデータ-->
  <?php if (is_single() || is_page()) : ?>
    <?php setup_postdata($post) ?>
    <?php if (has_tag()) : ?>
      <?php $tags = get_the_tags();
      $kwds = array();
      foreach ($tags as $tag) {
        $kwds[] = $tag->name;
      }  ?>
      <meta name="keywords" content="<?php echo implode(',', $kwds); ?>">
    <?php endif; ?>
    <!--個別ページ用のmetaデータ-->

  <?php else : ?><!--個別ページ以外のメタデータ-->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php $allcats = get_categories();
    $kwds = array();
    foreach ($allcats as $allcat) {
      $kwds[] = $allcat->name;
    } ?>
    <meta name="keywords" content="<?php echo implode(',', $kwds); ?>">
    <?php
    $http = is_ssl() ? 'https' . '://' : 'http' . '://';
    $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    ?>
    <meta property="og:description" content="<?php bloginfo('description') ?>">
    <!--個別ページ以外のメタデータ--><?php endif; ?>






  <!--サンクスページ-->
  <script>
    document.addEventListener('wpcf7mailsent', function(event) {
      location = 'https://watsunblog.com/contact-complete';
    }, false);
  </script>
  <!--サンクスページ-->

  <?php if (is_singular()) {
    wp_enqueue_script('comment-reply');
  } ?>



  <!--ヘッダー画像読み込み-->
  <?php if (get_header_image()) : ?>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">
  <?php endif; ?>
  <!--ヘッダー画像読み込み-->





  <!--css呼び出し、fontawwesome、アイコン呼び出し-->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">


  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/images/webclipicon.png" />
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" />
  <!--css呼び出し、fontawwesome、アイコン呼び出し-->




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js"></script>


  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/workflow.js"></script>



  <?php wp_head(); ?>
</head>



<body <?php body_class(); ?>>
  <header>



    <div id="nav-drawer">


      <div class="contact_sp"><a href="/contact"><i class="far fa-envelope"></i></a></div>


      <div class="site-title">
        <div class="title"><a href="<?php echo home_url(); ?>">
            <?php the_custom_logo();
            if (!has_custom_logo()) { ?><?php bloginfo('name'); ?><?php } ?>
          </a></div>
      </div>



      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span></label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
      <div id="nav-content">

        <?php wp_nav_menu(array(
          'theme_location' => 'header-nav',
          'container' => 'nav',
          'container_class' => 'header-nav',
          'container_id' => 'header-nav',
          'fallback_cb' => ''
        )); ?>

      </div>

    </div>




  </header>