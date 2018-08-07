<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido Categorias / Blog -->
<div class="col-md-8 col-lg-9">
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
                 <span class="post-date">
                  <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F Y'); ?></time>
                </span>
                |
                <span class="post-author">
                 <?php the_author() ?>
               </span>
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
  <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
<?php endif; ?>
<!-- Fin listado de posts -->
</div><!-- /.Fin Contenido Categorias / Blog -->            
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>