<?php

/**
 * 
 */
$pagina = "editor";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {

//    include "home/modelo/crear_proyecto.php";
    include "editor/vista/crear_proyecto.php";
    
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}