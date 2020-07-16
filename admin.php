<?php include 'conn.php';
session_start();
if (!isset($_SESSION["pass"])||!isset($_SESSION["user"]))
header('Location: login.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>POLMED-TELKOM_INVENTORY</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta content="" name="description" />
<meta content="" name="author" />
<link href="css/pace-theme-flash.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="view-source:http://pages.revox.io/dashboard/4.1.0/html/casual/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
<link href="css/nestable.css" rel="stylesheet" type="text/css" />
<link href="css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/tagsinput.css" rel="stylesheet" type="text/css" />

<link href="css/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
<link href="css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="http://pages.revox.io/dashboard/4.1.0/html/casual/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
<link class="main-stylesheet" href="css/modern.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body class="fixed-header horizontal-menu horizontal-app-menu ">

<div class="header p-r-0" style="background-color:#07c25f">
<div class="header-inner header-md-height">
<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu text-white" data-toggle="horizontal-menu"></a>
<div class="">
<div class="brand inline no-border d-sm-inline-block">
<img src="img/logo.png" alt="Telkom-inventory" data-src="img/logo.png" data-src-retina="img/logo.png" width="78" height="42">
</div>

<ul class="d-lg-inline-block d-none notification-list no-margin b-grey b-l b-r no-style p-l-30 p-r-20">
<li class="p-r-10 inline">
<a href="index.php" style="color:white"><i class="fas fa-home"></i></a>
</li>

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
<p class="small hint-text">
di himbau agar seluruh mahsiswa<br>
agar dapat mengembalikan... 
</p>
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
<div class="d-flex align-items-center">

<div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none text-white">
</div>
<div class="dropdown pull-right show">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
<img src="img/avatar.jpg" alt="" data-src="img/avatar.jpg" data-src-retina="img/avatar_small2x.jpg" width="32" height="32">
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown show" role="menu" x-placement="bottom-end" style="position: absolute; transform: translate3d(-90px, 32px, 0px); top: 0px; left: 0px; will-change: transform;">
<a href="logout.php" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">Logout</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
</div>
</div></div>
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
<a href="about.php"><span class="title">More Info</span></a>
</li>
<li>
<a href="admin.php"><span class="title">Admin Page</span></a>
</li>
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
                                <img class="image-responsive-height demo-mw-600" src="img/tables.jpg" alt="">
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
                        <p class="small hint-text m-t-5">Admin Page</p><br>
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



</div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-sm-12 col-xm-12">
                <h2>Data Komponen Lab</h2>
                <div class="table-responsive">
                    <div id="detailedTable_wrapper" class="dataTables_wrapper no-footer"><br>
                        <div class="row">
                        <div class="col-lg-4 col-sm-4 col-xm-4">
                            <button class="btn btn-green btn-lg pull-right" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xm-3"></div>
                            <div class="col-lg-5 col-sm-5 col-xm-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text primary"><i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Search" class="form-control">
                            </div>
                            </div>
                        </div>
                        <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                                <thead>
                                <tr role="row">
                                <th style="width:25%" class="sorting_disabled" rowspan="1" colspan="1">Nama</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Jenis</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Merk</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">kelas</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $sql = "SELECT * FROM komponen";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                                                       

                                ?>
                                <tr role="row" class="odd" onclick="myFunction()">
                                <td class="v-align-middle semi-bold"><?php echo $row['nama'];?></td>
                                <td class="v-align-middle"><?php echo $row['jenis'];?></td>
                                <td class="v-align-middle semi-bold"><?php echo $row['merk'];?></td>
                                <td class="v-align-middle"><?php echo $row['kelas'];?></td>
                                </tr>
                                <tr class="row-details" id="detail" style="display:none">
                                    <td colspan="4" >
                                        <table class="table table-inline" >
                                        <tbody>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td><?php echo $row['deskripsi'];?></td>
                                            <td rowspan="3">
                                                <button class="btn btn-complete btn-cons">Update</button>
                                                <button class="btn btn-danger btn-cons">Delete</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Foto</td>
                                            <td><img src="img/<?php echo $row['foto'];?>" width=20%></td>
                                        </tr>
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <?php 
                                        }
                                    }
                                

                                ?>
                                </tbody>
                        </table>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-around">
                        <div></div>
                        <div></div>
                        <div>
                            <div class="btn-group btn-group-toggle"  data-toggle="buttons">
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option1"> <i class="fas fa-chevron-circle-left"></i>
                                </label>
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option2"><i class="fas fa-chevron-circle-right"></i>
                                </label>
                            </div>
                        </div>
                        </div>
                <hr>
            </div>
            <div class="col-lg-5 col-sm-12 col-xm-12">
                <h2>Data Jenis Komponen</h2>
                <div class="table-responsive">
                    <div id="detailedTable_wrapper" class="dataTables_wrapper no-footer"><br>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xm-4">
                            <button class="btn btn-green btn-lg pull-right" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xm-3"></div>
                            <div class="col-lg-5 col-sm-5 col-xm-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text primary"><i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Search" class="form-control">
                            </div>
                            </div>
                        </div>
                        <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                                <thead>
                                <tr role="row">
                                <th style="width:25%" class="sorting_disabled" rowspan="1" colspan="1">Nama</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Merk</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                <td class="v-align-middle semi-bold">Revolution Begins</td>
                                <td class="v-align-middle">Active</td>
                                <td class="v-align-middle semi-bold">40,000 USD</td>
                                </tr>
                                </tbody>
                        </table>
                    </div>
                </div>
                <div style="display: flex; justify-content: space-around">
                        <div></div>
                        <div></div>
                        <div>
                            <div class="btn-group btn-group-toggle"  data-toggle="buttons">
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option1"> <i class="fas fa-chevron-circle-left"></i>
                                </label>
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option2"><i class="fas fa-chevron-circle-right"></i>
                                </label>
                            </div>
                        </div>
                        </div>
                <hr>
            </div>
            
            <div class="col-lg-6 col-sm-12 col-xm-12">
                <br><br>
                <h2>Pengumuman</h2>
                <div class="table-responsive">
                    <div id="detailedTable_wrapper" class="dataTables_wrapper no-footer"><br>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xm-4">
                            <button class="btn btn-green btn-lg pull-right" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xm-3"></div>
                            <div class="col-lg-5 col-sm-5 col-xm-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text primary"><i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Search" class="form-control">
                            </div>
                            </div>
                        </div>
                        <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                                <thead>
                                <tr role="row">
                                <th style="width:25%" class="sorting_disabled" rowspan="1" colspan="1">Judul</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Tanggal</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Teks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                <td class="v-align-middle semi-bold">Revolution Begins</td>
                                <td class="v-align-middle">Active</td>
                                <td class="v-align-middle semi-bold">40,000 USD</td>
                                </tr>
                                </tbody>
                        </table>
                        <br>
                        <div style="display: flex; justify-content: space-around">
                        <div></div>
                        <div></div>
                        <div>
                            <div class="btn-group btn-group-toggle"  data-toggle="buttons">
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option1"> <i class="fas fa-chevron-circle-left"></i>
                                </label>
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option2"><i class="fas fa-chevron-circle-right"></i>
                                </label>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-6 col-sm-12 col-xm-12">
                <br><br>
                <h2>Data Lab</h2>
                <div class="table-responsive">
                    <div id="detailedTable_wrapper" class="dataTables_wrapper no-footer"><br>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4 col-xm-4">
                            <button class="btn btn-green btn-lg pull-right" data-target="#modalFillIn2" data-toggle="modal" id="btnFillSizeToggler"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xm-3"></div>
                            <div class="col-lg-5 col-sm-5 col-xm-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text primary"><i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Search" class="form-control">
                            </div>
                            </div>
                        </div>
                        <table class="table table-hover table-condensed table-detailed dataTable no-footer" id="detailedTable" role="grid">
                                <thead>
                                <tr role="row">
                                <th style="width:25%" class="sorting_disabled" rowspan="1" colspan="1">Ruangan</th>
                                <th style="width: 133px;" class="sorting_disabled" rowspan="1" colspan="1">Komponen Tersedia</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $sql = "SELECT * FROM kelas";
                                    $result = mysqli_query($conn, $sql);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                                                       

                                ?>
                                <tr role="row" class="odd">
                                <td class="v-align-middle semi-bold"><?php  echo $row["nama"]?></td>
                                <td class="v-align-middle">
                                <?php
                                    $sqli="SELECT * FROM komponen WHERE kelas = '".$row['nama']."'";

                                    if ($resulti=mysqli_query($conn,$sqli))
                                    {
                                        $rowcount=mysqli_num_rows($resulti);
                                        printf($rowcount);
                                        mysqli_free_result($resulti);
                                    }
                                ?>
                                </td>
                                <td>
                                        <div class="btn-group">
                                        <button type="button" class="btn btn-success"><i class="fas fa-pencil-alt"></i>
                                        </button>
                                        <button type="button" class="btn btn-success"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        </div>
                                </td>
                                </tr>
                                <?php 
                                 }
                                    } else {
                                        echo "0 results";
                                    }     
                                ?>
                                </tbody>
                        </table>
                        <br>
                        <div style="display: flex; justify-content: space-around">
                        <div></div>
                        <div></div>
                        <div>
                            <div class="btn-group btn-group-toggle"  data-toggle="buttons">
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option1"> <i class="fas fa-chevron-circle-left"></i>
                                </label>
                                <label class="btn btn-complete">
                                <input type="radio" name="options" id="option2"><i class="fas fa-chevron-circle-right"></i>
                                </label>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
