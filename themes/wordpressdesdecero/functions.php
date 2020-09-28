<?php 
// agregar un nuevo menu
function agregar_menu(){
register_nav_menu('principal', __('principal'));
}
//enganchamos el menu a wordprss
add_action('init','agregar_menu');
// function mostrar menu
function mostrar_menu(){
wp_nav_menu([
    'principal'=>'principal',
    'li'=>'nav-item',
    'a'=>'nav-link'
    ]);
}

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



