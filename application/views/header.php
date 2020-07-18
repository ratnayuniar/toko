<?php 
    if($this->session->userdata('username') != NULL){
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="<?php echo base_url()?>admin/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="<?php echo base_url()?>admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url()?>admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<script>
function displayResult(nama_barang){ 
 document.getElementById("result").value=nama_barang; 
}
function displayAlert(){   
 var x=document.getElementById("result").value;
    if (x==""){   
  alert("Silahkan pilih buah favoritmu!");
        form.buah[0].focus();
        return false;
    }
    else
        alert(x + " adalah buah favoritmu");
}

function tampil(){
  var hasil=document.getElementById("hasil-output");
  hasil.innerHTML="<p>AKU</p>";
}

</script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url()?>admin/index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>T</b>KL</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TOKO</b> KELONTONG</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="<?php echo base_url()?>admin/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

     
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="<?php echo base_url()?>admin/#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li >
          <a href="<?php echo base_url('beranda');?>">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-edit"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('barang'); ?>" id="bg"><i class="fa fa-circle-o"></i>Barang</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-credit-card"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             <li><a href="<?php echo base_url('pembelian'); ?>" id ="pb"><i class="fa fa-circle-o"></i>Pembelian</a></li>
             <li><a href="<?php echo base_url('penjualan'); ?>" id="pj"><i class="fa fa-circle-o"></i>Penjualan</a></li> 
            
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">  












<!--HEADERR

<!DOCTYPE html>
<html>-->

<!-- Mirrored from coderthemes.com/ubold_2.1/dark_leftbar/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Oct 2016 02:52:09 GMT -->
<!--<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>ubold/assets/images/favicon_1.ico">

    <title>YES MOTOR </title>-->

    <!-- DataTables -->
    <!--<link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>


    <link href="<?php echo base_url(); ?>ubold/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url(); ?>ubold/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
 <link href="<?php echo base_url(); ?>ubold/assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />-->

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url(); ?>ubold/assets/js/modernizr.min.js"></script>
		<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
        </script>

</head>

<!--<body class="fixed-left">-->

<!-- Begin page -->
<!--<div id="wrapper">-->

    <!-- Top Bar Start -->
    <!--<div class="topbar">-->

                <!-- LOGO -->
                <!--<div class="topbar-left">
                    <div class="text-center">
                        <a href="index-2.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>YES</span></i><i class="fa fa-motorcycle"></i><span> MOTOR</span></i></a>-->
                        <!-- Image Logo here -->
                        <!--<a href="index.html" class="logo">-->
                            <!--<i class="icon-c-logo"> <img src="<?php echo base_url(); ?>ubold/assets/images/logo_sm.png" height="42"/> </i>-->
                            <!--<span><img src="<?php echo base_url(); ?>ubold/assets/images/logo_light.png" height="20"/></span>-->
                        <!--</a>-->
                    <!--</div>
                </div>-->

                <!-- Button mobile view to collapse sidebar menu -->
                <!--<div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                          
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="<?php echo base_url(); ?>ubold/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        
                                        <li class="divider"></li>
                                        <li><a href="<?php echo base_url('login/logout'); ?>"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                       




                                    </ul>
                                </li>
                            </ul>
                        </div>-->
                        <!--/.nav-collapse -->
                    <!--</div>
                </div>
            </div>-->
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <!--<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">-->
                    <!--- Divider -->
                    <!--<div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="<?php echo base_url('beranda'); ?>" class="waves-effect"><i class="ti-home"></i> <span> Beranda </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"  id="md"><i class="ti-briefcase"></i> <span> Master Data </span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('pegawai'); ?>" id="pgw">Pegawai</a></li>
                                    <li><a href="<?php echo base_url('pengguna'); ?>" id="pgn">Pengguna</a></li>
                                    <li><a href="<?php echo base_url('supplier'); ?>" id="spl">Supplier</a></li>
                                    <li><a href="<?php echo base_url('jenis'); ?>" id="jns">Jenis</a></li>
                                    <li><a href="<?php echo base_url('merk'); ?>" id="mk">Merk</a></li>
                                    <li><a href="<?php echo base_url('barang'); ?>" id="bg">Barang</a></li>
                                    
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"  id="tran"><i class="ti-money" ></i> <span>Transaksi</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('pembelian'); ?>" id ="pb">Pembelian</a></li>
                                    <li><a href="<?php echo base_url('penjualan'); ?>" id="pj">Penjualan</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect" id="lp"><i class="ti-files"></i> <span>Laporan</span> <span class="menu-arrow"></span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo base_url('laporan_pembelian'); ?>" id="lpb">Laporan Pembelian</a></li>
                                    <li><a href="<?php echo base_url('laporan_penjualan'); ?>" id="lpj">Laporan Penjualan</a></li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>-->
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!--<div class="content-page">-->
        <!-- Start content -->
        <!--<div class="content">
            <div class="container">-->

<?php 
    }
    else redirect(base_url('login'));

    if($this->session->userdata('level') == "Karyawan"){
        echo"<script>
        document.getElementById('pgw').style.display = 'none';
        document.getElementById('pgn').style.display = 'none';
        document.getElementById('lp').style.display = 'none';
        document.getElementById('lpb').style.display = 'none';
        document.getElementById('lpj').style.display = 'none';
        </script>";
    }
 ?>

 