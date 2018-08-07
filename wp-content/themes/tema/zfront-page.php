<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
</div>
</div>
<!-- HERO UNIT -->
<!-- HERO UNIT -->
<section class="hero-unit hero-fullwidth fullwidth-image hero-rotating-words">
	<div class="hero-content">
		<div class="container">
			<h2 class="heading">Front-Page</h2>
			<p class="lead"><?php the_title(); ?></p>
			<a href="<php the_permalink(); ?>" class="btn btn-primary btn-lg">Leer Mas</a>
			</div>
		</div>
	</section>
	<!-- END HERO UNIT -->

	<!-- ICON INFO -->
	<section class="no-padding-bottom">
		<div class="container">
			<div class="row icon-info-group">
				<div class="col-md-4">
					<div class="icon-info icon-info-center">
						<i class="icon icon_lifesaver ico-styled-md"></i>
						<h3 class="title">Soporte</h3>
						<p>Dynamically productivate reliable action items without an expanded array.</p>
						<a href="#" class="more">Support Info <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-center">
						<i class="icon icon_cloud-download_alt ico-styled-md"></i>
						<h3 class="title">Nuevos Medios</h3>
						<p>Dynamically productivate reliable action items without an expanded array.</p>
						<a href="#" class="more">Getting an Update <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-center">
						<i class="icon icon_question_alt2 ico-styled-md"></i>
						<h3 class="title">24HR</h3>
						<p>Dynamically productivate reliable action items without an expanded array.</p>
						<a href="#" class="more">Ask a Question <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END ICON INFO -->

	<!-- Post Recientes -->
	<section>
		<div class="container">
			<h2 class="section-heading">Nuestros Ultimos Post</h2>
			<div class="row">
				<?php if (have_posts()) : ?>
					<section class="row">
						<?php while(have_posts() ) : the_post(); ?>
							<article class="col-xs-12 col-sm-4">

								<?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
								$url = wp_get_attachment_url( $post_thumbnail_id);
								?>
								
								<figure class="media">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php echo $url;?>" class="img-responsive" alt="Image Thumbnail" />
									</a>
								</figure>

								<div class="entry-content">
									
									<div class="entry-header">
										<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										<div class="meta-line">
											<span class="post-date"><i class="fa fa-calendar"></i> <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time></span>
											<?php the_category (); ?>
										</div>
									</div>

									<div class="excerpt">
										<p><?php the_excerpt(); ?></p>
										<p class="read-more">
											<a href="<?php the_permalink(); ?>" class="read-more">Leer Más</a>
										</p>
									</div>

								</div>
							</article>
						<?php endwhile; ?>
					</section>
				<?php else : ?>
					<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- Post Recientes -->

	<!-- WHAT WE DO -->
	<section>
		<div class="container">
			<h2 class="section-heading">Que Hacemos</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-info icon-info-left">
						<i class="icon icon_gift ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">DESLIZAMIENTO REVOLUCIONARIO</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-left">
						<i class="icon icon_heart_alt ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">BONITO DISEÑO</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-left">
						<i class="icon icon_lightbulb ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">DE MÚLTIPLES FINES</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-left no-margin-bottom">
						<i class="icon icon_like ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">ACTUALIZACIONES GRATUITAS & APOYO</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-left no-margin-bottom">
						<i class="icon icon_ul ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">TONELADAS DE CARACTERÍSTICAS</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-info icon-info-left no-margin-bottom">
						<i class="icon icon_genius ico-styled-md text-primary"></i>
						<div class="text">
							<h2 class="title">FLEXIBLE y FÁCIL DE USAR</h2>
							<p>Holisticly harness just in time technologies via corporate scenarios. Intrinsicly predominate ubiquitous outsourcing through an expanded array of functionalities.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END WHAT WE DO -->

	<!-- Archivo de pié global de Wordpress -->
	<?php get_footer(); ?>