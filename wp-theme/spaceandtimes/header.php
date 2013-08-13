<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>Space & Times</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/syntax.css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>

<script type="text/javascript" src="//use.typekit.net/lwz6fep.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body>

	<div class="overlay">
		<?php get_search_form(); ?>
	</div>

	<!-- gift wrapped -->
	<div class="shell">

	<header class="primary">
		<a href="/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" class="id">
			<h1>
				<span>Space & Times</span>
				<hr>
			</h1>
		</a>
		<nav>
			<ul>
				<li class="portfolio"><a href="http://frnsys.com">portfolio</a></li>
				<li class="twitter"><a href="http://twitter.com/frnsys">twitter</a></li>
				<li class="search">search</li>
			</ul>
		</nav>

		
<?php if(have_posts()) : ?>
	<ul class="shortcuts">
		<li>
			<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div class="input-wrapper">
					<input type="text" class="field" name="s" id="s" placeholder="Search..." />
				</div>
				<input type="submit" class="submit" name="submit" id="searchsubmit" value="Go!" />
			</form>
		</li>
	  <?php while(have_posts()) : the_post(); ?>

	  	<li><a href="#<?php echo preg_replace("/[^A-Za-z0-9]/", '', get_the_title()); ?>"><?php the_title(); ?></a></li>

	  <?php endwhile; ?>

    <li class="shortcut-pages">
			<?php posts_nav_link(' ','<div class="prev">&larr; Prev</div>', '<div class="next">Next &rarr;</div>'); ?>
    </li>

	</ul>
<?php endif; ?>
	</header>

	<div role="main" class="main">
		<div class="content">
			
