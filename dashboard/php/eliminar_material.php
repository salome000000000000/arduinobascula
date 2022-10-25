<?php

include '../../model/conexion_database.php';


if(isset($_POST["eliminar"])){

    
    $eliminar = $_POST["eliminar"];
    $sql = "DELETE FROM `precio_materiales` WHERE `id`='$eliminar'";
    $resultado = mysqli_query($con, $sql);

}