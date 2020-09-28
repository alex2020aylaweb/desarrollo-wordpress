<?php 
/* esto nos diferenciará para bién del resto de paginas web que no lo tienen */
get_header();

/* esto tipo de if es para no poner llaves */
if(have_posts() ):
while(have_posts() ):
the_post(); 
// escribimos lo que va en lel bucle 
?>

<h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
<p><span><?php   the_date()  ?></span></p>
<p><?php   the_excerpt()  ?></p>
<hr>

<?php  

// hasta aqui lo que va del bucle

endwhile;

else:
    echo ' NO HAY RESULTADOS PARA SU BÚSQUEDA, NO HAY POST ';

endif;


get_footer();

?>




