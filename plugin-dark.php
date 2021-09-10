<?php

//Plugin name: Modo dark
//Description: Modo oscuro en el tema de Wordpress.
//version 1.0
//Author: Julian Alzate
//Author URI: https://juli6464.github.io/ 

function estilos_plugin(){

    $estilos_url =plugin_dir_url(__FILE__);

    wp_enqueue_style('modo_oscuro',$estilos_url.'/assets/css/estilo.css','',1.0,'all');
}

add_action( 'wp_enqueue_scripts','estilos_plugin');  