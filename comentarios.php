<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $texto = " <h3> Apellido: " .  $_POST['apellido'] . " - Nombre: " .  $_POST['nombre'] . " - Correo: " .  $_POST['correo'] . " - Comentario: " .  $_POST['comentario'] . " - Fecha: " .  $_POST['fecha'] ."</h3>";
    $archivo = fopen('comentarios.txt', 'a');
    fputs($archivo, $texto);
?>
<h2>Lista de Comentario</h2>
<p> <a href="leerArchivo.php">Ver contenido de archivo</a></p>
</body>
</html>

