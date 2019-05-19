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

                    <!-- Perfil -->
                    <?php
                    if (isset($_SESSION[NBTELECOM][LOGIN][SERVICE_ID_NBTELECOM])) {
                        include "includes/perfil-nbtelecom.php";
                    }

                    if (isset($_SESSION[BAITAPLAY][LOGIN][SERVICE_ID_BAITAPLAY])) {
                        include "includes/perfil-baitaplay.php";
                    }

                    if (isset($_SESSION[ESPN][LOGIN][SERVICE_ID_ESPN])) {
                        include "includes/perfil-espn.php";
                    }
                    ?>
                    <!--/fim perfil -->
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
    <?php include "includes/modal-logout.php";?>
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