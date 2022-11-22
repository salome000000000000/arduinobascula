<?php
session_start();
if (empty($_SESSION['id'])) {
    header('location: ./login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../img/ico/icono.png" type="image/x-icon">

    <title>Dashboard B - All in One</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../vendor/datatables/css/dataTables.bootstrap5.min.css">

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

                <?php
                require('./layout/header.php');
            ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between pb-4">
                        <img src="../img/ico/logo.svg" style="width: 15rem;">
                    </div>

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h5 mb-0 text-gray-800">Administrar usuarios</h2>
                    </div>
                    <!-- Content Row -->

                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col">
                            <div class="shadow mb-4">
                                <!-- Card Body -->
                                <div class="card table-responsive p-3">
                                    <table class="table" id="usuarios-tabla">
                                        <thead class="card-header">
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Cédula</th>
                                                <th>Correo</th>
                                                <th>Material</th>
                                                <th>Peso</th>
                                                <th>Precio</th>
                                                <th>Opciones</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer>
                <div class="footer footer-content-wrapper">
                    <div class="footer-col leftFooter m-auto small-50 tiny-100">
                        <a class="navbar-brand" href="../"><img src="../img/ico/texto.svg"
                                style="width: 8rem; filter: invert();"></a>
                    </div>

                    <div class="footer-col centerFooter m-auto small-50 tiny-100">
                        <a href="https://www.facebook.com/TecnoUniISMAC" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="www.instagram.com/institutouniversitarioismac" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                        <a href="https://github.com/jeffmermelada" target="_blank"><i class="fab fa-github"></i></a>
                    </div>

                    <div class="footer-col rightFooter m-auto small-50 tiny-100">
                        <ul>
                            <li><strong>&copy; Desarrollado por:</strong></li>
                            <li>Jefferson Rios</li>
                            <li>Jeremy Castro</li>
                        </ul>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Quieres cerrar sesión?</h5>
                    <button class="close" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="../controller/logout_controller.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="../vendor/DataTables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../vendor/DataTables/js/dataTables.bootstrap5.min.js"></script>

    <!-- Tarjetas -->
    <script src="./js/usuarios.js"></script>


</body>

</html>