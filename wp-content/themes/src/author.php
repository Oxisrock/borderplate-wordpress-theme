<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Listado de posts -->
<div class="col-md-8 col-lg-9">
  <!-- Autor -->
  <h2>Artículos de <strong><?php echo get_the_author(); ?></strong></h2>
  <!-- Listado de posts -->
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
              <span class="post-comment"><i class="fa fa-comments"></i> <a href="<?php the_permalink(); ?>">35 Comments</a></span>
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
    <?php if (get_next_posts_link() || get_previous_posts_link()): ?>
     <div class="posts-nav cf">
       <div class="recient separacion separacion-top"><?php next_posts_link(__('&larr; Previos', 'apk')); ?></div>
       <div class="previous separacion separacion-top"><?php previous_posts_link(__('Recientes &rarr;', 'apk')); ?></div>
     </div>
   <?php endif; ?>
 </section>
 
<?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>
</div><!-- /.Fin Contenido Autor / Blog --> 
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>