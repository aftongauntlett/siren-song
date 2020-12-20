<?php

// STYLING
function lawyer_files() {
    wp_enqueue_style('google_fonts', "https://fonts.googleapis.com/css2?family=Sacramento&display=swap", "https://fonts.googleapis.com/css2?family=Fondamento&display=swap", "https://fonts.googleapis.com/css2?family=Fondamento&display=swap");
    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css");
    wp_enqueue_style('font_awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('lawyer_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lawyer_files');

function lawyer_features() {
    add_theme_support('title-tag'); 
    add_theme_support('custom-logo');
    register_nav_menu('headerNavbar', 'Navbar');
}

add_action('after_setup_theme', 'lawyer_features');


function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// SCRIPTS
function lawyer_register_scripts(){

    wp_enqueue_script('lawyer-jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), '3.5.1'. true);
    wp_enqueue_script('lawyer-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), '4.5.3'. true);
    wp_enqueue_script('lawyer-js', get_template_directory_uri()."/lawyer.js", array(), '1.0'. true);

}
   
add_action( 'wp_enqueue_scripts', 'lawyer_register_scripts');

// FOOTER SECTION

function lawyer_footer_callouts($wp_customize){
  $wp_customize->add_section('lawyer_footer_callouts', array(
    'title' => 'Footer'
  ));
  

//   Add/Remove Option - Footer

$wp_customize->add_setting('lawyer_footer_callout_display', array(
    'default' => 'No'
  ));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'lawyer_footer_callout_display_control', array(
    'label' => 'Display this Section?',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'lawyer_footer_callout_display',
    'type' => 'select',
    'choices' => array('No' => 'No', 'Yes' => 'Yes')
  )));

// End Add/remove Option - Footer

//              *** SETTING ***

// Street Address SETTING - Footer
  $wp_customize->add_setting('street-address', array(
    'default' => '123 Example Street, Suite 1'
  ));

// City, State and Zip SETTING - Footer
  $wp_customize->add_setting('city-state-zip-address', array(
    'default' => 'Springfield, MA, 22222'
  ));

//  Phone SETTING - Footer
$wp_customize->add_setting('phone', array(
    'default' => '555-555-5555'
  ));

  // Email SETTING - Footer
  $wp_customize->add_setting('email', array(
    'default' => 'Email'
  ));

//   Copyright SETTING - Footer
$wp_customize->add_setting('copyright', array(
    'default' => 'Copyright'
  ));


//              *** CONTROL ***

// Street Address CONTROL - Footer
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'street-address', array(
    'label' => 'Street Address & Suite',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'street-address'
  )));

// City, State and Zip CONTROL - Footer
  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'city-state-zip-address', array(
    'label' => 'City, State & Zip',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'city-state-zip-address'
  )));

// Phone CONTROL - Footer
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'phone', array(
    'label' => 'Phone',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'phone'
  )));

    // Email CONTROL - Footer
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'email', array(
    'label' => 'Email',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'email'
  )));
  
//   Copyright CONTROL - Footer
$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'copyright', array(
    'label' => 'Copyright',
    'section' => 'lawyer_footer_callouts',
    'settings' => 'copyright',
    'type' => 'textarea'
  )));

}


// CARDS SECTION 

function lawyer_cards_callouts($wp_customize){
    $wp_customize->add_section('lawyer_cards_callouts', array(
      'title' => 'Cards'
    ));
  
    //           *** SETTINGS ***
    // CARD ONE
    $wp_customize->add_setting('card-one-title', array(
      'default' => 'Enter title here'
    ));
  
    $wp_customize->add_setting('card-one-info', array(
      'default' => 'Enter info here'
    ));

    // CARD TWO

    $wp_customize->add_setting('card-two-title', array(
        'default' => 'Enter title here'
      ));
    
      $wp_customize->add_setting('card-two-info', array(
        'default' => 'Enter info here'
      ));

    //   CARD THREE

    $wp_customize->add_setting('card-three-title', array(
        'default' => 'Enter title here'
      ));
    
      $wp_customize->add_setting('card-three-info', array(
        'default' => 'Enter info here'
      ));

    //           *** CONTROL ***

    // CARD ONE
  
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-one-title', array(
      'label' => 'Card #1 Title',
      'section' => 'lawyer_cards_callouts',
      'settings' => 'card-one-title'
    )));
  
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-one-info', array(
      'label' => 'Card #1 Details',
      'section' => 'lawyer_cards_callouts',
      'settings' => 'card-one-info',
      'type' => 'textarea'
    )));
  

    //   CARD TWO

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-two-title', array(
    'label' => 'Card #2 Title',
    'section' => 'lawyer_cards_callouts',
    'settings' => 'card-two-title'
  )));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-two-info', array(
    'label' => 'Card #2 Details',
    'section' => 'lawyer_cards_callouts',
    'settings' => 'card-two-info',
    'type' => 'textarea'
  )));


    // CARD THREE

