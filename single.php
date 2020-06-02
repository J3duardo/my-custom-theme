<?php get_header() ?>
  <!-- Contenido principal-->
  <section id="content">
    <div class="content-wrap">    
      <div class="container clearfix">

        <!-- Contenido del post -->  
        <div class="postcontent nobottommargin clearfix">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : ?>
              <?php
                the_post();
                global $post;
                $author_ID = $post->post_author;
                $author_URL = get_author_posts_url($author_ID);
              ?>

              <!-- Single Post -->
              <div class="single-post nobottommargin">
                <div class="entry clearfix">
                  <!-- Título del post -->
                  <div class="entry-title">
                    <h2><?php the_title()?></h2>
                  </div>
    
                  <!-- Metadata del post -->
                  <ul class="entry-meta clearfix">
                    <li><i class="icon-calendar3"></i> <?php echo get_the_date()?></li>
                    <li>
                      <a href="<?php echo $author_URL?>">
                        <i class="icon-user"></i> <?php the_author()?>
                      </a>
                    </li>
                    <li><i class="icon-folder-open"></i> <a href="#"><?php the_category(", ")?></a></li>
                    <li><a href="#"><i class="icon-comments"></i> <?php comments_number("0") ?></a></li>
                  </ul>
    
                  <!-- Imagen del post  -->
                  <div class="entry-image">
                  <?php if(has_post_thumbnail()) : ?>
                    <div class="entry-image">
                      <a href="#">
                        <?php the_post_thumbnail("full")?>
                      </a>
                    </div>
                  <?php endif ?>
                  </div>
    
                  <!-- Contenido del post -->
                  <div class="entry-content notopmargin">
                    <?php the_content() ?>

                    <!-- Paginar el post cuando se emplean page breaks en el editor para dividirlo múltiples partes -->
                    <?php
                      $defaults = array(
                        "before" => "<p class='text-center'>" . __("Pages: ", "my-custom-theme"),
                        "after" => "</p>"
                      );
                      wp_link_pages($defaults);
                    ?>
    
                    <!-- Etiquetas (tags) del post -->
                    <div class="tagcloud clearfix bottommargin">
                      <?php the_tags("", ", ") ?>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
    
                <!-- Navegación a los posts anteriores y siguientes -->
                <div class="post-navigation clearfix">
                  <div class="col_half nobottommargin">
                    <?php previous_post_link()?>
                  </div>
                  <div class="col_half col_last tright nobottommargin">
                    <?php next_post_link()?>
                  </div>
                </div>
                <div class="line"></div>
    
                <!-- Información del autor -->
                <div class="card">
                  <div class="card-header">
                    <!-- Nombre del autor -->
                    <strong>
                      Posted by <a href="<?php echo $author_URL?>"><?php the_author()?></a>
                    </strong>
                  </div>
                  <div class="card-body">
                    <div class="author-image">
                      <!-- Avatar del autor -->
                      <img src="<?php echo get_avatar($author_ID, 90, "", false, array("class" => "img-circle")) ?>" class="rounded-circle">
                      <!-- Biografía del autor. Se usa la función nl2br() para hacerla más legible -->
                    </div>
                      <?php echo nl2br(get_the_author_meta("description"))?>
                    </div>
                </div>
                <div class="line"></div>
                <h4>Related Posts:</h4>
                <div class="related-posts clearfix">
                  <div class="mpost clearfix">
                    <div class="entry-image">
                      <a href="#">
                        <img src="images/blog/small/10.jpg">
                      </a>
                    </div>
                    <div class="entry-c">
                      <div class="entry-title">
                        <h4>
                          <a href="#">
                            This is an Image Post
                          </a>
                        </h4>
                      </div>
                      <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> 10th July 2014</li>
                        <li><i class="icon-comments"></i> 12</li>
                      </ul>
                      <div class="entry-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Mollitia nisi perferendis.
                      </div>
                    </div>
                  </div>
                  <div class="mpost clearfix">
                    <div class="entry-image">
                      <a href="#"><img src="images/blog/small/20.jpg" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                      <div class="entry-title">
                        <h4><a href="#">This is a Video Post</a></h4>
                      </div>
                      <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> 24th July 2014</li>
                        <li><i class="icon-comments"></i> 16</li>
                      </ul>
                      <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Mollitia nisi perferendis.</div>
                    </div>
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
        <!-- Sidebar -->
        <?php get_sidebar() ?>
      </div>
    </div>
  </section>

  <?php get_footer() ?>