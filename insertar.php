<?php
require_once 'conexion.php'; # Configuracion de la Web(Base de Datos)
$usuario = $_REQUEST['txtusuario'];
$nombres = $_REQUEST['txtnombres'];
$apellidos = $_REQUEST['txtapellidos'];
$correo = $_REQUEST['txtcorreo'];
$clave = $_REQUEST['txtpassword'];


$link = mysqli_connect($host, $user, $pwd);
mysqli_select_db($link, $db);
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se inserten las tildes correctamente
$add = mysqli_query($link, "INSERT INTO tblusuarios (usuario,nombres,apellidos,correo,clave) VALUES ('$usuario','$nombres','$apellidos','$correo','$clave')");
mysqli_close($link); // Cerramos la conexion con la base de datos
?>