$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-three-title', array(
    'label' => 'Card #3 Title',
    'section' => 'lawyer_cards_callouts',
    'settings' => 'card-three-title'
  )));

  $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'card-three-info', array(
    'label' => 'Card #3 Details',
    'section' => 'lawyer_cards_callouts',
    'settings' => 'card-three-info',
    'type' => 'textarea'
  )));
}
  

// IMAGES SECTION

function lawyer_image_callouts($wp_customize){
    $wp_customize->add_section('lawyer_image_callouts', array(
      'title' => 'Images'
    ));

//   Background Image SETTING

  $wp_customize->add_setting('lawyer_background_image', array());

//   Background Image CONTROL

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lawyer_background_image', array(
    'label' => 'Background Image',
    'section' => 'lawyer_image_callouts',
    'settings' => 'lawyer_background_image',
    'width' => 1920,
    'height' => 1080,
  )));

  //   Background Image SETTING

  $wp_customize->add_setting('lawyer_center_logo_image', array());

//   Background Image CONTROL

  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lawyer_center_logo_image', array(
    'label' => 'Center Logo Image',
    'section' => 'lawyer_image_callouts',
    'settings' => 'lawyer_center_logo_image',
    'width' => 1920,
    'height' => 1080,
  )));

    //   Background Bottom Image SETTING

    $wp_customize->add_setting('lawyer_bottom_image', array());

    //   Background Bottom Image CONTROL
    
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lawyer_bottom_image', array(
        'label' => 'Bottom Image',
        'section' => 'lawyer_image_callouts',
        'settings' => 'lawyer_bottom_image',
        'width' => 1920,
        'height' => 1080,
      )));

         //   Background Secondary Image SETTING

    $wp_customize->add_setting('lawyer_secondary_image', array());

    //   Background Secondary Image CONTROL
    
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lawyer_secondary_image', array(
        'label' => 'Secondary Background Image',
        'section' => 'lawyer_image_callouts',
        'settings' => 'lawyer_secondary_image',
        'width' => 1920,
        'height' => 1080,
      )));

    //   Navbar Logo Image SETTING

    $wp_customize->add_setting('lawyer_navbar_logo_image', array());

    //   Navbar Logo CONTROL
    
      $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'lawyer_navbar_logo_image', array(
        'label' => 'Navbar Logo Image',
        'section' => 'lawyer_image_callouts',
        'settings' => 'lawyer_navbar_logo_image',
        'width' => 1920,
        'height' => 1080,
      )));

  
}

  
// Quote

function lawyer_quote_callouts($wp_customize){
    $wp_customize->add_section('lawyer_quote_callouts', array(
      'title' => 'Quote'
    ));
  
// Quote Title
$wp_customize->add_setting('quote_title', array(
    'default' => 'Enter Quote Here'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'quote_title', array(
      'label' => 'Blurb',
      'section' => 'lawyer_quote_callouts',
      'settings' => 'quote_title'
    )));

// Quote 

$wp_customize->add_setting('quote', array(
    'default' => 'Enter review here'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'quote', array(
      'label' => 'Review',
      'section' => 'lawyer_quote_callouts',
      'settings' => 'quote',
      'type' => 'textarea'
    )));

// Quote Name

    $wp_customize->add_setting('quote_name', array(
    'default' => 'Enter reviewers name here'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'quote_name', array(
      'label' => 'Author of Review',
      'section' => 'lawyer_quote_callouts',
      'settings' => 'quote_name'
    )));
}

// ACTION
add_action('customize_register', 'lawyer_footer_callouts');
add_action('customize_register', 'lawyer_cards_callouts');
add_action('customize_register', 'lawyer_quote_callouts');
add_action('customize_register', 'lawyer_image_callouts');

?>