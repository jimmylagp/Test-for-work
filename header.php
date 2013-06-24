<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
	<section id="wrapper">
		<div id="bar"></div>
		<section id="content">
			<header role="header">
				<h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
					</a>
				</h1>
			</header>