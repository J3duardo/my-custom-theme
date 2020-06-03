<?php
  // Generar links a redes sociales especificadas en el customizer
  function social_links($wp_customize) {
    // Crear nuevos settings para guardar en la base de datos los links de redes sociales
    $wp_customize->add_setting("facebook_handler", array(
      "default" => ""
    ));
    $wp_customize->add_setting("twitter_handler", array(
      "default" => ""
    ));
    $wp_customize->add_setting("instagram_handler", array(
      "default" => ""
    ));
    $wp_customize->add_setting("phone_handler", array(
      "default" => ""
    ));
    $wp_customize->add_setting("email_address_handler", array(
      "default" => ""
    ));


    // Crear sección en el menú customizer con los nuevos settings correspondientes a las redes sociales
    $wp_customize->add_section("social_section", array(
      "title" => __("Social Settings", "my-custom-theme"),
      "priority" => 40
    ));


    // ----------- Crear campos en la nueva sección para agregar los links a redes sociales ----------- //
    // Campo para agregar link a facebook
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "social_facebook_input", array(
      "label" => __("Facebook Handler", "my-custom-theme"),
      "section" => "social_section",
      "settings" => "facebook_handler",
      "type" => "text"
    )));
    // Campo para agregar link a twitter
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "social_twitter_input", array(
      "label" => __("Twitter Handler", "my-custom-theme"),
      "section" => "social_section",
      "settings" => "twitter_handler",
      "type" => "text"
    )));
    // Campo para agregar link a instagram
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "social_instagram_input", array(
      "label" => __("Instagram Handler", "my-custom-theme"),
      "section" => "social_section",
      "settings" => "instagram_handler",
      "type" => "text"
    )));
    // Campo para agregar número de teléfono
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "social_phone_input", array(
      "label" => __("Phone Handler", "my-custom-theme"),
      "section" => "social_section",
      "settings" => "phone_handler",
      "type" => "text"
    )));
    // Campo para agregar dirección de correo electrónico
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "social_email_input", array(
      "label" => __("Email Handler", "my-custom-theme"),
      "section" => "social_section",
      "settings" => "email_address_handler",
      "type" => "text"
    )));
  }


  // Settings genéricos del theme customizer
  function misc_customizer_settings($wp_customize) {
    // Settings
    $wp_customize->add_setting("header_show_search", array(
      "default" => "Yes"
    ));
    $wp_customize->add_setting("header_show_cart", array(
      "default" => "Yes"
    ));
    $wp_customize->add_setting("footer_copyright_text", array(
      "default" => "Copyright &copy; 2020 All Rights Reserved"
    ));
    $wp_customize->add_setting("footer_tos_page", array(
      "default" => 0
    ));
    $wp_customize->add_setting("footer_privacy_page", array(
      "default" => 0
    ));


    // Sección
    $wp_customize->add_section("misc_section", array(
      "title" => __("Theme Misc Settings", "my-custom-theme"),
      "priority" => 40
    ));


    // Controllers
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "header_show_search_input", array(
      "label" => __("Show Search Button in Header", "my-custom-theme"),
      "section" => "misc_section",
      "settings" => "header_show_search",
      "type" => "checkbox",
      "choices" => array(
        "yes" => "Yes"
      )
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "header_show_shopping_cart", array(
      "label" => __("Show Shoping Cart in Header", "my-custom-theme"),
      "section" => "misc_section",
      "settings" => "header_show_cart",
      "type" => "checkbox",
      "choices" => array(
        "yes" => "Yes"
      )
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "footer_show_copyright_text", array(
      "label" => __("Footer Copyright Text", "my-custom-theme"),
      "section" => "misc_section",
      "settings" => "footer_copyright_text",
      "type" => "text"
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "footer_set_tos_page", array(
      "label" => __("Footer TOS Page", "my-custom-theme"),
      "section" => "misc_section",
      "settings" => "footer_tos_page",
      "type" => "dropdown-pages"
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, "footer_set_privacy_page", array(
      "label" => __("Footer Privacy Policy Page", "my-custom-theme"),
      "section" => "misc_section",
      "settings" => "footer_privacy_page",
      "type" => "dropdown-pages"
    )));
  }