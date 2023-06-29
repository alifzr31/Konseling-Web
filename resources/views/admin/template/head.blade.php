<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="../img/logoft.png" rel="icon">

  @if (Route::current()->getName() == 'dashboard')
    <title>Enigma Putra Mandiri | Admin - Dashboard</title>
  @endif

  @if (Route::current()->getName() == 'listuser')
    <title>Enigma Putra Mandiri | Admin - List Data User</title>
  @endif
  
  @if (Route::current()->getName() == 'detailuser')
    <title>Enigma Putra Mandiri | Admin - Detail Data User</title>
  @endif
  
  @if (Route::current()->getName() == 'detailkonsul')
    <title>Enigma Putra Mandiri | Admin - Detail Data Konsultasi</title>
  
    <link href="../../img/logoft.png" rel="icon">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  @endif

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          @if (Route::current()->getName() == 'detailkonsul')
            <img src="../img/logo/lg2.png">
          @else
            <img src="img/logo/lg2.png">
          @endif
        </div>
        <div class="sidebar-brand-text mx-3">Enigma</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item @if (Route::current()->getName() == 'dashboard') active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data
      </div>
      <li class="nav-item @if (Route::current()->getName() == 'listuser' || Route::current()->getName() == 'detailuser') active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Autentikasi & Konsultasi</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Autentikasi</h6>
            <a class="collapse-item @if (Route::current()->getName() == 'listuser' || Route::current()->getName() == 'detailuser') active @endif" href="{{ route('listuser') }}">Data User</a>
          </div>
        </div>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Konsultasi</h6>
            <a class="collapse-item" href="simple-tables.html">General Idea</a>
            <a class="collapse-item" href="simple-tables.html">Anamnesa</a>
            <a class="collapse-item" href="datatables.html">Hipotesis</a>
          </div>
        </div>
      </li>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if (Route::current()->getName() == 'detailkonsul')
                  <img class="img-profile rounded-circle" src="../img/boy.png" style="max-width: 60px">
                @else
                  <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                @endif
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>