<?php
  // Setup
  define("DEV_MODE", true);

  // Includes
  include(get_theme_file_path("/includes/front/enqueue.php"));
  include(get_theme_file_path("/includes/setup.php"));
  include(get_theme_file_path("/includes/custom-nav-walker.php"));
  include(get_theme_file_path("/includes/widgets.php"));

  // Hooks
  add_action("wp_enqueue_scripts", "my_theme_files");
  add_action("after_setup_theme", "setup_theme");
  add_action("widgets_init", "my_theme_widgets");

  // Shortcodes