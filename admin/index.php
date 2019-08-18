<?php session_start();

// Archivo index del ADMIN  
require 'config.php';
require '../functions.php';

$conexion = conexion($db_config);

comprobarSession();

// Comprobar Session
if(!$conexion) {
    header('Location: ../error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);



require '../views/admin_index.view.php';

?>