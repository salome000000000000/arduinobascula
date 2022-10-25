<?php

include '../../model/conexion_database.php';

if(isset($_POST["id"])){

    $id = $_POST["id"];
    $material = $_POST["material"];
    $precio = $_POST["precio"];

    $sql = "UPDATE `precio_materiales` SET `material`='$material',`precio`='$precio' WHERE `id`= '$id'";

    $result = mysqli_query($con, $sql);


}