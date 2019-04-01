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
      <div class="navbar--title d-flex justify-content-between justify-content-center">
        <p>noah.dev</p>
        <p>social icons</p>
      </div>

      <!-- !START #wrapper -->
      <div id="wrapper">
        <?= render('components/nav/navbar') ?>

        <div class="container">  
          <div id="content">

      
      
        
