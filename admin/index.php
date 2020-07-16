<?php 
include 'conn.php';
session_start();
$stts=0;
if (isset($_SESSION["pass"])||isset($_SESSION["user"]))
$stts=1;

?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Pages - Admin Dashboard UI Kit - Blank Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="css/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="view-source:http://pages.revox.io/dashboard/4.1.0/html/casual/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://pages.revox.io/dashboard/4.1.0/html/casual/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="css/modern.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body class="fixed-header horizontal-menu horizontal-app-menu ">

<div class="header p-r-0 bg-primary">
<div class="header-inner header-md-height">
<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu text-white" data-toggle="horizontal-menu"></a>
<div class="">
<div class="brand inline no-border d-sm-inline-block">
<img src="assets/img/logo_white.png" alt="Telkom-inventory" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
</div>

<ul class="d-lg-inline-block d-none notification-list no-margin b-grey b-l b-r no-style p-l-30 p-r-20">
<li class="p-r-10 inline">
<div class="dropdown">
<a href="javascript:;" id="notification-center" class="header-icon pg pg-world" data-toggle="dropdown">
<span class="bubble"></span>
</a>

<div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">

<div class="notification-panel">

<div class="notification-body scrollable">

<div class="notification-item unread clearfix">

<div class="heading open">
<a href="#" class="text-complete pull-left">
<i class="pg-map fs-16 m-r-10"></i>
<span class="bold">Pengumuman</span>
<span class="fs-12 m-l-10">Laboratorium Telkom</span>
</a>
<div class="pull-right">
<div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
<div><i class="fa fa-angle-left"></i>
</div>
</div>
<span class=" time">few sec ago</span>
</div>
<div class="more-details">
<div class="more-details-inner">
<h5 class="semi-bold fs-16">“Harap memulangkan bahan yang di pinjam.”</h5>

</div>
</div>
</div>


<div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
<a href="#" class="mark"></a>
</div>

</div>



</div>


<div class="notification-footer text-center">
<a href="#" class="">Read all notifications</a>
<a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
<i class="pg-refresh_new"></i>
</a>
</div>

</div>

</div>

</div>
</li>

