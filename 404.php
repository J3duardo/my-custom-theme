<?php get_header() ?>

<!-- Título -->
<section id="page-title">
  <div class="container clearfix">
    <h1><?php __("Page Not Found", "my-custom-theme")?></h1>
  </div>
</section>

<!-- Contenido -->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">
      <div class="col_half nobottommargin">
        <div class="error404 center display-1">404</div>
      </div>
      <div class="col_half nobottommargin col_last">
        <div class="heading-block nobottomborder">
          <h4><?php _e("Ooopps! The Page you were looking for, couldn't be found.", "my-custom-theme")?></h4>
          <span><?php _e("Try searching for the best match or browse the links below:", "my-custom-theme")?></span>
        </div>
        <?php get_search_form()?>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>