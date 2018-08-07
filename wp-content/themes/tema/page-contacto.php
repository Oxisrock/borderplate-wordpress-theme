<?php
/**
 * Template Name: Plantilla Contacto
 */ 
?>

<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
</div><!-- ./fin container que se abre en el Header -->
</div><!-- ./row -->
<!-- Header background Image -->
<div id="page-header-contact" class="page-header has-background-image">
  <div class="overlay"></div>
  <div class="container">
    <h1 class="page-title text-center"><?php the_title(); ?></h1>
    <p class="text-center">"Jamás se fracasa tratando de cumplir con el deber, y sí cuando se descuida <span class="text-center">"Banden Powell"</span></p>
  </div>
</div>
<!-- Fin de Background Image -->

<!-- Page contacto-->
<div class="page-content no-margin-bottom">
  <!-- Contacto -->
  <?php if ( have_posts() ) : ?>
    <section> <!-- ./contacto-formulario -->
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <?php while ( have_posts() ) : the_post(); ?>
             <?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
             $url = wp_get_attachment_url( $post_thumbnail_id);?>
             <section>
              <h1>Formulario de Contacto</h1>
              <p class="img-fluid"><?php the_content(); ?></p>

              <?php
              if ( isset($_GET['sent']) ){
                if ( $_GET['sent'] == '1'){
                  echo "<p> ✔ Formulario enviado correctamente</p><br>";
                }
                else {
                  echo "<p> Hubo un error al enviar</p><br>";
                }
              }
              ?>

              <form method="post" action="<?php echo admin_url( 'admin-post.php' ) ?>" class="comment-form-comment textarea boton-formulario cajas">
                <div>
                  <label for="name">Nombre:</label>
                  <input type="text" name="name" id="name" required>

                  <br>
                  <label for="email">Correo:</label>
                  <input type="email" name="email" id="email" required>

                  <br>
                  <label for="message">Mensaje:</label>
                  <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </div>
                <br>
                <input type="hidden" name="action" class="" value="process_form">
                <input type="submit" name="submit" class="" value="Enviar">
              </form>

            </section> <!-- ./contacto-formulario -->
          </div>
          <div class="col-md-3">
            <div class="sidebar">
              <div class="widget">
                <h4 class="widget-title">Contacto Información</h4>
                <address class="contact-info">
                  <p><i class="icon icon_pin_alt ico-styled text-primary"></i> Aldea de Konoha</p>
                  <p><i class="icon icon_phone ico-styled text-primary"></i> #00000000</p>
                  <p><i class="icon icon_mail_alt ico-styled text-primary"></i> el_quinto_hokage@.com</p>
                </address>
              </div>
              <div class="widget">
                <h4 class="widget-title">BUSINESS HOURS</h4>
                <ul class="list-unstyled">
                  <li><strong>Monday-Friday: </strong> 8am to 5pm</li>
                  <li><strong>Saturday: </strong> 10am to 2pm</li>
                  <li><strong>Sunday: </strong> Closed</li>
                </ul>
              </div>
              <div class="widget">
                <h4 class="widget-title">BUSINESS HOURS</h4>
                <ul class="list-unstyled">
                  <li><strong>Monday-Friday: </strong> 8am to 5pm</li>
                  <li><strong>Saturday: </strong> 10am to 2pm</li>
                  <li><strong>Sunday: </strong> Closed</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar de Contacto -->
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




<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>