<?php

include '../model/conexion_database.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$cedula = $_POST["cedula"];
$correo = $_POST["correo"];
$celular = $_POST["celular"];
$direccion = $_POST["direccion"];
$precio = $_POST["precio_total"]; 
$peso = $_POST["peso"];

$material_id = $_POST["material_id"];

if(isset($_POST["material"])){

    $material = $_POST["material"];
}

$insert = "INSERT INTO usuario (id, cedula, nombre, apellido, correo, direccion, material, peso, precio) VALUES (null, '$cedula','$nombre','$apellido','$correo','$direccion','$material','$peso','$precio')";

$result = mysqli_query($con, $insert);

ob_end_clean();

header("location: ../");