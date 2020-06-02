<!-- Sidebar -->
<div class="sidebar nobottommargin col_last">
  <div class="sidebar-widgets-wrap">
    <?php
      if(is_active_sidebar("sidebar")) {
        dynamic_sidebar("sidebar");
      }
    ?>
  </div>
</div>