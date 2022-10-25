<?php

include '../../model/conexion_database.php';

if(isset($_POST["id"])){

    $id = $_POST["id"];
    $material = $_POST["material"];
    $precio = $_POST["precio"];

    $select = "SELECT * FROM `precio_materiales` WHERE `id` = '$id'";


    $res = array();
    $resultado = mysqli_query($con, $select);
    while($row=mysqli_fetch_assoc($resultado)){
        $res = $row;
    }

    echo json_encode($res);

}