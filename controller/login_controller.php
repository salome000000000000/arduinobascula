<?php

session_start();

include 'SED.php';
$mens = '';

if(!empty($_POST['ingresar'])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])){
        $usuario = $_POST['user'];
        $pass = $_POST['pass'];

        $password=SED::encryption($pass);

        $buscar = "SELECT * FROM `login_usuarios` WHERE (`username_usuario` = '$usuario' OR `correo_usuario`= '$usuario') 
        AND `password_usuario` = '$password'";

        $sql = mysqli_query($con, $buscar);
        
        if($datos = mysqli_fetch_object($sql)){
            $_SESSION['id'] = $datos->id_usuario;
            $_SESSION['nombre'] = $datos->nombre_usuario; 
            $_SESSION['apellido'] = $datos->apellido_usuario;  
            $_SESSION['rol'] = $datos->codigo_miembro;  
            header("location: ./");
        } else {
            $mens = '<div class="form-floating mb-3 alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                     Correo o contraseña incorrectos.
                    </div>';;
        }
    } else {
        $mens = '<div class="form-floating mb-3 alert alert-warning">
                <i class="fas fa-exclamation-triangle"></i>
                    Ingrese sus datos
                </div>';
    }
} 

echo $mens;