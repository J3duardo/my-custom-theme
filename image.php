<?php get_header() ?>
  <!-- Contenido principal del attachment tipo image-->
  <section id="content">
    <div class="content-wrap">    
      <div class="container clearfix">

        <!-- Contenido de la imagen -->  
        <div class="postcontent nobottommargin clearfix">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : ?>
              <?php the_post() ?>

              <!-- Imagen -->
              <div class="single-post nobottommargin">
                <div class="entry clearfix">
                  <!-- Título de la imagen -->
                  <div class="entry-title">
                    <h2><?php the_title()?></h2>
                  </div>
    
                  <!-- Contenido de la imagen -->
                  <div class="entry-content notopmargin">
                    <img src="<?php echo $post->guid ?>" class="img-responsive mb-2" alt="attachment">
                    <a href="<?php echo $post->guid ?>">Download Image</a>
                    <?php the_content()?>
                    <div class="clear"></div>
                  </div>
                </div>
    
                <!-- Sección de comentarios -->
                <?php
                  if(comments_open() || get_comments_number()) {
                    comments_template();
                  }
                ?>                
              </div>              
            <?php endwhile ?>
          <?php endif ?>
        </div>
      </div>
      
      <!-- Sidebar -->
      <?php get_sidebar() ?>
    </div>
  </section>

  <?php get_footer() ?>