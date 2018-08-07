<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<div class="col-md-8 col-lg-9">
  <!-- Búsqueda -->
  <h3>Resultados de búsqueda para <strong><?php echo get_search_query() ?></strong></h3>
  <!-- Listado de posts -->
  <?php if ( have_posts() ) : ?>
    <section>
      <?php while ( have_posts() ) : the_post(); ?>
        <article>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <span class="post-date"><i class="fa fa-calendar"></i> <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time></span> | <span class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link() ?></span>
          <div class="btn-group fa"> <?php the_category (); ?></div>
          <br/>
          
          <?php the_excerpt(); ?>


          <!-- Tag list -->
          <ul class="list-inline tag-list">
            <?php the_tags('<li>','</li><li>','</li>'); ?>
          </ul>
          <!-- Fin tag list -->

        </article>
      <?php endwhile; ?>
      <div class="pagination">
        <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
        <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
      </div>
    </section>
  <?php else : ?>
    <p><?php _e('Ups!, no hay entradas.'); ?></p>
  <?php endif; ?>
</div><!-- /. col-md-8 col-lg-9 -->

<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
</div>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>