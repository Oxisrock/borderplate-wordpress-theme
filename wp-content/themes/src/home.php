<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<!-- Contenido Home / Blog -->
<div class="col-md-8 col-lg-9">
  <!-- Listado de posts -->
  <?php if ( have_posts() ) : ?>
    <section class="no-padding-top">

      <?php $contador =0; ?>

      <?php while ( have_posts() ) : the_post(); ?>
        <?php if ($contador <1): ?>
          <article class="entry-post entry-post-fullwidth">

            <?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);?>

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
                  <span class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link() ?></span>
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
        <?php else: ?>



         <div class="col-md-4 col-lg-4">
          <article class="entry-post entry-post-fullwidth">

            <?php $post_thumbnail_id = get_post_thumbnail_id( $post->id );
            $url = wp_get_attachment_url( $post_thumbnail_id);?>

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
        </div>
        
      <?php endif ?>      

      <?php $contador++;  ?>
    <?php endwhile; ?>
  </section>
  
  <div class="clearfix margin-top-30 margin-bottom-30"></div>

<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
<!-- Fin listado de posts -->
</div><!-- ./col-md-8 col-lg-9 -->

<!-- /.Fin Contenido Home / Blog -->          

<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>      
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>