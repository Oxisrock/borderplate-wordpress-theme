<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>

<!-- Contenido Home / Blog -->
<div id="single-post" class="col-md-8 col-lg-9">
  <!-- Listado de posts -->
  <?php if ( have_posts() ) : the_post(); ?>
    <section class="">
      <h1><?php the_title(); ?></h1>
      <span class="post-author"><i class="fa fa-user"></i> 
        <?php the_author_posts_link() ?></span> |

        <span class="post-date"><i class="fa fa-calendar"></i><time datatime="<?php the_time('Y-m-j'); ?>">
          <?php the_time('j F, Y'); ?></time></span>

          <?php the_category (); ?>

          <?php the_content(); ?>

          <!-- Tag list -->
          <ul class="list-inline tag-list">
            <?php the_tags('<li>','</li><li>','</li>'); ?>
          </ul>
          <!-- Fin tag list -->

          <div class="separado">
            <img src="<?php bloginfo('template_url') ?>/img/autor_02.jpg" class="comment-author img" alt="Imagen de Autor">
            <h3><?php the_author_posts_link() ?></h3> 
          </div>
        </section>
        <!-- Comentarios -->
        <?php comments_template(); ?>
        

      <?php else : ?>
        <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
      <?php endif; ?>
      <!-- Fin listado de posts -->
    </div><!-- ./col-md-8 col-lg-9 -->
    <!-- /.Fin Contenido Home / Blog -->
    
    <!-- Archivo de barra lateral por defecto -->
    <?php get_sidebar(); ?>      
    <!-- Archivo de pié global de Wordpress -->
    <?php get_footer(); ?>