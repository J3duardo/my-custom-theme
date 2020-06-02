<?php
  function setup_theme() {
    // Registrar menú principal de navegación
    register_nav_menu("primary", __("Primary Menu", "my-custom-theme"));
    // Registrar menú secundario de navegación
    register_nav_menu("secondary", __("Secondary Menu", "my-custom-theme"));
    // Agregar soporte para imagen destacada (post thumbnail)
    add_theme_support("post-thumbnails");
    // Generar la etiqueta title con el título de cada página
    add_theme_support("title-tag");
    // Generar el logo del sitio (el logo especificado en el customizer)
    add_theme_support("custom-logo");

    // Registrar los ads generados mediante el plugin WP Quads
    if(function_exists("quads_register_ad")) {
      quads_register_ad(array(
        "location" => "my_custom_theme_header",
        "description" => "My Custom Theme Header Position"
      ));
    }
  }
