<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>" style="margin-top: 0 !important;">
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="keywords" content="////Esto va a depender del cliente////" />
	<meta name="author" content="Enrique Valerio" />
	<!-- FAVICONS -->
	<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
	<!-- CSS Core -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/app.min.css">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">

		<!-- NAVBAR -->
		<nav class="navbar navbar-default nav navbar-nav main-navbar-nav navegador">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
					<span class="sr-only">Moviles</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="<?php bloginfo('url') ?>/index.php" class="navbar-brand">
					<img src="<?php bloginfo('template_url') ?>/assets/img/logo/bravana-lite-logo.png" alt="Bravana Logo">
				</a>

				<div id="main-nav-collapse" class="collapse navbar-collapse navegacion-01">
					<div>
						<?php wp_nav_menu(
							array( 

								'container' =>false,
								'intems_wrap' => '<ul id=menu-top">%3$s</ul>',
								'theme_location' => 'menu'
								
								)); ?>
							</div>
						</div>
						<!-- END MAIN NAVIGATION -->
					</div>
				</nav>
				<!-- Fin NAVBAR -->

				
	    <!-- ***********************************************************
	    	**************************************************************
	    <nav class="navbar navbar-default" role="navigation">
	    	<div class="container"> -->    		
		    	<!-- El logotipo y el icono que despliega el menú se agrupan
		    		para mostrarlos mejor en los dispositivos móviles -->

					<!-- <div class="navbar-header">
					
						<button type="button" class="navbar-toggle" data-toggle="collapse"
						        data-target=".navbar-ex1-collapse">
						  <span class="sr-only">Móvil</span>
						  <i class="fa fa-bars"></i>
						</button>
								
					</div> -->

					<!-- Agrupar los enlaces de navegación, los formularios y cualquier
						otro elemento que se pueda ocultar al minimizar la barra -->

					<!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="main-nav">
						  <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
						</ul>
						<hr class="visible-xs">
						<hr class="visible-xs" -->
						<!-- Buscador -->
						<!-- <div class="buscador pull-right">
						    <?php get_search_form();?>
						</div>
					</div>
				</div>
			</nav> -->
			<span class="ir-arriba fa fa-angle-up"></span>
			<div class="page-content">
				<div class="container">
					<div class="row">
						<!-- De aquí en adelante contenido del sitio -->
