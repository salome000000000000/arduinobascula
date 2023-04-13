<?php
#SE INCLUYE LA CONEXION A LA BASE DE DATOS
include '../model/conexion_database.php';

#ESTE CODIGO AYUDA A RESETEAR LA BASCULA A 0
if (isset($_POST['resetear'])) { #REVISA SI SE DIO CLICK A LA OPCION DE RESETEAR
    $valor = $_POST['resetear'];
    echo "Medida en gramos";
    echo "Valor : " . $valor;
    #ACTUALIZA EL VALOR A 0 DESDE LA TABLA DE LA BASE DE DATOS
    $update = "UPDATE datosarduino SET valor = '$valor' WHERE id = 1";
    $resultado = mysqli_query($con, $update);
    if ($resultado) {
        echo "Actualizando valor bascula";
    } else {
        echo "Error";
    }
} else {
    echo "No se esta recibiendo valores";
}

?>