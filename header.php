<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Index page">
  	<meta name="keywords" content="HTML, CSS, JavaScript">
  	<meta name="author" content="Alma Reb">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="header_bg">
			<div class="container header">
				<a href="<?php bloginfo('url'); ?>">
					<i class="icon-logo"></i>
				</a>
				<nav>
					<?php wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => 'ul',
					'menu_class' => 'zako',
					
						));
					?>
				</nav>
				<div>
					<?php echo do_shortcode('[language-switcher]'); ?>
				</div>
				<div class="topnav">
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					</a>
					<div id="myLinks">
						<?php wp_nav_menu(array(
							'theme_location' => 'primary',
							'container' => 'ul',
							
								));
						?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- slider start -->