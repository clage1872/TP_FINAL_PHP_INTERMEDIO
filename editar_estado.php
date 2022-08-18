<?php
include ("conexion.php");
    $id_pasaje = $_GET["id"];
    mysqli_query($conexion_db, "UPDATE pasajes SET estado='finalizado' WHERE id =$id_pasaje");
    header("location: verReservas.php");