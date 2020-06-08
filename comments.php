<?php
  // Chequear si el usuario está autenticado para permitirle comentar el post
  if(post_password_required()) {
    return;
  }
?>

<div id="comments" class="clearfix">
  <h3 id="comments-title"><span><?php comments_number()?></span></h3>

  <!-- Mostrar comentarios -->
  <ol class="commentlist clearfix">
    <!-- Loopear a través de la variabe global $comments para extraer los comentarios del post -->
    <?php foreach($comments as $comment) : ?>
      <li class="comment even thread-even depth-1" id="li-comment-1">
        <div id="comment-1" class="comment-wrap clearfix">
          <div class="comment-meta">
            <div class="comment-author vcard">
              <!-- Mostrar el avatar del autor del comentario -->
              <span class="comment-avatar clearfix">
                <?php echo get_avatar($comment, 60, "", "", array("class" => "avatar avatar-60 photo avatar-default"))?>
              </span>
            </div>
          </div>
          <!-- Contenido del comentario -->
          <div class="comment-content clearfix">
            <!-- Autor del comentario -->
            <div class="comment-author">
              <?php comment_author() ?>
              <!-- Fecha del comentario -->
              <span><?php comment_date()?></span>
            </div>
            <!-- Texto del comentario -->
            <p><?php comment_text()?></p>
          </div>
          <div class="clear"></div>
        </div>
      </li>
    <?php endforeach ?>

    <!-- Paginación de los comentarios -->
    <?php the_comments_pagination() ?>
  </ol>
  <div class="clear"></div>

  <!-- Formulario de comentarios -->
  <div id="respond" class="clearfix">
    <?php
      comment_form(array(
        // Input para crear el comentario
        "comment_field" => '<div class="clear"></div>
                            <div class="col_full">
                              <label>Comment</label>
                              <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
                            </div>',
        // Información sobre el comentario
        // Estos campos corresponden a la información que el usuario debe completar para poder agregar el comentario en caso de no estar logueado
        "fields" => array(
          "author" => '<div class="col_one_third">
                        <label>' . __("Name", "my-custom-theme") . '</label>
                        <input type="text" name="author" class="sm-form-control" />
                      </div>',
          "email" => '<div class="col_one_third">
                        <label>' . __("Email", "my-custom-theme") . '</label>
                        <input type="text" name="email" class="sm-form-control" />
                      </div>',
          "url" => '<div class="col_one_third col_last">
                      <label>' . __("Website", "my-custom-theme") . '</label>
                      <input type="text" name="url" class="sm-form-control" />
                    </div>'
        ),
        // Clases del botón de submit
        "class_submit" => "button button-3d nomargin",
        // Texto del botón de submit
        "label_submit" => __("Submit comment", "my-custom-theme"),
        "title_reply" => __("Leave a <span>Comment</span>", "my-custom-theme")
      ));
    ?>    
  </div>
</div>