    		</div><!-- /.row -->
    	</div><!-- /.container -->
    </div><!-- /.page-content -->
    <!-- /. Fin Contenido del sitio -->

    <!-- FOOTER -->
    <footer class="footer-newsletter">
    	<div class="container">
    		<div class="footer-top">
    			<h4 class="footer-heading">Subscribete a Nuestro Blog</h4>
    			<p class="copytext">Suscríbase al boletín para obtener las últimas noticias y actualizaciones sobre nuestro producto y servicios.
    				
    				<form class="newsletter-form" method="post">
    					<div class="input-group input-group-lg">
    						<input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
    						<span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBÉTE</span></button>
    					</span>
    				</div>
    				<div class="alert"></div>
    			</form>

    		</div>
    		<div class="footer-bottom">
    			<div class="left">
    				<nav class="clearfix">
    					<ul class="list-inline">
    						<li><a href="#">Nuevo</a></li>
    						<li><a href="#">Rapido</a></li>
    						<li><a href="#">Privacidad</a></li>
    						<li><a href="#">Luego</a></li>
    					</ul>
    				</nav>
    				<p class="copyright-text"><a href="https://slicegrou.xyz/" target="_blank">SliceGroup&copy;</a> <?php echo date("Y") ?>. All Rights Reserved.</p>
    			</div>
    			<ul class="right list-inline social-icons social-icons-bordered social-icons-small social-icons-fullrounded">
    				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    				<li><a href="#"><i class="fa fa-rss"></i></a></li>
    				<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
    				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    			</ul>
    		</div>
    	</div><!-- /.container -->
    </footer>
    <?php wp_footer(); ?>
    <!-- END FOOTER -->
    <span class="ir-arriba icon-arrow-up2"></span>
  </div>
  <!-- Fin WRAPPER -->

  <!-- JAVASCRIPT -->
  <script src="<?php bloginfo('template_url') ?>/js/jquery-2.1.1.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/npm.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/plugins/easing/jquery.easing.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/plugins/twitter/twitterFetcher.min.js"></script>
  <script src="<?php bloginfo('template_url') ?>/js/bravana-lite.js"></script>

  <!-- Script de Boton -->
  <script>$(document).ready(function(){
  	
  	$('.ir-arriba').click(function(){
  		$('body, html').animate({
  			scrollTop: '0px'
  		}, 300);
  	});
  	
  	$(window).scroll(function(){
  		if( $(this).scrollTop() > 0 ){
  			$('.ir-arriba').slideDown(300);
  		} else {
  			$('.ir-arriba').slideUp(300);
  		}
  	});
  	
  });
</script><!-- Script de Boton -->
</body>

</html>