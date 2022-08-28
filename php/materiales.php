<?php 
    include 'conexion_database.php';

    $query = "SELECT * FROM precio_materiales";
    $result = mysqli_query($con, $query); 

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="d-flex justify-content-center">
        <table class="precios_referenciales shadow-lg">
            <caption> Precios referenciales respecto a material reciclado </caption>
            <tr class="abajo">
                <th>Material</th>
                <th>Precio</th>
            </tr>
            <?php
                if($result){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td class='separador'>" . $row[1] . '</td>';
                        echo '<td>' . $row[2] . '</td>';
                        echo "</tr>";
                    }     
                 }
                 ?>
            <tr>
                <td class="aviso" colspan="2">Pueden variar de acuerdo a las condiciones del mercado y la
                    calidad de material entregado al gestor</td>
            </tr>
        </table>
    </div>
</body>

</html>