<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href ="./css/estilos3.css">
    <title>Contacto/Trabajo Obligatorio - Modulo 1 PHP Intermedio</title>
</head>
<body>
<?php include("header.php")?>
<?php include("barraNav.php")?>
<?php include("fecha_actual.php")?>
    <h1>Sistema de Administracion de Pasajes/Contactos</h1>
<section class="contenedor_carga">
    <h2>Formulario para envio de comentarios</h2>   
        <form action="comentarios.php" method="POST">
            <input type= "text" name='apellido' require placeholder="Apellido">
            <input type= "text" name='nombre' require placeholder="Nombre">
            <input type= "email" name='correo' require placeholder="Correo Electronico">
            <input type= "text" name='comentario' require placeholder="Comantario">
            <input type="hidden" name='fecha' value="<?=$fecha_actual?>">
            <input type= "Submit" class="boton_enviar">
        </form>
</section>
<?php include("footer.php")?>
</body>
</html>