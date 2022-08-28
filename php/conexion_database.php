<?php

//SERVIDOR, USUARIO Y CONTRASENA, BASE DE DATOS
$user = "root";
$pass = "";

$server = "localhost";
$db = "proyectoBascula";


$con=mysqli_connect($server, $user, $pass, $db) or die ("No se ha podido conectar con la base de datos");
$mysqli = new mysqli($server, $user, $pass, $db);
$mysqli->query("SET NAMES 'UTF8'");

return $con;

?>