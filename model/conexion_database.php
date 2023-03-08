<?php

//SERVIDOR, USUARIO Y CONTRASENA, BASE DE DATOS
$user = "root";
$pass = "";

$server = "localhost";
$db = "proyectoBascula";
$con = "";


try {
    $con = mysqli_connect($server, $user, $pass, $db);
    $mysqli = new mysqli($server, $user, $pass, $db);
    $mysqli->query("SET NAMES 'UTF8'");
    return $con;
} catch (Exception $e) {
    echo "No se ha podido conectar a la base de datos";
    return "No se ha podido conectar con la base de datos";
}

?>