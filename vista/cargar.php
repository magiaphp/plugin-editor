<?php
echo $documentos['id'];
?>

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






<form class="form-inline"  action="index.php" method="post">
    <input type="hidden" name="p" value="home">
    <input type="hidden" name="c" value="ejecutar">

    <p></p>
    <textarea id="editor-latino" name="codigo"><?php echo $documentos['contenido']; ?></textarea>
    <p></p>

    <button type="submit" class="btn btn-primary"><?php _t("Ejecutar"); ?></button>
</form>




<h2><?php _t("Consola"); ?></h2>

<pre>
    <?php
    if (isset($_POST['ejecutar'])) {


        //echo var_dump($archivo_lat);
        //$ejecutar = ($codigo != "" ) ? " latino ejemplos/vista/$archivo_lat " : "latino -a";



        $ejecutar = (isset($_POST['codigo'])) ? " latino $_POST[codigo] " : "latino -a";
        echo var_dump($ejecutar);

        echo shell_exec($ejecutar);
    }
    ?>
</pre>
