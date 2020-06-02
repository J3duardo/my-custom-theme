<?php get_header() ?>

<!-- Título de la página de categoría -->
<section id="page-title">
  <div class="container clearfix">
    <h1 class="text-dark"><?php the_archive_title()?></h1>
    <span class="text-secondary"><?php the_archive_description()?></span>
  </div>
</section>

<!-- Contenido principal-->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div class="postcontent nobottommargin clearfix">
        
        <!-- Posts de la categoría correspondiente -->
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