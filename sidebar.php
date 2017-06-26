        <div class="blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php the_author_meta( 'description' ); ?> </p>
            <p></p>
          </div><!-- /.sidebar-module-insert -->
          <div class="sidebar-module">
            <h4>Archives</h4>
            <ul>
	            <?php wp_get_archives( 'type=monthly' ); ?>
            </ul>
          </div><!-- /.sidebar-module -->
          <div class="sidebar-module">
            <h4>Social</h4>
            <ul>
              <li><a href="<?php echo get_option('twitter'); ?>" target="_blank">Twitter</a></li>
              <li><a href="<?php echo get_option('facebook'); ?>" target="_blank">Facebook</a></li>
              <li><a href="<?php echo get_option('instagram'); ?>" target="_blank">Instagram</a></li>
              <li><a href="<?php echo get_option('youtube'); ?>" target="_blank">Youtube</a></li>
              <li><a href="<?php echo get_option('RSS'); ?>" target="_blank">RSS</a></li>
            </ul>
          </div><!-- /.sidebar-module -->
        </div><!-- /.blog-sidebar -->