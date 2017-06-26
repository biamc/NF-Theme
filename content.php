<div class="blog-post">

	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<!-- DISPLAY POST THUMBNAIL -->
<?php if ( has_post_thumbnail() ) {?>
	<div class="blog-row">
		<div class="col-left">
			<?php	the_post_thumbnail('thumbnail'); ?>
		</div><!-- col -->
		<div class="col-right">
			<?php the_excerpt(); ?>
		</div><!-- col -->
	</div><!-- row -->
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>

	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

<!-- DISPLAY COMMENTS -->
	<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
	</a>
	</div><!-- /.blog-post -->