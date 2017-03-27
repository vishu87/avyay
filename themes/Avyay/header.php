<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<title><?php if(defined('PAGE_TITLE')) echo PAGE_TITLE.' | '; else wp_title( '|', true, 'right' ); ?> Avyay Technologies</title>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="logo">
						<a href="<?php echo get_home_url();?>">
							<img src="<?php echo get_template_directory_uri();?>/img/logo.png">
						</a>
					</div>
				</div>
				<div class="col-md-7">
					<nav class="header-menu">
						<?php $primary_menu = wp_nav_menu(array('theme_location'=>'primary-menu', 'echo'=>false)); ?>
						<?php echo preg_replace('/\n/', '', $primary_menu) ?>
					</nav>
				</div>
				<div class="col-md-2">
					<div class="search" id="search-icon">
						<a href="javascript:;">
							<i class="fa fa-search"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="search-div">
			<div class="container">
				<div class="form-div">
					<?php echo get_search_form("search for...");?>
				</div>
			</div>
		</div>
	</header>
	<main>
