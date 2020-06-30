<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php ewd_meta_tags(); ?>
	<title>
		<?php ewd_title(); ?>
	</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	<?php
	// stuff we wanna call before wp_head
	ewd_pre_wp_head();
	// call the wp_head stuff
	wp_head();
	// stuff we wana call after wp_head
	ewd_post_wp_head();
	?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->

<!-- Website developed by http://www.echowebdynamics.com -->
</head>
<body <?php body_class(); ?>>
	<div id="wrapper">
		<div id="header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-4">
						<div id="identity">
							<a href="<?php bloginfo('url'); ?>">
								<img src="<?php echo get_template_directory_uri(''); ?>/images/logo.png" alt="<?php echo bloginfo('name'); ?>"  class="img-fluid"/>
							</a>
						</div>
					</div>
					<div class="col-md-8">
						<?php
						get_template_part('part/theme', 'navigation');
						?>
					</div>
				</div>
			</div> <!-- end #header .container -->
		</div> <!-- end #header -->
		<hr>
		<?php if (is_front_page()): ?>
		<div id="slideshow">
			<div class="container">
				<div class="row">
					<?php get_template_part('part/flexslider'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div id="content">
			<div class="container">