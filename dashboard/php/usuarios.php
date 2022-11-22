<?php

include '../../model/conexion_database.php';

    $select = "SELECT * FROM `usuario`";

    $resultado = mysqli_query($con, $select);
    while($row=mysqli_fetch_assoc($resultado)){
        $data ["data"][] = $row;
    }
    echo json_encode($data);
    
