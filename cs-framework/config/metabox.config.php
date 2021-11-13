<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Headings                                -
// -----------------------------------------

$options[]    = array(
  'id'        => '_page_headings',
  'title'     => 'Headings',
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    array(
      'name'  => 'page_headings',
      'fields' => array(              
        
        array(
          'id'    => 'heading_1',
          'type'  => 'text',
          'title' => 'Heading 1',
          'sanitize' => FALSE,
          'attributes'    => array(
            'autocomplete' => 'off',
          ),
          'desc'  => 'Defines the most important heading. This field overrides the main page title on the front-end.',
        ),      

      ),
    ),

  ),
);

// -----------------------------------------
// Front Page Options                      -
// -----------------------------------------

// $options[]    = array(
//   'id'        => '_front_page_options',
//   'title'     => 'Front Page Options',
//   'post_type' => 'page',
//   'page_template' => 'front-page.php',
//   'context'   => 'normal',
//   'priority'  => 'high',
//   'sections'  => array(

//     array(
//       'name'  => 'front_page_hero',
//       'title' => 'Hero Section',
// 			'icon'  => 'fa fa-image',

//       'fields' => array(								

//       ),
//     ),	

//   ),
// );

CSFramework_Metabox::instance( $options );
