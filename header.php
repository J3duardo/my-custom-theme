<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head() ?>
  </head>

  <body <?php body_class("stretched no-transition") ?>>
    <div id="wrapper" class="clearfix">
      <!-- Top Bar -->
      <div id="top-bar" class="bg-dark">
        <div class="container clearfix">
          <div class="col_half nobottommargin">
            <!-- Top Links -->
            <div class="top-links">
              <!-- Menú de navegación secundario -->
              <?php
                if(has_nav_menu("secondary")) {
                  wp_nav_menu(array(
                    "theme_location" => "secondary",
                    "container" => false,
                    "fallback_cb" => "false",
                    "depth" => 1,
                  ));
                }
              ?>
            </div>
          </div>

          <div class="col_half fright col_last nobottommargin">
            <!-- Top Social -->
            <div id="top-social">
              <ul>
                <!-- Links a redes sociales especificados en el customizer -->
                <?php if(get_theme_mod("facebook_handler")) : ?>
                  <li>
                    <a href="<?php echo get_theme_mod("facebook_handler")?>" class="si-facebook">
                      <span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo get_theme_mod("twitter_handler")?>" class="si-twitter">
                      <span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo get_theme_mod("instagram_handler")?>" class="si-instagram">
                      <span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span>
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo get_theme_mod("phone_handler")?>" class="si-call">
                      <span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text"><?php echo get_theme_mod("phone_handler")?></span>
                    </a>
                  </li>
                  
                  <li>
                    <a href="<?php echo get_theme_mod("email_address_handler")?>" class="si-email3">
                      <span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text"><?php echo get_theme_mod("email_address_handler")?></span>
                    </a>
                  </li>
                <?php endif ?>     
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Header -->
      <header id="header" class="sticky-style-2">
        <div class="container clearfix">
          <!-- Logo -->
          <div id="logo">
            <?php if(has_custom_logo()) : ?>
              <?php the_custom_logo()?>
              <?php else : ?>
                <a href="<?php echo site_url('/')?>" class="standard-logo"><?php bloginfo("name")?></a>                
            <?php endif ?>
          </div>

          <!-- Generar los ads mediante el plugin WP Quads -->
          <!-- <div class="top-advert">
            <?php
              // if(function_exists("quads_ad")) {
              //   echo quads_ad(array("location" => "my_custom_theme_header"));
              // }
            ?>
          </div> -->
        </div>

        <div id="header-wrap">
          <!-- Navegación principal-->
          <nav id="primary-menu" class="style-2">
            <div class="container clearfix">
              <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
              <!-- Menú de navegación principal -->
              <?php
                if(has_nav_menu("primary")) {
                  wp_nav_menu(array(
                    "theme_location" => "primary",
                    "container" => false,
                    "fallback_cb" => "false",
                    "depth" => 4,
                    // "walker" => new Custom_Nav_Walker()
                  ));
                }
              ?>

              <!-- Shopping Cart -->
              <div id="top-cart">
                <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                <div class="top-cart-content">
                  <div class="top-cart-title">
                    <h4>Shopping Cart</h4>
                  </div>
                  <div class="top-cart-items">
                    <div class="top-cart-item clearfix">
                      <div class="top-cart-item-image">
                        <a href="#"><img src="images/shop/small/1.jpg" /></a>
                      </div>
                      <div class="top-cart-item-desc">
                        <a href="#">Blue Round-Neck Tshirt</a>
                        <span class="top-cart-item-price">$19.99</span>
                        <span class="top-cart-item-quantity">x 2</span>
                      </div>
                    </div>
                    <div class="top-cart-item clearfix">
                      <div class="top-cart-item-image">
                        <a href="#"><img src="images/shop/small/6.jpg" /></a>
                      </div>
                      <div class="top-cart-item-desc">
                        <a href="#">Light Blue Denim Dress</a>
                        <span class="top-cart-item-price">$24.99</span>
                        <span class="top-cart-item-quantity">x 3</span>
                      </div>
                    </div>
                  </div>
                  <div class="top-cart-action clearfix">
                    <span class="fleft top-checkout-price">$114.95</span>
                    <button class="button button-3d button-small nomargin fright">
                      View Cart
                    </button>
                  </div>
                </div>
              </div>

              <!-- barra de búsqueda superior -->
              <div id="top-search">
                <a href="#" id="top-search-trigger">
                  <i class="icon-search3"></i><i class="icon-line-cross"></i>
                </a>
                <form action="#" method="get">
                  <input type="text" name="q" class="form-control" placeholder="Type &amp; Hit Enter.." value="">
                </form>
              </div>
            </div>
          </nav>
        </div>
      </header>