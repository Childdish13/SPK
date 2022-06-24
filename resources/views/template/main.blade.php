<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK-Alfa Library {{$title}}</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <img src="assets/img/AlfaLIB.png" alt="" width="60" height="60" class="rounded mx-auto d-block">
                <div class="sidebar-brand-text mx-3">SPK MOORA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ ($title === 'Home') ? 'active' : '' }}">
                <a class="nav-link " href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master User
            </div>

            <li class="nav-item {{ ($title === 'Admin') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="admin">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Edit Profile</span>
                </a>
            </li>

            <li class="nav-item {{ ($title === 'User') ? 'active' : '' }}">
                <a class="nav-link collapsed " href="user">
                    <i class="fas fa-fw fa-user-cog" aria-hidden="true"></i>
                    <span>Data User</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <div class="sidebar-heading">
                Entri Data
            </div>

            <li class="nav-item {{ ($title === 'Ebook') ? 'active' : ''}} ">
                <a class="nav-link collapsed" href="ebook">
                    <!-- <i class="fas fa-sign-out-alt fa-sm fa-fw "></i> -->
                    <i class="fas fa-book fa-sm fa-fw"></i>
                    <span>Ebook</span>
                </a>
            </li>
            <li class="nav-item {{ ($title === 'Alternatif') ? 'active' : ''}} ">
                <a class="nav-link collapsed" href="alternatif">
                    <i class="fas fa-book-open fa-sm fa-fw"></i>
                    <span>Data Alternatif</span></a>
            </li>
            <li class="nav-item {{ ($title === 'Kriteria') ? 'active' : ''}} ">
                <a class="nav-link collapsed" href="kriteria">
                    <i class="fas fa-fw fa-cube"></i>
                    <span>Data Kriteria</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="subkriteria">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>Data Sub Kriteria</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Proses Data
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Data Penilaian</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Data Perhitungan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Hasil Akhir</span></a>
            </li>

            <div class="sidebar-heading">
                Laporan Cetak
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Rangking Ebook</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-calculator"></i>
                    <span>Rekapitulasi Ebook</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw "></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('partials.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    @yield('container')

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/jquery/jquery.min.js">
    </script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js">
    </script>

</body>

</html>