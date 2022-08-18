<!Doctype html>
<html lang = "es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Inicio/Trabajo Obligatorio - Modulo 1 PHP Intermedio</Title>
    <link rel="stylesheet" href ="./css/estilos3.css">
</head>
<body>
<?php include("header.php")?>
<?php include("barraNav.php")?>
<?php include("fecha_actual.php")?>
    <h1>Sistema de Administracion de Pasajes</h1>

    <section class="contenedor_carga">
    <h2>Reserva de pasaje</h2>
        <form action="validar.php" method="POST">
            <input type= "text" name='usuario' require placeholder="Usuario">
            <input type="password" name='clave' require placeholder="Contraseña">
            
            <input type="submit" value="Ingresar">
        </form>
</section>
<?php
    if(isset($_GET['error'])){
        echo "<h3>Datos incorrectos!</h3>";
    }
?>
<?php include("footer.php")?>
</body>
</html>