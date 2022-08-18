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
<?php
session_start();


if (isset($_SESSION['admin'])){

    include("header.php")?>
    
<?php include("barraNav.php")?>
<?php include("fecha_actual.php")?>




    <h1>Sistema de Administracion de Pasajes</h1>
    
<section class="contenedor_carga">
    <?php
                // codigo_captcha
        $nro1 = rand(0, 9);
        $nro2 = rand(0, 9);
        $nro3 = rand(0, 9);
        $letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k');
        $simbolo = array('%', '$', '/', '@', '#');
        $mezclar_letra = rand(0, 6);
        $mezclar_simbolo = rand(0, 4);

        $_SESSION['codigo_captcha'] = $nro1 . $letra[$mezclar_letra] . $nro2. $simbolo[$mezclar_simbolo] . $nro3;

    ?>
            <h2>Reserva de pasaje</h2>
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            <input type= "text" name='documento' require placeholder="Documento">
            <input type="text" name='destino' require placeholder="Destino">
            <input type="text" name='clase' require placeholder="Clase">
            <input type="datetime" name='fecha' value="<?=$fecha_actual?>">
            <div class="descri">
            <textarea name='descripcion' require placeholder="Comentario" cols="94" rows="6"></textarea>
            </div>
            <div>
            <input class='boton_eli' type="file" name="imagen" require placeholder="Imagen">
            <div>
            <select name="estado" id="">
                <option value="proceso">en proceso</option>
                <option value="finalizado">finalizado</option>
            </select>
            </div>
            <img src="captcha.php">
            <div class="descri">
            <input type='text' name='captcha' require placeholder="Ingresar código Captcha">
            </div>
            <div>
            <input type="submit" value="Enviar" class="boton_enviar">
            </div>

</form>

<?php

if(isset($_GET['error_codigo'])){
        echo "Codigo de verificacion incorrecto</h3>";
    }
?>
<?php
if(isset($_GET['ok'])){
        echo "<h3>Registración correcto!</h3>";
}
?>
</section>
</body>
<?php include("footer.php")?>
</html>
<?php
}else{
header('Location: cargar_pasaje.php');
}






