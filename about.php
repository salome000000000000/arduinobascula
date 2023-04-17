<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerda de nosotros</title>


    <!-- ARCHIVOS DE ESTILO -->
    <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/footer-abajo.css">
    <link rel="stylesheet" href="./css/validacion.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="shortcut icon" href="./img/ico/icono.png" type="image/x-icon">

</head>

<body>
    <!-- ENCABEZADO -->
    <header class="shadow-lg">
        <!-- MENU DE NAVEGACION -->
        <nav class="caja-sin-border navbar navbar-expand-lg justify-content-center">
            <div class="container-fluid">
                <a class="justify-content-start logo-nav navbar-brand ms-4" href="./"><img src="./img/ico/logo.svg"
                        style="width: 12rem;"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="w-100 navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item p-2">
                            <a class="nav-link" aria-current="page" href="./">Inicio</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link" href="./dashboard/registro.php">Registro</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link active" href="./about.html">Acerca de</a>
                        </li>
                    </ul>
                    <a class="logo justify-content-end me-4" href="https://ismac.edu.ec" target="_blank"><img
                            class="logo" src="./img/soft.png" width="100px" style="filter: invert();"></a>
                </div>
            </div>
        </nav>
    </header>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-left font-weight-light ms-1 my-4">Acerca de</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row ms-2">
                                        <h1 class="h4">Misión: </h1>
                                        <p class="fw-light">Brindar un aporte más a la sociedad con nuestro producto
                                            como báscula de reciclaje ya que nos permitirá calcular y verificar el
                                            precio de
                                            las botellas; datemos nuestros conocimientos como profesionales que queremos
                                            llegar a ser.
                                        </p>
                                    </div>
                                    <div class="row ms-2">
                                        <h1 class="h4">Visión: </h1>
                                        <p class="fw-light">Ser uno de los principales proveedores de nuestro producto
                                            dando eficacia, nivel superior, calidad y autonomía
                                            brindando facilidad a nuestros clientes como mini empresa.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- Footer -->
    <div id="layoutAuthentication_footer" class="foot">
        <?php
            include "./layout/footer.php";
        ?>
    </div>
    <!-- End of Footer -->
</body>
<script src="./vendor/bootstrap/js/bootstrap.bundle.js"></script>

</html>