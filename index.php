<?php get_header() ?>
  <!-- Contenido principal-->
  <section id="content">
    <div class="content-wrap">
      <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
        <div>
          <div class="container clearfix">
            <span class="badge badge-danger bnews-title">Breaking News:</span>

            <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false"
              data-pagi="false">
              <div class="flexslider">
                <div class="slider-wrap">
                  <div class="slide">
                    <a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></a>
                  </div>
                  <div class="slide">
                    <a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></a>
                  </div>
                  <div class="slide">
                    <a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container clearfix">
        <!-- Contenido del post -->
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