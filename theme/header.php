<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">		

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- header -->
		<div class="container" id="container-header">
			<div class="row header-row">
				<header class="header clear col-xs-12" role="banner">			
					<!-- logo -->
					<div class="top-header">						
						<a class="logo" href="<?php echo home_url(); ?>">							
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/endlogo.png" alt="Logo" class="logo-img"> -->
						</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<div class="navbar">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php html5blank_nav(); ?>
						</div><!-- /nav -->						
					</div>

				</header><!-- /header -->
			</div><!-- /row -->
		</div><!-- header-container -->
