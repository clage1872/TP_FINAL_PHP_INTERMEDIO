<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo/Trabajo Obligatorio - Modulo 1 PHP Intermedio</title>
</head>
<body>
<?php
    $archivo = fopen("comentarios.txt", 'r');
    echo fread($archivo, 4000);
    fclose($archivo);
?>    
</body>
</html>