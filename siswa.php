<?php
session_start();
include 'admin/koneksi.php';

if (empty($_SESSION['siswa'])) {
    echo "<script>alert('silahkan login terlebih dahulu') </script>";
        echo "<script>location='login.php'</script>";
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/images/favicon.png">
    <title>Pendaftaran Sekolah</title>
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet">
</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i>
                    
                </a> -->

                    <a class="navbar-brand" href="index.html">

                        <!-- <b class="logo-icon p-l-10">

                            <img src="admin/assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b> -->
                        <span class="logo-text">

                            <h3 class="text-center">Calon Siswa</h3>

                        </span>
                    </a>
                    <!--   <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a> -->
                </div>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                    <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="siswa.php?page=dashboard" aria-expanded="false"><i class="mdi mdi-collage"></i>Dashboard</a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="siswa.php?page=data-siswa" aria-expanded="false"><i class="mdi mdi-account-box"></i>Profil Siswa</a>
                        </li>
                    
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="" aria-expanded="false">
                                <span class="hide-menu">Dokumen Persyaratan</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="siswa.php?page=foto-siswa" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Foto Siswa</span></a></li>
                                <li class="sidebar-item"><a href="siswa.php?page=scan-rapor" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Scan Rapor</span></a></li>
                                <li class="sidebar-item"><a href="siswa.php?page=scan-kk" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Scan Kartu Keluarga</span></a></li>
                                <li class="sidebar-item"><a href="buktipendaftaran.php?id=<?=$_SESSION['siswa']['id_siswa']?>" target="_BLANK" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Cetak Bukti Pendaftaran</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="siswa.php?page=logout" aria-expanded="false"><i class="mdi mdi-arrow-left-bold"></i>Logout</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <?php
            if (isset($_GET['page'])) {
                if ($_GET['page'] == "data-siswa") {
                    include 'profilsiswa.php';
                } elseif ($_GET['page'] == "foto-siswa") {
                    include 'fotosiswa.php';
                } elseif ($_GET['page'] == "scan-rapor") {
                    include 'scan_rapor.php';
                }  elseif ($_GET['page'] == "scan-kk") {
                    include 'scan_kk.php';
                }  elseif ($_GET['page'] == "logout"){
                    include 'logout.php';
                } elseif ($_GET['page'] == "dashboard") {
                    include 'dashboard.php';
                }
            }
            ?>
        </div>
    </div>

    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/dist/js/custom.min.js"></script>
    <script src="admin/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>