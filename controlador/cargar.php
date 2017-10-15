<?php
/**
 * 
 */
$pagina = "editor";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {
    
    $documentos_id 		= mysql_real_escape_string($_REQUEST['id']);   
    echo $documentos_id; 
    include "editor/modelo/cargar.php";
    include "editor/vista/cargar.php";
} else {
    permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
}