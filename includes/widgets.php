<?php 
  function my_theme_widgets() {
    register_sidebar(array(
      "name" => __("My First Sidebar", "my-custom-theme"),
      "id" => "sidebar",
      "description" => __("Simple Sidebar for My Custom Theme", "my-custom-theme"),
      "before_widget" => '<div id="%1$s" class="widget clearfix %2$s">',
      "after_widget" => "</div>",
      "before_title" => "<h4>",
      "after_title" => "</h4>"
    ));
  }