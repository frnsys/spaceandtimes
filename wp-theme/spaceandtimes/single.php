<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<article class="post single-post">
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="meta">
				<h6><?php the_time('F j Y'); ?></h6>
			</div>
			<hr>
		</header>
		<div class="post-content">
      <?php if ( is_category() || is_archive() ) {
					the_excerpt();
				} else { ?>
          <?php the_content(); ?>
			<?php } ?>
		</div>

		<div class="separator">
			<img src="<?php echo get_template_directory_uri(); ?>/images/separator.png">
		</div>
	</article>

		<nav class="single-pages">
			<?php previous_post_link( '%link', __( '<div class="prev"><img src="'.get_template_directory_uri().'/images/arrow-l.png"><span>Prev</span></div>', 'spaceandtimes' ) ); ?>
			<?php next_post_link( '%link', __( '<div class="next"><img src="'.get_template_directory_uri().'/images/arrow-r.png"><span>Next</span></div>', 'spaceandtimes' ) ); ?>
		</nav><!-- #nav-single -->

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>