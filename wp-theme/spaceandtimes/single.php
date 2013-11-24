<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<article class="post single-post">
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div class="meta">
				<h6><?php the_time('F j Y'); ?></h6>
			</div>
			<hr>
			<h6 class="author">By <?php echo the_author_meta('first_name'); ?></h6>
		</header>
		<div class="post-content">
      <?php if ( is_category() || is_archive() ) {
					the_excerpt();
				} else { ?>
          <?php the_content(); ?>
			<?php } ?>
		</div>

        <a href="https://twitter.com/frnsys"><div class="say-hello">
            <?php $prompts = array('Say hello:', 'What did you think?', 'Comments?', 'Thanks for reading!'); ?>
            <em><?php echo $prompts[array_rand($prompts)]; ?> <span class="twitter-handle">@frnsys</span</em>
        </div></a>

		<div class="separator">
			<img src="<?php echo get_template_directory_uri(); ?>/images/separator.png">
		</div>
	</article>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>