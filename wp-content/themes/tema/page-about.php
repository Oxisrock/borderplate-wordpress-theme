<?php
/**
 * Template Name: Plantilla About
 */ 
?>

<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
</div><!-- ./fin container que se abre en el Header -->
</div><!-- ./row -->
<!-- Header background Image -->
<div id="page-header-about" class="page-header has-background-image">
	<div class="overlay"></div>
	<div class="container">
		<h1 class="page-title text-center"><?php the_title(); ?></h1>
		<p class="text-center">"Jamás se fracasa tratando de cumplir con el deber, y sí cuando se descuida <span class="text-center">"Banden Powell"</span></p>
	</div>
</div>
<!-- Fin de Background Image -->

<!-- Page content -->
<div class="page-content no-margin-bottom">
	<!-- ABOUT -->
	<?php if ( have_posts() ) : ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-xs-7">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
							$url = wp_get_attachment_url( $post_thumbnail_id);?>
							<section>
								<h1>ABOUT</h1>
								<p class="img-fluid"><?php the_content(); ?></p>
							</section>
						</div>
						<div class="col-md-5 col-xs-5">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="//www.youtube.com/embed/YXVoqJEwqoQ" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END ABOUT -->

			<!-- TEAM -->
			<section>
				<div class="container">
					<h2 class="section-heading">Nuestro Personal</h2>
					<p class="margin-bottom-30">Interactively productize viral systems and functional networks. Professionally fabricate cross functional. Appropriately mesh team building expertise via cutting-edge schemas. Intrinsicly reconceptualize distinctive infrastructures rather than.</p>
					<div class="row">
						<div class="col-sm-4">
							<div class="team-member">
								<img src="<?php bloginfo('template_url') ?>/img/person1.png" class="img-responsive" alt="Person">
								<div class="member-info">
									<h3 class="name">Goku</h3>
									<span class="title">Director</span>
									<p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p>
									<ul class="list-inline social-icons social-icons-small">
										<li><a href="#" class="facebook-bg-hover"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="dribbble-bg-hover"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#" class="linkedin-bg-hover"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" class="twitter-bg-hover"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img src="<?php bloginfo('template_url') ?>/img/person2.png" class="img-responsive" alt="Person">
								<div class="member-info">
									<h3 class="name">Wario</h3>
									<span class="title">Senior Manager</span>
									<p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p>
									<ul class="list-inline social-icons social-icons-small social-icons-square">
										<li><a href="#" class="facebook-bg-hover"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="dribbble-bg-hover"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#" class="linkedin-bg-hover"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" class="twitter-bg-hover"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="team-member">
								<img src="<?php bloginfo('template_url') ?>/img/person3.png" class="img-responsive" alt="Person">
								<div class="member-info">
									<h3 class="name">Zelda</h3>
									<span class="title">Account Executive</span>
									<p class="short-bio">Dramatically harness 2.0 products and leveraged sources. Dramatically drive intermandated expertise rather than clicks-and-mortar benefits.</p>
									<ul class="list-inline social-icons social-icons-small social-icons-square">
										<li><a href="#" class="facebook-bg-hover"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" class="dribbble-bg-hover"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#" class="linkedin-bg-hover"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" class="twitter-bg-hover"><i class="fa fa-twitter"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END TEAM -->

			<!-- CLIENTS -->
			<section>
				<div class="container">
					<h2 class="section-heading">Aliados</h2>
					<ul class="list-inline list-logo">
						<li>
							<a href="#"><img src="" alt="logo"></a>
						</li>
						<li>
							<a href="#"><img src="" alt="logo"></a>
						</li>
						<li>
							<a href="#"><img src="" alt="logo"></a>
						</li>
						<li>
							<a href="#"><img src="" alt="logo"></a>
						</li>
						<li>
							<a href="#"><img src="" alt="logo"></a>
						</li>
					</ul>
				</div>
			</section>
			<!-- END CLIENTS -->
			<!-- CALL TO ACTION -->
			<section class="no-padding-bottom">
				<div class="cta cta-solid-bg cta-2-columns">
					<div class="container">
						<h2 class="heading">Un elegante tema de Bootstrap con toneladas de funciones</h2>
						<a href="https://www.themeineed.com/downloads/bravana-responsive-website-template/?utm_source=bravanalite&utm_medium=button&utm_campaign=bravana" target="_blank" class="btn btn-primary btn-lg">Descargar</a>
					</div>
				</div>
			<?php endwhile; ?>
		</section>
		<!-- END CALL TO ACTION -->
	</div>

	<!-- END PAGE CONTENT -->
	<!-- Archivo de pié global de Wordpress -->
<?php else : ?>
	<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
</div><!-- ./Inicio container que se abre en el footer -->
<?php get_footer(); ?>