</ul>
</div>
<?php 
if ($stts == 1)
{

?>
<div class="d-flex align-items-center">

<div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none text-white">
<span class="semi-bold">Admin</span>
</div>
<div class="dropdown pull-right show">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
<img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown show" role="menu" x-placement="bottom-end" style="position: absolute; transform: translate3d(-90px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
<a href="logout.php" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Logout</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div></div>
<?php } else { ?>
<div class="d-flex align-items-center">

    <div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none text-white">
    <a href="login.php" class="semi-bold">Login </a>
    </div>

</div>
<?php } ?>
</div>
<div class="bg-white">
<div class="container">
<div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-close" data-toggle="horizontal-menu">
</a>
<ul>
<li>
<a href="index.php">Dashboard</a>
</li>
<li>
<a href="more.html"><span class="title">More Info</span></a>
</li>
<?php if ($stts == 1){ ?>
<li>
<a href="admin.php"><span class="title">Admin Page</span></a>
</li>
<?php } ?>
</ul>
</div>
</div>
</div>
</div>

<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content ">

<div class="modal fade stick-up" id="addNewAppModal" tabindex="-1" role="dialog" aria-labelledby="addNewAppModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header clearfix ">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
</button>
<h4 class="p-b-5"><span class="semi-bold">New</span> App</h4>
</div>
<div class="modal-body">
<p class="small-text">Create a new app using this form, make sure you fill them all</p>
<form role="form">
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>name</label>
<input id="appName" type="text" class="form-control" placeholder="Name of your app">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-12">
<div class="form-group form-group-default">
<label>Description</label>
<input id="appDescription" type="text" class="form-control" placeholder="Tell us more about it">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Price</label>
<input id="appPrice" type="text" class="form-control" placeholder="your price">
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-group-default">
<label>Notes</label>
<input id="appNotes" type="text" class="form-control" placeholder="a note">
</div>
</div>
</div>
 </form>
</div>
<div class="modal-footer">
<button id="add-app" type="button" class="btn btn-primary  btn-cons">Add</button>
<button type="button" class="btn btn-cons" data-dismiss="modal">Close</button>
</div>
</div>

</div>

</div>
<div class="bg-white">
<div class="container">
<ol class="breadcrumb breadcrumb-alt">
<li class="breadcrumb-item"><a href="#">Data komponen lab</a></li>
</ol>
</div>
</div>
    
<div class="jumbotron" data-pages="parallax" data-scroll-element=".page-container">
        <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">

                <div class="row">
                    <div class="col-xl-7 col-lg-6 ">

                        <div class="full-height">
                            <div class="card-body text-center">
                                <img class="image-responsive-height demo-mw-600" src="img/polmed.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ">
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">Getting started</div>
                            </div>
                        <div class="card-body">
                        <h3>TELKOM INVENTORY LABORATORY.</h3>
                        <p>Seputar informasi barang dan komponen lab,cek disini. </p>
                        <p class="small hint-text m-t-5">POLITEKNIK NEGERI MEDAN</p><br>
                        <a href="login.php" class="btn btn-primary btn-cons">ADMIN</a><br>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class=" no-padding    container-fixed-lg bg-white">
<div class="container">

</div>
</div>

<div class=" no-padding    container-fixed-lg bg-white">
<div class="container">

<div class="card card-transparent">
<div class="card-header ">
<div class="card-title">Search :
</div>
<div class="pull-right">
<div class="col-xs-12">
<input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="card-body">
<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
<thead>
<tr>
<th>Nama Barang</th>
<th>Type</th>
<th>Deskripsi</th>
<th>Kondisi</th>
<th>Last Update</th>
</tr>
</thead>
    <tbody>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
    <tr>
    <td class="v-align-middle semi-bold">
    <p>Resistor 1/4 w</p>
    </td>
    <td class="v-align-middle"><a href="#" class="btn btn-tag">Resistor</a>
    </td>
    <td class="v-align-middle">
    <p>Resistor atau tahanan adalah komponen elektronika yang paling sering digunakan dalam rangkaian elektronika. Sebagai penghambat arus,
         resistor memiliki berbagai nilai dengan satuan ohm yang besarnya sesuai kebutuhan.<br>
    
    <a href="" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Detail</a>

    </p>
    </td>
    <td class="v-align-middle">
    <p>Bagus</p>
    </td>
    <td class="v-align-middle">
    <p>juni 13,2019 10:13</p>
    </td>
    </tr>
   
    </tbody>
</table>
</div>
</div>

</div>
</div>

</div>

</div>
</div>
<div class="content ">

    <div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
        <i class="pg-close"></i>
        </button>
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <img src="img/resistor.jpg" width="100%">
                        </div>
                        <div class="col-lg-12 no-padding sm-m-t-10 sm-text-center">
                                <div class="card card-default bg-complete" data-pages="card">
                                    <div class="card-header ui-sortable-handle">
                                    <div class="card-title">Deskripsi
                                    </div>
                                    <div class="card-controls">
                                    <ul>
                                    <li><a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
                                    </li>
                                    <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                    </li>
                                    <li><a href="#" class="card-close" data-toggle="close"><i class="card-icon card-icon-close"></i></a>
                                    </li>
                                    </ul>
                                    </div>
                                    </div>
                                    <div class="card-body" style="display:none">
                                    <h3 class="text-white">
                                    <span class="semi-bold">Drag</span> me!</h3>
                                    <p class="text-white">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used. It has to satisfy certain criteria, not only functional, but also psychological and aesthetic. </p>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-12 no-padding sm-m-t-10 sm-text-center">
                                <div class="card card-default bg-primary" data-pages="card">
                                    <div class="card-header ui-sortable-handle">
                                    <div class="card-title">Info lebih
                                    </div>
                                    <div class="card-controls">
                                    <ul>
                                    <li><a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
                                    </li>
                                    <li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
                                    </li>
                                    <li><a href="#" class="card-close" data-toggle="close"><i class="card-icon card-icon-close"></i></a>
                                    </li>
                                    </ul>
                                    </div>
                                    </div>
                                    <div class="card-body" style="display:none">
                                    <h3 class="text-white">
                                    <span class="semi-bold">Drag</span> me!</h3>
                                    <p class="text-white">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used. It has to satisfy certain criteria, not only functional, but also psychological and aesthetic. </p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
</div>
<div class=" container   container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">Copyright © 2019 </span>
<span class="hint-text">Teknik telekomunikasi. </span>
</p>
<p class="small no-margin pull-right sm-pull-reset">
Politeknik Negeri Medan 
</p>
<div class="clearfix"></div>
</div>
</div>


<script src="js/pace.min.js" type="text/javascript"></script>
<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/popper.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-easy.js" type="text/javascript"></script>
<script src="js/jquery.unveil.min.js" type="text/javascript"></script>
<script src="js/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="js/jquery.actual.min.js"></script>
<script src="js/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="js/select2.full.min.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script src="js/switchery.min.js" type="text/javascript"></script>
<script src="js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="js/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="js/datatables.responsive.js"></script>
<script type="text/javascript" src="js/lodash.min.js"></script>


<script src="js/pages.min.js"></script>


<script src="js/datatables.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>

</body>
</html>