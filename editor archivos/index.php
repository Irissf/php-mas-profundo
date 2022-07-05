<?php

    $archivo = 'texto.txt';
    //modificar
    file_put_contents($archivo, $_GET["cambio"]);


    //leer un archivo
    $texto = file_get_contents($archivo);

    //lo que renderiza es codigo html, por eso no se ven los saltos de linea
    // echo $texto;
?>

<h1>Editar Archivo de Texto</h1>
<form>
    <textarea name="cambio"><?=$texto?></textarea>
    <br>
    <input type="submit" value="Guardar"/>
</form>
