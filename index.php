<?php get_header() ?>
  <!-- Contenido principal-->
  <section id="content">
    <div class="content-wrap">
      <!-- Chequear que la página sea el home -->
      <?php if(!is_single() && is_home() && function_exists("wpp_get_mostpopular") && get_theme_mod("show_header_popular_posts")) : ?>
        <!-- Mostrar en el slider del header los posts más populares -->
        <?php
          wpp_get_mostpopular(array(
            "wpp_start" => '<div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                              <div>
                                <div class="container clearfix">
                                  <span class="badge badge-danger bnews-title">' . get_theme_mod("popular_posts_widget_title") . '</span>
                                  <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
                                    data-pagi="false">
                                    <div class="flexslider">
                                      <div class="slider-wrap">',
            "wpp_end" => '</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>',
            "post_html" => '<div class="slide"><a href={url}><strong>{text_title}</strong></a></div>'
          ));
        ?>
      <?php endif?>

      <!-- Contenido del post -->
      <div class="container clearfix">
        <div class="postcontent nobottommargin clearfix">
          <!-- Posts -->
          <div id="posts">
            <?php if(have_posts()) : ?>
              <?php while(have_posts()) : ?>
                <?php
                  the_post();
                  get_template_part("template-parts/post/content", "excerpt");
                ?>
              <?php endwhile ?>
            <?php endif ?>
          </div>

          <!-- Paginación -->
          <div class="row mb-3">
            <div class="col-12">
              <?php previous_posts_link("&larr; Newer") ?>
              <?php next_posts_link("Older &rarr;") ?>
              <!-- <a href="#" class="btn btn-outline-secondary float-left">
                &larr; Older
              </a>
              <a href="#" class="btn btn-outline-dark float-right">
                Newer &rarr;
              </a> -->
            </div>
          </div>
        </div>

        <!-- Sidebar -->
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer() ?>