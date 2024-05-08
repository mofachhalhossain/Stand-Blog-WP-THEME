<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php
            if( is_active_sidebar( 'top-footer' ) ): ?>
            <div class="top-footer">
                <?php dynamic_sidebar( 'top-footer' ); ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
            <?php
            if( is_active_sidebar( 'bottom-footer' ) ): ?>
            <div class="bottom-footer">
                <?php dynamic_sidebar( 'bottom-footer' ); ?>
            </div>
            <?php endif; ?>
            <p><?php bloginfo('name'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>