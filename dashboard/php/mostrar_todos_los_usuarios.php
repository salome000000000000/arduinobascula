<?php
include '../../model/conexion_database.php';

$query = "SELECT user.id, user.cedula, user.nombre, user.apellido, 
user.correo, user.direccion, user.material as id_material, 
(SELECT material FROM precio_materiales WHERE precio_materiales.id = user.material) 
as materiales, user.peso, user.precio FROM `usuario` as user";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_array($result)) {
    $datos[] = $array = array(
        'id' => $row[0],
        'nombre' => $row[2],
        'apellido' => $row[3],
        'cedula' => $row[1],
        'correo' => $row[4],
        'direccion' => $row[5],
        'material' => $row[7],
        'id_material' => $row[6],
        'peso' => $row[8],
        'precio' => $row[9]
    );
}

echo json_encode($datos);


