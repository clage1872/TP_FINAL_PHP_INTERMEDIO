<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas/Trabajo Obligatorio - Modulo 1 PHP Intermedio</title>
    <link rel="stylesheet" href="./CSS/estilos3.css">
</head>
<body>
    
</body>
</html>
<?php include("header.php")?>
<?php include("barraNav.php")?>
<h1>Sistema de Administracion de Pasajes/Reservas</h1>
<h2>Reservas efectuadas</h2>
<section>
    <?php include("conexion.php");
            $consulta_db = mysqli_query($conexion_db, "select * from pasajes");
            while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
    ?>   
        <section class="contenedor_carga">
            <h3>Documento: <?php echo $mostrar_datos['documento']?></h3>
            <h3>Destino: <?php echo $mostrar_datos['destino']?></h3>
            <h3>Clase: <?php echo $mostrar_datos['clase']?></h3>
            <h3>Fecha de la Reserva: <?php echo $mostrar_datos['fecha']?></h3>
            <h3>Comentario: <?php echo $mostrar_datos['descripcion']?></h3>
            <div id='estado'>
            <h4>Estado de la Reserva: <?php echo $mostrar_datos['estado']?></h4>
            </div>
            <p><a class="boton_eli"href="editar_estado.php?id=<?php echo $mostrar_datos['id']; ?>">Confirmar reserva</a></p>
            <p><a class="boton_eli"href="eliminar.php?id=<?php echo $mostrar_datos['id']; ?>">Eliminar</a></p>
        </section>
</section>
<?php } ?>
<?php include("footer.php")?>
