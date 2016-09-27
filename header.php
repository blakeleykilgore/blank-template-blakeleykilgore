<!DOCTYPE html>
<html>
	<head>
		<title>Blakeley Kilgore WordPress Template</title>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	</head>
	<body>
		<div class="container">
			<header class="row">
				<div class="nine columns">
					<h1><a href="<?php $url = home_url('/'); echo $url; ?>"><?php bloginfo('name'); ?></a></h1>
          <p><?php bloginfo('description'); ?></p>
				</div>
				<!-- Add Search Form -->
				<div class="three columns">
					<?php get_search_form(); ?>
				</div>
			</header>
			<!-- Add Menu Here -->
			<div class="row">
				<div class="twelve columns">
					<?php wp_nav_menu(array(
						'sort_column' => 'menu_order',
						'container_class' => 'blank-menu-header'
						));?>
				</div>
			</div>
