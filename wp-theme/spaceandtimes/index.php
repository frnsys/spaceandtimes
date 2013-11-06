<?php if ( !is_archive() && !is_category() ) {
    global $query_string;
    query_posts( $query_string . '&cat=-2' );
} ?>

<?php get_header(); ?>
 
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <article class="post">
			<header>
				<h2><a href="<?php the_permalink(); ?>" name="<?php echo preg_replace("/[^A-Za-z0-9]/", '', get_the_title()); ?>"><?php the_title(); ?></a></h2>
				<div class="meta">
					<h6>By <?php echo the_author_meta('first_name'); ?> on <?php the_time('F j Y'); ?></h6>
				</div>
			</header>
			<div class="post-content">
        <?php if ( is_archive() && !is_category() ) {
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

