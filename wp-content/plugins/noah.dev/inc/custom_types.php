<?

if ( function_exists('build_post_types') ) {
  $postTypeData = array(
    'slug' => array(
      'singular'   => 'Project',
      'plural'     => 'Projects',
      'options'    => array(
        'menu_icon'    => 'dashicons-media-code'
      )
          // 'taxonomies' => array(
          //     'taxonomy_slug' => array(
          //         'singular' => 'Taxonomy',
          //         'plural'   => 'Taxonomies',
          //         'options'  => array(
          //             'hierarchical' => true
          //         ),
          //         'defaults' => array(
          //             'term_slug' => array(
          //                 'name' => 'Default Term',
          //                 'options' => array(
          //                     'description' => 'A default term — this cannot be deleted by users.'
          //                 )
          //             ),
          //             'child_term_slug' => array(
          //                 'name' => 'Default Child Term',
          //                 'options' => array(
          //                     'parent' => 'term_slug' // parents are assigned by slug
          //                 )
          //             )
          //         )
          //     )
          // )
      )
  );

  build_post_types($postTypeData);
}