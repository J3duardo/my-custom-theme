<?php
  function my_theme_customize_register($wp_customize) {
    // Funcionalidad para generar settings del customizer
    include(get_theme_file_path("/includes/theme-customizer-settings/customizer-settings.php"));

    // Generar links a redes sociales especificadas en el customizer
    social_links($wp_customize);
    // Generar settings genéricos en el theme customizer
    misc_customizer_settings($wp_customize);
  }