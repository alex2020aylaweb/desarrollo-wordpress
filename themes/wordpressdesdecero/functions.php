<?php 
// crear menus 

// 1 agregar un nuevo menu, a estos cuatro pasos se les llama crear un HOOK.
function agregar_menus(){
register_nav_menus( //('principal', __('principal')); __ significa traductores de temas
array(
    'principal' => __('principal'),
    'footer' => __( 'footer' )    
));
}
// 2 enganchamos el menu a wordpress
add_action('init','agregar_menus');

// 3 function mostrar menu
function mostrar_menu(){
wp_nav_menu([
    'theme_location'=>'principal',
    'container'=>'ul',
    'container_class'=>'nav-link',
     'container_id'=>'principal'  
   /* 'li'=>'nav-item',
    'a'=>'nav-link'*/
    ]);
}

// 4 function mostrar menu para la cantidad de  menus que queramos poner
function mostrar_footer(){
    wp_nav_menu([
        'theme_location'=>'footer',
        'container'=>'ul',
        'container_class'=>'nav-link',
         'container_id'=>'footer'  
       /* 'li'=>'nav-item',
        'a'=>'nav-link'*/
        ]);
    }
// inc-> el bootstrap navmenu -> wp_bootstrap_navwalker.php
require_once get_template_directory().'/inc/wp_bootstrap_navwalker.php';

// funcion mostrar menu con bootstrap con la clase nav walker
wp_nav_menu( array(
	'theme_location'  => 'principal',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'nav',
	'container_id'    => 'menu_principal',
	'menu_class'      => 'navbar',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker()
) );



wp_nav_menu( array(
	'theme_location'  => 'footer',
	'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
	'container'       => 'div',
	'container_class' => 'nav',
	'container_id'    => 'menu_footer',
	'menu_class'      => 'navbar',
	'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
	'walker'          => new WP_Bootstrap_Navwalker()
) );


/////////////////////////////////////////////////////////////////////////////////


// funcion para controlar el resumen de la entrada
function excerpt_personalizado($length){
return 20;
}
add_filter('excerpt_length', 'excerpt_personalizado');

// añadimos soporte de thumbnails
add_theme_support( 'post-thumbnails' );

// hacemos un shortcode que es un id que damos a una parte del código o una imagen

function firma_guay(){
    return ' Soy Jose ';}
    add_shortcode('firma','firma_guay');




function shortcode_redes() {
    return '<p>Gracias por llegar al final. Si te ha gustado, comparte ;)</p>';
    }
    add_shortcode('redes', 'shortcode_redes');


// Este archivo es para las funciones específicas del tema.
// Si todas nuestras páginas van a usar un codigo, se lo 
// pasaremos como un plugin no contiene etiqueta de salida de php.
// también sirve para limitar ciertas cosas
// hay tmbnails grandes y pequeños



//////////////////////////////////////////////////////////////////////////////

// zona de widgets

// Registramos un nueva (o nuevas) zona de widgets simple denominada 'sidebar'
// function agregar_soporte_widgets() {
    // register_sidebar( array(
     //   'name'          => 'Sidebar',
      //  'id'            => 'sidebar',
     //   'before_widget' => '<div>',
     //   'after_widget'  => '</div>',
      //  'before_title'  => '<h2>',
      //  'after_title'   => '</h2>',
    //    ) );
    //   }

// agregar widgets
function agregar_widgets() {
    register_sidebar([
                 'name'        => 'widget-footer-1',
                'id'           => 'wf1',
               'before_widget' => '<div>',
               'after_widget'  => '</div>',
               'before_title'  => '<h2>',
               'after_title'   => '</h2>']);
            

   
      register_sidebar([
        'name'          => 'widget footer-2',
       'id'            => 'wf2',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>']);

      register_sidebar([
        'name'          => 'widget footer-3',
       'id'            => 'wf3',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>']);

      register_sidebar([
        'name'          => 'lateralderecho',
       'id'            => 'ld',
      'before_widget' => '<div>',
      'after_widget'  => '</div>',
      'before_title'  => '<h2>',
      'after_title'   => '</h2>']);

      }

// Hook o gancho del widget para que se inicie
add_action( 'widgets_init', 'agregar_widgets' );

//////////////////////////////////////////////////////// estilos

// wp_register_style( $handle, $src, $deps, $ver, $media ); los dos primeros parametros 
// son obligatoriaos nombre y donde está, y 



wp_register_style(
    'bootstrap', // nombre
    // get_theme_file_uri( 'css/bootstrap.min.css' ), // URL
    get_theme_file_uri().'/inc/bootstrap.min.css');
  

wp_register_style(
    'dw-style',get_stylesheet_uri(),['bootstrap']);


// encolamos
function encolar_estilos(){
    ('wp_enqueue_scripts,encolar_estilos');
}

// ponerlos en cola

wp_enqueue_style( 'dw-style' );

// accion de cuando queremos que esto se cargue el HOOK
add_action('wp_enqueue_scripts','wp_style');





