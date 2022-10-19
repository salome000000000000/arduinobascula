<?php
include '../../model/conexion_database.php';

extract($_POST);

if(isset($_POST["material"]) && isset($_POST["precio"])){

    $material = $_POST["material"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO precio_materiales(material, precio) VALUES ('$material','$precio')";

    $result = mysqli_query($con, $sql);
}