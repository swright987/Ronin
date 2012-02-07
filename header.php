<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title><?php bloginfo( 'name' ); ?><?php wp_title ( '|', true,'right' ); ?></title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
<?php   wp_head(); ?>
</head>
<body>
	<header role="banner" class="container">
		<h1><a href="<?php echo get_option( 'home' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</header>
	<nav role="navigation">
		<?php 
		wp_nav_menu( 
			array( 
				'sort_column' => 'menu_order', 
				'container' => false, 
				'container_class' => '',
				'theme_location' => 'primary-menu',
				'items_wrap' => '<ul>%3$s</ul>'
			)
		); ?>
	</nav>
