<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$titlepage?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>asset/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <link rel="stylesheet" href="<?=base_url()?>asset/plugins/pace-progress/themes/black/pace-theme-flat-top.css">
  
  <link rel="stylesheet" href="<?=base_url()?>/asset/plugins/select2/css/select2.min.css">
   <link rel="stylesheet" href="<?=base_url()?>/asset/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<!-- jQuery -->
<script src="<?=base_url()?>asset/plugins/jquery/jquery.min.js"></script>
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="sidebar-mini layout-fixed  accent-info text-sm layout-navbar-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-cyan bg-primary navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge">0</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-th-large"></i>
          </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Setting
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?=base_url("index.php/login/logout")?>" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> Logout
          </a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-teal">
    <!-- Brand Logo -->
    <a href="<?=base_url()?>" class="brand-link bg-success bg-cyan bg-info">
      <!-- <img src="<?=base_url()?>asset/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Canvasser</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url()?>asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          
           <?=projectmenu("CU",base_url("home") , "fas fa-home" , "Dashbord")?>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?=projectmenu("CU",base_url("kategori/parent") , "far fa-circle" , "PARENT KATEGORI")?>
            <?=projectmenu("CU",base_url("kategori/kat") , "far fa-circle" , "KATEGORI")?>
            <?=projectmenu("CU",base_url("job") , "far fa-circle" , "PROJECT STATUS")?>
            
              
              
              
            </ul>
          </li>
          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <?=projectmenu("CR",base_url("Master/role") , "far fa-circle" , "ROLE")?>
            <?=projectmenu("CU",base_url("Master/user") , "far fa-circle" , "USER")?>
              <!-- <li class="nav-item">
                <a href="<?=base_url("/Master/role")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ROLE</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url("/Master/user")?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>USER</p>
                </a>
              </li> -->
            </ul>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h5 class="m-0"><?=$titlepage?></h5>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <?php
                $segments = $this->uri->segment_array();
                $last_segment = '';
                foreach ($segments as $segment) {
                    $last_segment .= '/' . $segment;
                    echo ' <li class="breadcrumb-item"><a href="'.base_url($last_segment).'">' . ucfirst(str_replace(array('-', '_'), '', $segment)) . '</a></li>';
                    // echo '/<a href="www.homepage.com' . $last_segment . '">' . ucfirst(str_replace(array('-', '_'), '', $segment)) . '</a>';
                }
                ?>
                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item ">Dashboard v3</li> -->
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
        <div class="container-fluid">
            <div class="row">