<?php

session_start();
include('conexion.php');

$codigo_captcha = $_POST['captcha'];

if ($codigo_captcha == $_SESSION['codigo_captcha']){

    $documento_viaje = $_POST['documento'];
    $destino_viaje = $_POST['destino'];
    $clase_viaje = $_POST['clase'];
    $fecha_viaje = $_POST['fecha'];
    $descripcion_viaje = $_POST['descripcion'];
    $estado_viaje = $_POST['estado'];


    $img = $_FILES['imagen']['name'];
    $ta_imagen = $_FILES['imagen']['size'];
    $ti_imagen = $_FILES['imagen']['type'];
    $tmp_imagen = $_FILES['imagen']['tmp_name'];

    $CD = 'imagenes/' . $img;

                if ($ti_imagen != 'image/jpeg' && $ti_imagen != 'image/png' && $ti_magen != 'image/jpg' && $ti_imagen != 'image/gif' or $ta > 200000){
                        header("Location: cargar_pasaje.php?error");
    
                }else{
                        move_uploaded_file($tmp_imagen, $CD);
                }
                        $conexion_db = mysqli_connect("localhost", "root", "", "lage_carlos" ) or exit ("Error de conexión");
    
                        mysqli_query($conexion_db, "INSERT INTO pasajes VALUES (DEFAULT, '$documento_viaje', '$destino_viaje', '$img', '$clase_viaje', '$fecha_viaje', '$descripcion_viaje', '$estado_viaje')");
                        mysqli_close($conexion_db);
   
                        header("Location:cargar_pasaje.php?ok");
                
}else{
    header("Location:cargar_pasaje.php?error_codigo");
}