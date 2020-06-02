<?php

  //Procesar los estilos y los scripts de todo el theme
  function my_theme_files() {
    $uri = get_theme_file_uri();
    $version = DEV_MODE ? time() : false;

    // Registrar los estilos
    wp_register_style("google-fonts", "https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i", [], $version);
    wp_register_style("bootstrap-styles", $uri . "/files/css/bootstrap.css", [], $version);
    wp_register_style("main-styles", $uri . "/files/css/style.css", [], $version);
    wp_register_style("font-icons", $uri . "/files/css/font-icons.css", [], $version);
    wp_register_style("animate", $uri . "/files/css/animate.css", [], $version);
    wp_register_style("magnific-popup", $uri . "/files/css/magnific-popup.css", [], $version);
    wp_register_style("responsive", $uri . "/files/css/responsive.css", [], $version);
    wp_register_style("custom", $uri . "/files/css/custom.css", [], $version);

    // Procesar los estilos
    wp_enqueue_style("google-fonts");
    wp_enqueue_style("bootstrap-styles");
    wp_enqueue_style("main-styles");
    wp_enqueue_style("font-icons");
    wp_enqueue_style("animate");
    wp_enqueue_style("magnific-popup");
    wp_enqueue_style("responsive");
    wp_enqueue_style("custom");


    // Registrar scripts (Tercer arg: dependencias, cuarto arg: versión, quinto arg: true = cargar los scripts al final del dom)
    wp_register_script("theme-plugins", $uri . "/files/js/plugins.js", [], false, true);
    wp_register_script("theme-functions", $uri . "/files/js/functions.js", [], false, true);

    // Procesar scripts
    wp_enqueue_script("jquery"); // Wordpress registra jquery por defecto
    wp_enqueue_script("theme-plugins");
    wp_enqueue_script("theme-functions");

  }