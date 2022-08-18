<?php
session_start();
header("content-type: image/png");

$imagen_captcha = imagecreate(70, 30);

$fondo = imagecolorallocate($imagen_captcha, 145, 129, 182);
$texto = imagecolorallocate($imagen_captcha, 82, 4, 34);

imagestring($imagen_captcha, 5, 15, 5, $_SESSION['codigo_captcha'], $texto);

imagepng($imagen_captcha);
