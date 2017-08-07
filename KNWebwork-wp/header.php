<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<header class="site-header">
		<nav class="expanded-nav fixed-nav hidden normal-nav" id="main-nav">
			<div class="mobile-nav-top">
				<img src="<?php bloginfo('template_url');?>/assets/img/kn-logo-nobg-blackol.png" alt="knwebwork logo"/>
				<button id="toggle-links"><img 
					src="<?php bloginfo('template_url');?>/assets/img/glyphicons-menu-hamburger.png" alt="menu"/></button>

			</div>
			<?php $args = array(
				'theme_location' => 'primary'
			);
			?>

			<?php wp_nav_menu( $args ); ?>
			<hr id="nav-underline"/>
		</nav>
		<div id="screen-is-small">
			</div>
		<div class="filler">
		</div>
		
		
	</header>