<?php
/**
 * Customizer settings
 */

function ednc_customizer_settings($wp_customize) {
  /**
   * Blog settings
   */
  $wp_customize->add_section(
    'blog',
    array(
      'title' => 'Blog: From the Center Out'
    )
  );

  // Title
  $wp_customize->add_setting(
    'recent_blog_title',
    array()
  );

  $wp_customize->add_control(
    'recent_blog_title',
    array(
      'label' => 'Title of most recent blog post',
      'section' => 'blog',
      'type' => 'text',
      'priority' => 1
    )
  );

  // Date
  $wp_customize->add_setting(
    'recent_blog_date',
    array()
  );

  $wp_customize->add_control(
    'recent_blog_date',
    array(
      'label' => 'Date of most recent blog post',
      'section' => 'blog',
      'type' => 'text',
      'priority' => 2
    )
  );

  // URL
  $wp_customize->add_setting(
    'recent_blog_url',
    array()
  );

  $wp_customize->add_control(
    'recent_blog_url',
    array(
      'label' => 'URL for most recent blog post',
      'section' => 'blog',
      'type' => 'text',
      'priority' => 3
    )
  );

  // Image
  $wp_customize->add_setting(
    'recent_blog_img',
    array()
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'recent_blog_img',
      array(
        'label' => 'Image from most recent blog post',
        'section' => 'blog',
        'settings' => 'recent_blog_img'
      )
    )
  );

  /**
   * Remove unneeded sections
   */
  $wp_customize->remove_section( 'title_tagline');
  $wp_customize->remove_section( 'nav');
  $wp_customize->remove_section( 'static_front_page');

}
add_action('customize_register', 'ednc_customizer_settings');
