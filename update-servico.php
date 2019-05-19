<?php
session_start();
require "config/config.php";

/*echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "includes/head.php"; ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <!--Sidebar-->
        <?php include "includes/sidebar.php"; ?>
        <!-- End of Sidebar -->
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include "includes/top-bar.php"; ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- card -->
                    <div class="col-xl-12 col-md-8 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <!-- Page Heading -->
                                <h1 class="h3 mb-2 text-gray-800">Editar Serviço</h1>
                                <hr>

                                <form>
                                    <div class="row">

                                        <div class="form-group col-sm-8">
                                            <label for="exampleInputEmail1">Nome</label>
                                            <input type="text" class="form-control" placeholder="Digite o nome">
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label for="exampleInputEmail1">Preco</label>
                                            <input type="text" class="form-control" placeholder="Digite o preço">
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <button type="submit" class="btn btn-primary">
                                            <i class='far fa-edit' style='font-size:16px'></i> Editar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
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

    <!-- Modal-->
    <?php 
        include "includes/modal-logout.php";
    ?>
    <!--/ fim  Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>