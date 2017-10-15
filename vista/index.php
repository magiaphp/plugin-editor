

<form class="form-inline"  action="index.php" method="post">

    <div class="form-group">
        <label for="staticEmail2" class="sr-only">Email</label>
        <select class="form-control" name="archivo" id="archivo">
            <option value="si_if">si (if)</option>
            <option value="osi">osi (if else)</option>
            <option value="si_sino_if_else">si sino (if else)</option>
            <option value="escribir">escribir.lat</option>
            <option value="poner">poner.lat</option>
            <option value="mientras__while">mientras (while)</option>
            <option value="repetir">repetir</option>
            <option value="desde">desde</option>
            <option value="pwd">pwd</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary"><?php _t("Cargar ejemplo"); ?></button>
</form>

<?php


echo EUCALITO; 
echo "<br>"; 

$archivo = (isset($_POST['archivo'])) ? $_POST['archivo'] : "index";


$archivo_lat = $archivo . '.lat';
$archivo_html = $archivo . '.html';
$archivo_php = $archivo . '.php';

$codigo = file_get_contents("ejemplos/vista/" . $archivo_lat);
?>


<p></p>

<textarea id="editor-latino" name="c"><?php echo $codigo; ?></textarea>


<h2><?php _t("Consola"); ?></h2>

<?php 
echo ROBINSON; echo "<br>"; 
echo URL_WEB; echo "<br>"; 
echo PATH_WEB; echo "<br>"; 
echo PATH_USUARIOS; echo "<br>"; 

 //mkdir(PATH_USUARIOS.'/robin', 0777); 

?>


<pre>
<?php
    //echo var_dump($archivo_lat);

    $ejecutar = ($codigo != "" ) ? " latino ejemplos/vista/$archivo_lat " : "latino -a";
    echo shell_exec($ejecutar);
    ?>
</pre>
