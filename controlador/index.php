<?php
/**
 * 
 */
$pagina = "editor";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {
    include "editor/modelo/index.php";
    include "editor/vista/index.php";
} else {
    permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
}