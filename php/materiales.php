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
    <div class="cointainer">  
        <ul class="list-group">
            <?php
                if($result){
                    while($row = mysqli_fetch_array($result)){
                        echo "<li 
                        class='list-group-item d-flex justify-content-between align-items-left'>"
                        . $row[1] . 
                        "<span class='badge bg-primary rounded-pill'>" 
                        . $row[2] . "$"
                        . "</span>
                        </li>";
                    }
                 }
            ?>
         </ul>        
    </div>
</body>

</html>