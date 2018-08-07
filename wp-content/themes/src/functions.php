<?php

/* Para que el tema pueda soportar imágenes*/
add_theme_support( 'post-thumbnails' );

/**
 * Crear nuestros menús gestionables desde el 
 * administrador de Wordpress.
 */

register_nav_menus( array( 
  'menu' => 'Menu superior',
));

// function mis_menus() {
//   register_nav_menus(
//     array(
//       'navegation' => __( 'Menú de navegación' ),
//     )
//   );
// }
// add_action( 'init', 'mis_menus' );

/**
 * Crear una zonan de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
 
function mis_widgets(){
  register_sidebar(
    array(
    	'name'          => __( 'Sidebar' ),
    	'id'            => 'sidebar',
    	'before_widget' => '<div class="widget">',
    	'after_widget'  => '</div>',
    	'before_title'  => '<h4>',
    	'after_title'   => '</h4>',
    )
  );
}
add_action('init','mis_widgets');

/**
 * Filtrar resultados de búsqueda para que solo muestre 
 * posts en el listado
 */

function buscar_solo_posts($query) {
  if($query->is_search) {
    $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');

// Register Custom Navigation Walker
// require_once('wp_bootstrap_navwalker.php');
// 
