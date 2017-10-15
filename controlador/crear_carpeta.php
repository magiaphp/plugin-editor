<?php

/**
 * 
 */
$pagina = "editor";
$accion = "ver";
//$id_contacto 			= mysql_real_escape_string($_GET['id_contacto']);
if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo) == true) {

    $carpeta = mysql_real_escape_string($_REQUEST['carpeta']);

    // solo conserva letras y las pasa a minusculas todas
    // verifica si la carpeta existe
    // limitar el largo, 
    // usar otra cosa que el email del usuario
    

    function soloLetras($cadena) {
        return $nueva_cadena = ereg_replace("[^A-Za-z0-9]", "", $cadena);
    }

    if ( ! file_exists($carpeta)) {
        echo "si : ";
        echo "$_usuarios_usuario";
        
        if(mkdir(soloLetras(PATH_USUARIOS . "/$_usuarios_usuario/$carpeta", 0777))){
                echo "Creado"; 
        }        
        
    } else {
        echo "no";
    }



    include "editor/modelo/crear_carpeta.php";



    include "editor/vista/crear_carpeta.php";
} else {
    permisos_sin_permiso($accion, $pagina, $_usuarios_usuario);
}