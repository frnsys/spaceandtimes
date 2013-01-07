<?php get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<h1 class="results-title"><span><?php printf( __( 'Results for: <b>%s</b>', 'spaceandtimes' ), '<span>' . get_search_query() . '</span>' ); ?></span></h1>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

				<article class="post">
					<header>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<div class="meta">
							<h6><?php the_time('F j Y'); ?></h6>
						</div>
					</header>
					<div class="post-content">
						<?php the_excerpt(); ?> 
					</div>
				</article>

				<?php endwhile; ?>

			<?php else : ?>

				<div class="no-dice">
					<h1>NO DICE.</h1>
					<h5>Try again?</h5>
					<?php get_search_form(); ?>
				</div>

			<?php endif; ?>

		</div>

<?php get_footer(); ?>