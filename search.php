<?php get_header() ?>

<!-- Título de la página -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php _e("Search Results for: ", "my_custom_theme")?><?php the_search_query()?></h1>
  </div>
</section>

<!-- Contenido principal -->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div class="postcontent nobottommargin clearfix">
        <!-- Cuadro de búsqueda -->
        <div class="col_full card">
          <div class="card-header"><?php _e("What are you searhing for today?", "my_custom_theme")?></div>
          <div class="card-body">
            <!-- Generar el formulario de búsqueda a partir del template searchform.php -->
            <?php get_search_form() ?>
          </div>
        </div>

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
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <?php get_sidebar() ?>
    </div>
  </div>
</section>

<?php get_footer() ?>