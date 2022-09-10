<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/table.css">

</head>
<body>
    <!-- ENCABEZADO -->
    <header class="shadow-lg">
        <nav class="navbar">
            <ul class="nav ps-5">
                <li class="nav-item active"><a class="nav-link" href="./index.html">Inicio<span
                            class="sr-only">(current)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#registro">Registro</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">Acerca de</a></li>
            </ul>
            <a class="nav-brand justify-content-end pe-5 m-1" href="#"><img class="logo" src="./img/soft.png"
                    width="100px"></a>
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
                                            <a class="btn btn-primary text-center" href="index.html">Ingresar</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="./registro.html">Registrarme</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div id="layoutAuthentication_footer" class="container-fluid d-block position-absolute bottom-0 start-0">
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
</html>