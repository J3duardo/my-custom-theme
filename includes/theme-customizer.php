<?php
  function my_theme_customize_register($wp_customize) {
    // Agregar panel en el customizer
    $wp_customize->add_panel("my-custom-theme", array(
      "title" => __("My Custom Theme Settings", "my-cutom-theme"),
      "description" => "<p>My Custom Theme Settings</p>",
      "priority" => 150
    ));

    // Funcionalidad para generar settings del customizer
    include(get_theme_file_path("/includes/theme-customizer-settings/customizer-settings.php"));

    // Generar links a redes sociales especificadas en el customizer
    social_links($wp_customize);
    // Generar settings genéricos en el theme customizer
    misc_customizer_settings($wp_customize);
  }