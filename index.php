
<?php get_header(); ?>

  <div class="blog-main">
    <div class="main-blog-row">
		  <div class="main-col-left">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?><!-- contents of the loop -->
          <?php endwhile ?><?php endif ?>
          <nav>
	          <ul class="pager">
		          <li><?php next_posts_link( 'Previous' ); ?></li>
		          <li><?php previous_posts_link( 'Next' ); ?></li>
	          </ul>
          </nav>
      </div><!-- main-col-left -->
      <div class="main-col-right">
        <?php get_sidebar(); ?>
      </div><!-- main-col-right -->
    </div><!-- /.row -->
  </div> <!-- /.blog-main -->

<?php get_footer(); ?>

