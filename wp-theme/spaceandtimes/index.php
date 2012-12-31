<?php get_header(); ?>

	<ul class="shortcuts">
		<li>
			<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-wrapper">
					<input type="text" class="field" name="s" id="s" placeholder="Search..." />
				</div>
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Go!" />
			</form>
		</li>
	  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

	  	<li><a href="#<?php echo preg_replace("/[^A-Za-z0-9]/", '', get_the_title()); ?>"><?php the_title(); ?></a></li>

	  <?php endwhile; ?>
    <?php endif; ?>

    <li class="shortcut-pages">
			<?php posts_nav_link(' ','<div class="prev">&larr; Prev</div>', '<div class="next">Next &rarr;</div>'); ?>
    </li>

	</ul>
 
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <article class="post">
			<header>
				<h2><a href="<?php the_permalink(); ?>" name="<?php echo preg_replace("/[^A-Za-z0-9]/", '', get_the_title()); ?>"><?php the_title(); ?></a></h2>
				<div class="meta">
					<h6><?php the_time('F j Y'); ?></h6>
				</div>
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

		<?php endwhile; ?>

		<nav class="pages">
			<?php posts_nav_link(' ','<div class="prev">&larr; Prev</div>', '<div class="next">Next &rarr;</div>'); ?>
    </nav>

    <?php endif; ?>
<?php get_footer(); ?>

