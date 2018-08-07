<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página agregada por el CMS -->
	<?php if ( have_posts() ) : the_post(); ?>
		<div class="col-md-8 col-lg-9">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			</div>
			<?php endif; ?>
			
		<!-- Archivo de barra lateral por defecto -->
		<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>