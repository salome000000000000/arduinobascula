<?php
    include './model/conexion_database.php';
    include './controller/registro_admin.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- ARCHIVOS DE ESTILO -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/validacion.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/table.css">

</head>

<body>
    <!-- ENCABEZADO -->
    <header class="shadow-lg">
        <nav class="navbar">
            <ul class="nav ps-5">
                <li class="nav-item active"><a class="text-light nav-link" href="./index.html">Inicio<span
                            class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="text-light nav-link" href="#registro">Registro</a></li>
                <li class="nav-item"><a class="text-light nav-link" href="#about">Acerca de</a></li>
            </ul>
            <a class="nav-brand justify-content-end pe-5 m-1" href="#"><img class="logo" src="./img/soft.png"
                    width="100px"></a>
        </nav>
    </header>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crear cuenta</h3>
                                </div>
                                <div class="card-body">
                                    <form method="POST" id="datos-usuario" onsubmit="return validacion();">
                                        <?php
                                        echo $mens_error;
                                    ?>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="name" name="name" type="text">
                                                    <label for="inputFirstName">Nombre</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="lastname" name="lastname"
                                                        type="text">
                                                    <label for="inputLastName">Apellido</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email">
                                            <label for="inputEmail">Correo</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="username" name="username"
                                                        type="text">
                                                    <label for="username">Nombre de usuario</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="code" name="code" type="text">
                                                    <label for="code">Código de rol</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password"
                                                        type="password">
                                                    <label for="inputPassword">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password_conf" name="password_conf" type='password'>
                                                    <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="errores">
                                            <ul class="list-group list-group-flush">
                                                <li class="text-danger list-group-item correcto" id="val-name"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque un nombre
                                                    valido</li>
                                                <li class="text-danger list-group-item correcto" id="val-lastname"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque un apellido
                                                    valido</li>
                                                <li class="text-danger list-group-item correcto" id="val-username"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque un nombre de
                                                    usuario valido, ejemplo: juan_perez, juan.perez, juan.2002</li>
                                                <li class="text-danger list-group-item correcto" id="val-code"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque un codigo de
                                                    rol valido</li>
                                                <li class="text-danger list-group-item correcto" id="val-email"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque un correo
                                                    valido</li>
                                                <li class="text-danger list-group-item correcto" id="val-password"><i
                                                        class="fas fa-exclamation-triangle"></i> Coloque una contraseña
                                                    valida</li>
                                                <li class="text-danger list-group-item correcto" id="val-verif"><i
                                                        class="fas fa-exclamation-triangle"></i> Las contraseñas no
                                                    coinciden</li>
                                                <li class="list-group-item list-group-item-danger correcto" id="validar-formulario"><i
                                                        class="fas fa-exclamation-triangle"></i> Complete el formulario </li>
                                            </ul>

                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input type="submit" class="btn btn-primary" name="registrar"
                                                    value="Crear cuenta">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><span>Si ya tienes cuenta, </span><a href="login.html">inicia
                                            sesion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div id="layoutAuthentication_footer" class="container-fluid">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<?php
echo '<script src="./js/validar_registro.js"></script>
<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>';

?>

</html>