<!doctype html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
    </head>

    <!-- !START body -->
    <body <?php body_class(); ?>>
      <div class="navbar--title d-flex justify-content-between align-items-center">
        <p>noah.dev</p>
        <div class="social-cions">
          <a href="https://github.com/ncallaway" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/social/github.png'; ?>" height="15px" />
          </a>

          <a href="https://www.linkedin.com/in/noah-callaway-166137b/" target="_blank" style="margin-right: .5em">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/social/linkedin.png'; ?>" height="15px" />
          </a>

          <a href="https://twitter.com/ncallaway" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/social/twitter.svg'; ?>" height="30px" style="margin-top: -2px" />
          </a>
        </div>
      </div>

      <!-- !START #wrapper -->
      <div id="wrapper">
        <?= render('components/nav/navbar') ?>

        <div class="container">  
          <div id="content">

      
      
        
