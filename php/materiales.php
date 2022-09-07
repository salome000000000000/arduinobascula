<?php
include 'conexion_database.php';

$query = "SELECT * FROM precio_materiales";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $datos[] = $array = array(
        "material" => $row[1],
        "precio" => $row[2],
    );
}

echo json_encode($datos);
