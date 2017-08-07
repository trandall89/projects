<!DOCTYPE html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<style type="text/css">
		#abf{
			background: #222 url("<?php bloginfo('template_url');?>/assets/img/bg.jpg") no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<div id="abf">
		<header>
			<nav class="expanded-nav cool-nav hidden" id="main-nav">
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
		</header>