<script>
  var x = document.getElementById("detail");
  function myFunction() {
  if (x.style.display === "none") {
    x.style.display = "";
  } else {
    x.style.display = "none";
  }
} 
</script>
<div class="content ">

                    
<div class="modal fade fill-in" id="modalFillIn2" tabindex="-1" role="dialog" aria-hidden="true">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
<i class="pg-close"></i>
</button>
<div class="modal-dialog ">
<div class="modal-content">
<div class="modal-header">
<h5 class="text-left p-b-5"><span class="semi-bold">Create New</span> Room</h5>
</div>
<div class="modal-body">
<form action="addkelas.php" method="post">
<div class="row">
<div class="col-lg-12 ">
<input type="text" placeholder="Name" class="form-control input-lg" id="icon-filter" name="name">
</div>
<div class="col-lg-12 no-padding sm-m-t-10 sm-text-center"><br>
<center><button type="submit" class="btn btn-primary btn-lg btn-large fs-15">Submit</button></center>
</div>
</form>
</div>

</div>
<div class="modal-footer">
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
                <div class="modal-header">
                <h5 class="text-left p-b-5"><span class="semi-bold">Create New</span> Data</h5>
                </div>
                <div class="modal-body">
                <div class="row">
                <div class="col-lg-6 ">
                <input type="text" placeholder="Nama" class="form-control input-lg" id="icon-filter" name="icon-filter">
                </div>
                <div class="col-lg-6 ">
                <input type="text" placeholder="Merk" class="form-control input-lg" id="icon-filter" name="icon-filter">
                </div>
                <div class="col-lg-6 ">
                <input type="text" placeholder="produksi" class="form-control input-lg" id="icon-filter" name="icon-filter">
                </div>
                <div class="col-lg-6 ">
                <input type="text" placeholder="fungsi" class="form-control input-lg" id="icon-filter" name="icon-filter">
                </div>
                <div class="col-md-12">
                <textarea class="form-control" id="name" placeholder="Keterangan" aria-invalid="false"></textarea>
                </div>
                <div class="col-md-2"><br><center>
                <input type="file" >        
                </center>       
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-3">Merk
                    <div class="cs-wrapper">
                        <div class="cs-select cs-skin-slide" tabindex="0">
                            <select class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                            <option value="sightseeing">Wee</option>
                            <option value="business">Helvetica</option>
                            <option value="honeymoon">SegeoUI</option>
                            </select>
                            <div class="cs-backdrop" style="transform: scale3d(1, 1, 1);"></div>
                    </div>
                </div>
                </div>
                <div class="col-lg-12 no-padding sm-m-t-10 sm-text-center"><br>
                <center><button type="button" class="btn btn-primary btn-lg btn-large fs-15">Submit</button></center>
                </div>
                </div>
                
                </div>
                <div class="modal-footer">
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
<script src="js/jquery.nestable.js" type="text/javascript"></script>

<script src="   js/form_elements.js" type="text/javascript"></script>

<script src="js/pages.min.js"></script>


<script src="js/nestables.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>


</body>
</html>