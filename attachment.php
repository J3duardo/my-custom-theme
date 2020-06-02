<?php get_header() ?>
  <!-- Contenido principal -->
  <section id="content">
    <div class="content-wrap">    
      <div class="container clearfix">

        <!-- Contenido del attachment -->  
        <div class="postcontent nobottommargin clearfix">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : ?>
              <?php the_post() ?>

              <!-- Attachment -->
              <div class="single-post nobottommargin">
                <div class="entry clearfix">
                  <!-- Título del attachment-->
                  <div class="entry-title">
                    <h2><?php the_title()?></h2>
                  </div>
    
                  <!-- Contenido del attachment -->
                  <div class="entry-content notopmargin">
                    <a href="<?php echo $post->guid ?>">Download Resource</a>
                    <?php the_content()?>
                    <div class="clear"></div>
                  </div>
                </div>

                <div class="line"></div>
    
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