<!-- 
ARCHIVO CON LAS FUNCIONES DEL TEMA. (FUNCTIONS.PHP) 
-->

<?php

/*
Funciones minimas para entender un tema de WordPress.

    @autor - Daniel Martínez.
    @version - 1.0
    @url - danmnez.me
*/


// Menu.
function menuHtml5() {

    // Agregamos los parametros personalizados a la funcion de menu de WordPress.
    $menuParametros = array(
      'container'       => false,
      'echo'            => false,
      'items_wrap'      => '%3$s',
      'depth'           => 0,
    );

    echo strip_tags(wp_nav_menu( $menuParametros ), '<li><a>' );

}        

// Contenido de las paginas.
function contenidoPag() {

    get_page($page_id);
    $page_data = get_page($page_id);
    echo "<h2>  $page_data->post_title  </h2>";
    echo apply_filters(‘the_content’, $page_data->post_content);

}

// Barra lateral.
if(function_exists('register_sidebar'))
    register_sidebar(array(
        'name' => 'Barra lateral',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));



?>






