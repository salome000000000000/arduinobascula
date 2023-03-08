<?php
include '../model/conexion_database.php';


$query = "SELECT * FROM datosarduino";
try {
	if (!$con == null) {
		$result = mysqli_query($con, $query);
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {
				$valor = $row["valor"];
				echo $valor;
			}
		}
	}
} catch (Exception $e) {
	return "No se ha podido conectar con la base de datos";
}
?>