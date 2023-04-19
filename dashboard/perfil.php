<?php
session_start(); //cookis para iniciar secion
if (empty($_SESSION['id'])) {
    header('location: ./login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- descripcion de caracteres -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../img/ico/icono.png" type="image/x-icon">
    <!--funcion para colocar un icono en la pestaña del  navagador -->

    <title>Dashboard B - All in One</title>

    <!-- dar estilos al sitio web -->
    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/footer.css">

</head>

<body id="page-top">
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require('./layout/menu.php');
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                    require('./layout/header.php');
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="card">
                        <h5 class="card-header">Perfil de Administrador</h5>
                        <div class="card-body">

                            <div class="container row">
                                <div class="col-6">
                                    <img class="img-thumbnail col-3 m-5 float-start" src="./img/imagen-usuario.png"
                                        alt="...">
                                </div>
                                <div class="col-6">
                                    <label class="form-label for= " nombre">Nombre:</label>
                                    <input class="form-control col-4" type="text" id="nombre" name="nombre"><br><br>

                                    <label class="form-label for=" correo">Correo electrónico:</label>
                                    <input class="form-control col-4" type="email" id="correo" name="correo"><br><br>

                                    <label class="form-label for=" contraseña">Apellido:</label>
                                    <input class="form-control col-4" type="text" id="apellido" name="apellido"><br><br>

                                    <label class="form-label for=" bio">Nombre de Usuario:</label><br>
                                    <input class="form-control col-4" type="text" id="username" name="username">
                                    <input class="btn btn-primary m-2" type="submit" value="Guardar cambios">
                                </div>

                            </div>

                        </div>
                    </div>


                </div>

            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <div id="layoutAuthentication_footer" class="foot">
                <?php
            include "./layout/footer.php";
        ?>
            </div>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>
    <script src="./js/estadisticas.js"></script>

    <!-- Tarjetas -->
    <script src="./js/tarjetas.js"></script>


</body>

</html>