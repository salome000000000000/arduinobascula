<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <!-- JavaScript -->
    <script src="./js/jquery.min.js" type="text/javascript"></script>
    <script src="./js/calculo_precio.js" type="text/javascript"></script>
    <script src="./js/materiales.js" type="text/javascript"></script>
    <script src="./js/actualizar.js" type="text/javascript"></script>
    <script src="./js/bootstrap.min.js" type="text/javascript"></script>
    <script src="./ico/js/all.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ARCHIVOS DE ESTILO -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

    <link rel="shortcut icon" href="../img/ico/icono.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="../css/footer.css">

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
                            <a class="nav-link" href="../registro.html">Registro</a>
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
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Correo o nombre de usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" />
                                            <label for="inputPassword">Contraseña</label>
                                        </div>
                                        <!--<div class="form-check mb-3">
                                         FUNCIONA PARA RECORDAR CONTRSAEÑAS 
                                            
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label> 
                                        </div>-->
                                        <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                            <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                            <a class="btn btn-primary text-center" href="./">Ingresar</a>
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
    <div id="layoutAuthentication_footer" class="fixed-bottom">
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
</html>