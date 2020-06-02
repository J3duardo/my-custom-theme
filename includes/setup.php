<?php
  function setup_theme() {
    register_nav_menu("primary", __("Primary Menu", "my-custom-theme"));
    add_theme_support("post-thumbnails");
  }