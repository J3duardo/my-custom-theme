<?php
  // Declarar template para visualizar las páginas en full width sin el side bar
  /*
    Template Name: Full Width Page
    Template Post Type: post, page
  */

  get_header();
?>

<!-- Título de la página -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php single_post_title()?></h1>
    <span>
      <?php
        if(function_exists("the_subtitle")) {
          the_subtitle();
        }
      ?>
    </span>
  </div>
</section>

<!-- Contenido principal-->
<section id="content">
  <div class="content-wrap">    
    <div class="container clearfix">
      <!-- Contenido de la página -->  
      <?php while(have_posts()) : ?>
        <?php the_post() ?>
        
        <div class="single-post nobottommargin">
          <div class="entry clearfix">

            <!-- Imagen de la página  -->
            <div class="entry-image">
            <?php if(has_post_thumbnail()) : ?>
              <div class="entry-image">
                <a href="<?php echo get_the_post_thumbnail_url(null, "full") ?>" target="_blank">
                  <?php the_post_thumbnail("full")?>
                </a>
              </div>
            <?php endif ?>
            </div>

            <!-- Contenido de la página -->
            <div class="entry-content notopmargin">
              <?php the_content() ?>
            </div>
          </div>               
        </div>              
      <?php endwhile ?>
    </div>      
  </div>
</section>

<?php get_footer() ?>