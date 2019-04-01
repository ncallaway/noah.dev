<?

if ( function_exists('build_post_types') ) {
  $postTypeData = array(
    'slug' => array(
      'singular'   => 'Project',
      'plural'     => 'Projects',
      'options'    => array(
        'menu_icon'    => 'dashicons-media-code'
      )
    )
  );

  build_post_types($postTypeData);
}