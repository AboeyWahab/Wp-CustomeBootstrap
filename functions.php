<?php
// ** Fungsi untuk meload file CSS **//
function resto_style()  {


    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
    wp_enqueue_style('fa', get_theme_file_uri('/css/font-awesome.min.css'));
    wp_enqueue_style('animate', get_theme_file_uri('/css/animate.css'));
    wp_enqueue_style('carousel', get_theme_file_uri('/css/owl.carousel.css'));
    wp_enqueue_style('df', get_theme_file_uri('/css/owl.theme.default.min.css'));
    wp_enqueue_style('popup', get_theme_file_uri('/css/magnific-popup.css'));
    wp_enqueue_style('style', get_theme_file_uri('/css/style.css'));

    // ** Fungsi untuk meload file JS **//

    wp_enqueue_script('jq', get_theme_file_uri('/js/jquery.js'), [], '1.0', true);
    wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), [], '1.0', true);
    wp_enqueue_script('stellar', get_theme_file_uri('/js/jquery.stellar.min.js'), [], '1.0', true);
    wp_enqueue_script('wow', get_theme_file_uri('/js/wow.min.js'), [], '1.0', true);
    wp_enqueue_script('owl', get_theme_file_uri('/js/owl.carousel.min.js'), [], '1.0', true);
    wp_enqueue_script('popup', get_theme_file_uri('/js/jquery.magnific-popup.min.js'), [], '1.0', true);
    wp_enqueue_script('smoothscroll', get_theme_file_uri('/js/smoothscroll.js'), [], '1.0', true);
    wp_enqueue_script('custom', get_theme_file_uri('/js/custom.js'), [], '1.0', true);


}



add_action('wp_enqueue_scripts', 'resto_style');


add_action('customize_register', 'resto_customize');
//** Untuk menambahkan custome fitur di themes */
 function resto_customize ($wp_customize) {

    /*$wp_customize->add_section('resto_setting', array(

        'title' => 'Setting Resto'

    ));  */
    $wp_customize->add_setting('logo_resto', array(

        'default' => 'The Resto'

    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'logo_control' , array(

        'label' => 'Logo',
        'section' => 'resto',
        'setting' => 'logo_resto',
        'type' => 'text'

    )) );

}
 

add_action('customize_register','mytheme_customizer_options');
/*
 * Add in our custom Accent Color setting and control to be used in the Customizer in the Colors section
 *
 */
function mytheme_customizer_options( $wp_customize ) {

$wp_customize->add_setting(
      'mytheme_accent_color', //give it an ID
      array(
          'default' => 'The Resto', // Give it a default
      )
  );
  $wp_customize->add_control(
     new WP_Customize_Color_Control(
         $wp_customize,
         'mytheme_custom_accent_color', //give it an ID
         array(
             'label'      => __( 'Logo', 'mythemename' ), //set the label to appear in the Customizer
             'section'    => 'colors', //select the section for it to appear under  
             'settings'   => 'mytheme_accent_color', //pick the setting it applies to
             'type' => 'text'
         )
     )
  );

}





