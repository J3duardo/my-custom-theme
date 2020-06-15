<!-- Footer -->
    <footer id="footer" class="dark">
      <!-- Copyright -->
      <div id="copyrights">
        <div class="container clearfix">
          <div class="col_half">
          <?php echo get_theme_mod("footer_copyright_text")?><br>
            <div class="copyright-links">
              <?php if(get_theme_mod("footer_tos_page")) : ?>
                <a href="<?php the_permalink(get_theme_mod("footer_tos_page"))?>">Terms of Use</a>
              <?php endif ?>
              <?php if(get_theme_mod("footer_privacy_page")) : ?>
                <a href="<?php the_permalink(get_theme_mod("footer_privacy_page"))?>">Privacy Policy</a>
              <?php endif ?>
            </div>
          </div>
          <div class="col_half col_last tright">
            <div class="fright clearfix">
              <a href="#" class="social-icon si-small si-borderless si-facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
              </a>
              <a href="#" class="social-icon si-small si-borderless si-twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
              </a>
            </div>
            <div class="clear"></div>
            <i class="icon-envelope2"></i> <?php echo get_theme_mod("email_address_handler")?> <span class="middot">&middot;</span>
            <i class="icon-headphones"></i> <?php echo get_theme_mod("phone_handler")?>
          </div>
        </div>
      </div>
    </footer>

    <!-- Botón go to top -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScript externo -->
    <!-- <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/functions.js"></script> -->

    <?php wp_footer() ?>
  </body>
</html>