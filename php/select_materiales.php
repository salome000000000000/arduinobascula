<?php
    include 'conexion_database.php';

    $query = "SELECT * FROM precio_materiales";
    $result = mysqli_query($mysqli, $query); 
                            
        while($row = mysqli_fetch_array($result)){   
        $datos[] = $array = array(
            'material_id' => $row[0],
            'materiales' => $row[1],
            'precio' => $row[2]) ;  
        }
    echo json_encode($datos);  
?>