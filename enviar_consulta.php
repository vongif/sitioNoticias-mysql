<?php 

$nombre_form = $_POST ['nombre'];
$apellido_form = $_POST ['apellido'];
$email_form = $_POST ['email'];
$mensaje_form = $_POST ['mensaje'];


// conexion base de datos


//$conexion = mysqli_connect("localhost", "root" , "" , "itech") or exit ("No se pudo conectar a Base de Datos");


$conexion = mysqli_connect("localhost", "id18398441_vongif" , "M_GX_MX925[Ms*u_" , "id18398441_itech") or exit ("No se pudo conectar a Base de Datos");



mysqli_query($conexion, "INSERT INTO itechtabla VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?e=ok");





