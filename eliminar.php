<?php
include ("conexion.php");
    $id_pasaje = $_GET["id"];
    mysqli_query($conexion_db, "DELETE FROM pasajes where id = $id_pasaje");
    header("location: verReservas.php");