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
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	wp_head();
?>
</head>

<body>

	<div class="overlay">
		<?php get_search_form(); ?>
	</div>

	<header class="primary">
		<a href="/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/id.png" class="id">
			<h1>
				<span>Space & Times</span>
				<hr>
			</h1>
		</a>
		<nav>
			<ul>
				<li class="portfolio"><a href="http://supermedes.com">portfolio</a></li>
				<li class="twitter"><a href="http://twitter.com/spaceandtimes">twitter</a></li>
				<li class="search">search</li>
			</ul>
		</nav>
	</header>

	<div role="main" class="main">
		<div class="content">
			
