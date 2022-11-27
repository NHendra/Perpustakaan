<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('X-Powered-By: Prod-domProjects.com');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpus Kita</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>template/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url() ?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>KT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Perpus</b>KITA</span>
      
    </a>

    

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
         
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">


     



        

        <?php if($this->session->userdata('status') != "login"){ ?>
          <li class="header">MENU</li>
          <li class="<?php if($this->uri->segment(1)=="btamu" || $this->uri->segment(1)==""){echo "active";}?>">
          <a href="<?php echo base_url() ?>btamu">
            <i class="fa fa-book"></i> <span>Buku Pengunjung</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="dpustaka"){echo "active";}?>">
          <a href="<?php echo base_url() ?>dpustaka">
            <i class=" fa fa-book"></i> <span>Daftar Pustaka</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="header">MASUK</li>
        <li class="<?php if($this->uri->segment(1)=="login"){echo "active";}?>">
          <a href="<?php echo base_url() ?>login">
            <i class="fa fa-unlock"></i> <span>Staff Login</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        
        <?php }else{ ?>
          <li class="header">MENU ADMIN</li>
          <li class="<?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
          <a href="<?php echo base_url() ?>dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="header">LAYANAN</li>
        <li class="<?php if($this->uri->segment(1)=="pinjam"){echo "active";}?>">
          <a href="<?php echo base_url() ?>pinjam">
            <i class=" fa fa-bookmark "></i> <span>Peminjaman Buku</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="kembali"){echo "active";}?>">
          <a href="<?php echo base_url() ?>kembali">
            <i class=" fa fa-bookmark-o "></i> <span>Pengembalian Buku</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="header">TAMBAH DATA</li>
        <li class="<?php if($this->uri->segment(1)=="tpustaka"){echo "active";}?>">
          <a href="<?php echo base_url() ?>tpustaka">
            <i class="fa fa-plus"></i> <span>Tambah Pustaka</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="tanggota"){echo "active";}?>">
          <a href="<?php echo base_url() ?>tanggota">
            <i class=" fa fa-user-plus"></i> <span>Tambah Anggota</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="header">LIHAT DATA</li>
        <li class="<?php if($this->uri->segment(1)=="dpustaka"){echo "active";}?>">
          <a href="<?php echo base_url() ?>dpustaka">
            <i class=" fa fa-book"></i> <span>Daftar Pustaka</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        
        <li class="<?php if($this->uri->segment(1)=="danggota"){echo "active";}?>">
          <a href="<?php echo base_url() ?>danggota">
            <i class=" fa fa-user"></i> <span>Daftar Anggota</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="dpinjam"){echo "active";}?>">
          <a href="<?php echo base_url() ?>dpinjam">
            <i class=" fa fa-address-card-o"></i> <span>Daftar Peminjaman</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="<?php if($this->uri->segment(1)=="dtamu"){echo "active";}?>">
          <a href="<?php echo base_url() ?>dtamu">
            <i class=" fa fa-address-book-o"></i> <span>Daftar Buku Pengunjung</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="header">KELUAR</li>
        <li class="">
          <a href="<?php echo base_url('login/logout'); ?>">
            <i class=" fa fa-lock"></i> <span>Logout</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

        <?php } ?>

 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  