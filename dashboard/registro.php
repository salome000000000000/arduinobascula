<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>


    <!-- ARCHIVOS DE ESTILO -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/footer-abajo.css">
    <link rel="stylesheet" href="../css/validacion.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/ico/icono.png" type="image/x-icon">

</head>

<body>
    <!-- ENCABEZADO -->
    <header class="shadow-lg">
        <!-- MENU DE NAVEGACION -->
        <nav class="caja-sin-border navbar navbar-expand-lg justify-content-center">
            <div class="container-fluid">
                <a class="justify-content-start logo-nav navbar-brand ms-4" href="./"><img src="../img/ico/logo.svg"
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
                            <a class="nav-link active" href="#">Registro</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="./about.html">Acerca de</a>
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
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Crear cuenta</h3>
                                </div>
                                <div class="card-body">
                                    <form id="datos-usuario">
                                        <div id="mensaje-serv"></div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="name" name="name" type="text">
                                                    <label for="inputFirstName">Nombre</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item correcto"
                                                            id="val-name"><i class="fas fa-exclamation-triangle"></i>
                                                            Coloque un nombre válido.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="lastname" name="lastname"
                                                        type="text">
                                                    <label for="inputLastName">Apellido</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item correcto"
                                                            id="val-lastname"><i
                                                                class="fas fa-exclamation-triangle"></i>
                                                            Coloque un apellido válido.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" name="email" type="email">
                                            <label for="inputEmail">Correo</label>
                                            <div class="bg-transparent p-1">
                                                <span class="text-danger list-group-item correcto" id="val-email"><i
                                                        class="fas fa-exclamation-triangle"></i>
                                                    Coloque un correo válido.</span>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="username" name="username"
                                                        type="text">
                                                    <label for="username">Nombre de usuario</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item correcto"
                                                            id="val-username"><i
                                                                class="fas fa-exclamation-triangle"></i>
                                                            Coloque un nombre de usuario valido.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="code" name="code" type="text">
                                                    <label for="code">Código de rol</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item correcto"
                                                            id="val-code"><i class="fas fa-exclamation-triangle"></i>
                                                            Coloque un código válido.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password" name="password"
                                                        type="password">
                                                    <label for="inputPassword">Contraseña</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item  correcto"
                                                            id="val-password"><i
                                                                class="fas fa-exclamation-triangle"></i>
                                                            Coloque una contraseña válida.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password_conf" name="password_conf"
                                                        type='password'>
                                                    <label for="inputPasswordConfirm">Confirmar contraseña</label>
                                                    <div class="bg-transparent p-1">
                                                        <span class="text-danger list-group-item correcto"
                                                            id="val-verif"><i class="fas fa-exclamation-triangle"></i>
                                                            Las contraseñas no coinciden.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <input type="button" class="btn btn-primary" id="registrar"
                                                    name="registrar" value="Crear cuenta">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><span>Si ya tienes cuenta, </span><a class="link-primary" href="./login.php">inicia
                                            sesion</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div id="layoutAuthentication_footer">
        <!-- FOOTER -->
        <footer>
            <div class="leftFooter m-auto">
                <a class="navbar-brand" href="./"><img src="../img/ico/texto.svg"
                        style="width: 8rem; filter: invert();"></a>
            </div>

            <div class="centerFooter m-auto">
                <a href="https://www.facebook.com/TecnoUniISMAC" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="www.instagram.com/institutouniversitarioismac" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://github.com/jeffmermelada" target="_blank"><i class="fab fa-github"></i></a>
            </div>

            <div class="rightFooter m-auto">
                <ul>
                    <li><strong>&copy; Desarrollado por:</strong></li>
                    <li class="text-end">Jefferson Rios</li>
                    <li class="text-end">Jeremy Castro</li>
                </ul>
            </div>

        </footer>
    </div>
</body>

<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../js/validar_registro.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.js"></script>

</html>