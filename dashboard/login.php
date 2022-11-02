<?php 
    include '../model/conexion_database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <!-- JavaScript -->
    <script src="../vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../vendor/fontawesome-free/js/all.min.js"></script>

    <!-- ARCHIVOS DE ESTILO -->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/ico/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/footer-abajo.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>
<body>
    <!-- ENCABEZADO -->
    <header class="shadow-lg">
        <!-- MENU DE NAVEGACION -->
        <nav class="caja-sin-border navbar navbar-expand-lg justify-content-center">
            <div class="container-fluid">
                <a class="justify-content-start logo-nav navbar-brand ms-4" href="../"><img src="../img/ico/logo.svg"
                        style="width: 12rem;"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="w-100 navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item p-2">
                            <a class="nav-link" aria-current="page" href="../">Inicio</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="./registro.php">Registro</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="../about.html">Acerca de</a>
                        </li>
                    </ul>
                    <a class="logo justify-content-end me-4" href="https://ismac.edu.ec" target="_blank"><img
                            class="logo" src="../img/soft.png" width="100px" style="filter: invert();"></a>
                </div>
            </div>
        </nav>
    </header>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Inicio de sesion</h3></div>
                                <div class="card-body">
                                    <form method="POST" action="">
                                        <?php include '../controller/login_controller.php'?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="user" placeholder="name@example.com" />
                                            <label for="inputEmail">Correo o nombre de usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" name="pass" placeholder="Password" />
                                            <label for="inputPassword">Contraseña</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <input type="submit" class="btn btn-primary text-center" name='ingresar' value="Ingresar">
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./registro.php">Registrarme</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="foot">
        <?php
            require("./layout/footer.php");
        ?>
    </div>
</body>
</html>