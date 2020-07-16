<?php 
include 'conn.php';
session_start();
$stts=0;
if ((!isset($_SESSION["pengguna"]))||(!isset($_SESSION["password"])))
header('Location:login.php');
if (!(isset($_GET['nip'])))
header("location:index.php");
$nip = $_GET['nip'];
?>
<!DOCTYPE html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>PLN-PUSAT WILAYAH SUMUT</title>
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
<link href="css/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-tagsinput.css" rel="stylesheet" type="text/css" />
<link href="css/dropzone.css" rel="stylesheet" type="text/css" />
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
<link href="css/jquery.nestable.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body class="fixed-header horizontal-menu horizontal-app-menu ">

<div class="header p-r-0 bg-primary">
<div class="header-inner header-md-height">
<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu text-white" data-toggle="horizontal-menu"></a>
<div class="">
<div class="brand inline no-border d-sm-inline-block">
<img src="img/logo.png" alt="Telkom-inventory" data-src="img/logo.png" data-src-retina="img/logo.png" width="78" height="42">
</div>

<ul class="d-lg-inline-block d-none notification-list no-margin b-grey b-l b-r no-style p-l-30 p-r-20">
</li>
<li class="p-r-10 inline">
<a href="#searching" style="color:white"><i class="fas fa-search"></i></a>
</li>
<li class="p-r-10 inline">
<a href="" style="color:white" data-target="#modalStickUpSmall" data-toggle="modal">Upload Data</a>
</li>
<li class="p-r-10 inline">
<div class="dropdown"> 


</ul>
</div>
<?php 
if ($stts == 1)
{

?>
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
<?php } else { ?>
<div class="d-flex align-items-center">

    <div class="pull-left p-r-10 fs-14 font-heading d-lg-inline-block d-none text-white">
    <a href="logout.php" class="semi-bold">
    <span class="thumbnail-wrapper d32 circular inline sm-m-r-5"> 
    <i class="fas fa-sign-in-alt"></i>
        </span>    
    </a>
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
<a href="fit.php">FIT AND PROPER</a>
</li>
<li>
<a href="mutasi.php" >MUTASI PEGAWAI</a>
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
    <form method="post" enctype="multipart/form-data" action="update.php">
    <div class="card card-transparent">
<ul class="nav nav-tabs nav-tabs-linetriangle d-none d-md-flex d-lg-flex d-xl-flex" data-init-reponsive-tabs="dropdownfx">
<li class="nav-item">
<a href="#" class="active show" data-toggle="tab" data-target="#fade1"><i>Tab 1
</i></a>
</li>
<li class="nav-item">
<a href="#" data-toggle="tab" data-target="#fade2" class=""><span><i>Tab 2</i></span></a>
</li>
<li class="nav-item">
<a href="#" data-toggle="tab" data-target="#fade3" class=""><span><i>Tab 3</i></span></a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade active show" id="fade1">
<div class="row column-seperation">
<div class="col-lg-12">
<div class="row">
       <?php 
                                       $sql = "SELECT * FROM data_pegawai WHERE NIP = '".$_GET['nip']."'";
                                       $result = $conn->query($sql);
                                       
                                       if ($result->num_rows > 0) {
                                           while($row = $result->fetch_assoc()) {
                                           
                                       ?>
           <div class="col-xl-5 col-lg-6">
               <div class="card card-transparent">
                   <div class="card-header ">
                           <div class="card-title">RIWAYAT TERAKHIR</div>
                   </div>
                   <div class="card-body">
                           <div class="form-group form-group-default required">
                           <label>Project</label>
                           <input type="teks" value="<?php echo $row['NIP']?>" class="form-control" required="" disabled="">
                           <input type="teks" name="NIP"  value="<?php echo $row['NIP']?>" class="form-control" style="display:none">
                           </div>
                           <div class="row">
                           <div class="col-md-6">
                               <div class="form-group form-group-default">
                               <label>NAMA</label>
                               <input type="text"  name="NAMA_PEGAWAI" value="<?php echo $row['NAMA_PEGAWAI']?>" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group form-group-default">
                               <label>Grade</label>
                               <input type="text" name="Grade" value="<?php echo $row['Grade']?>" class="form-control">
                               </div>
                           </div>
                           <div class="col-md-12">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT UNIT</label>
                                 <select name="unit1" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="mySelect" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctiono()">
                                   <optgroup label="select">
                                    <option value=""></option>
                                   </optgroup>
                                       <?php
                                       $sqli = "SELECT DISTINCT unit2 FROM unit";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <optgroup label="<?php echo $rows['unit2'] ?>">
                                           <?php
                                           $sqlis = "SELECT unit1 FROM unit where unit2 = '".$rows['unit2']."'";
                                           $resultss = $conn->query($sqlis);
                                           
                                           if ($resultss->num_rows > 0) {
                                               while($rowss = $resultss->fetch_assoc()) {
                                                   if ($row['UNIT1'] == $rowss['unit1'])
                                                   {
                                           ?> 
                                                    <option value="<?php echo $rowss['unit1'] ?>" selected><?php echo $rowss['unit1'] ?></option>
                                           <?php 
                                                   }
                                                   else {
                                                   ?>
                                                   <option value="<?php echo $rowss['unit1'] ?>"><?php echo $rowss['unit1'] ?></option>
                                           <?php 
                                                   }
                                               }
                                           }
                                           ?>
                                       </optgroup>
                                        <?php 
                                           }
                                       }
                                       ?>       
                                   </select>
                                   </div>
                           </div>
                           <div class="col-md-12">
                           <div id = "uiw" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="uiw" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="uiwin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()">
                                    <optgroup label="Unit Induk Wilayah (UIW) Sumatera Utara">
                                    <option value="">select</option>
                                        <option value=""></option>  
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'Unit Induk Wilayah (UIW) Sumatera Utara'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div>      
                           <div id = "ulpnb" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="ulpnb" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="ulpnbin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Unit Layanan Pelanggan (ULP) Nias Barat">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'Unit Layanan Pelanggan (ULP) Nias Barat'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div> 
                           <div id = "up3n" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="up3n" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="up3nin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Unit Pelaksana Pelayanan Pelanggan (UP3) Nias">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'Unit Pelaksana Pelayanan Pelanggan (UP3) Nias'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div> 
                           <div id = "public" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="public" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="publicin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'public'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div>      
                           <div id = "binjaibarat" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="binjaibrt" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="bjbrt" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'Unit Layanan Pelanggan (ULP) Binjai Barat'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div>   
                           <div id = "up2d" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="up2d" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="upduad" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'UP2D'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div> 
                           <div id = "up2k" style="display:none">
                                   <div class="form-group form-group-default form-group-default-select2 ">
                                   <label class="">SELECT JABATAN</label>
                                   <select name="up2k" class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="upduak" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT * from jabatan_uiw where unit = 'UP2K'";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['jabatan'] ?>"><?php echo $rows['jabatan'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                   </div>
                           </div>          
                           </div>
                           <div class="col-md-6" >
                                <div class="form-group form-group-default">
                                    <label>Unit2</label>
                                    <select name="UNIT2"  class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="publicin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT DISTINCT unit2 from unit";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['unit2'] ?>"><?php echo $rows['unit2'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                               </div>
                            </div>
                            <div class="col-md-6" >
                                <div class="form-group form-group-default">
                                    <label>Unit3</label>
                                    <select name="UNIT3"  class="full-width select2-hidden-accessible" data-placeholder="Select UNIT" id="publicin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                    <optgroup label="Jabatan">
                                    <option value="">select</option>
                                       <?php
                                       $sqli = "SELECT DISTINCT unit3 from unit";
                                       $results = $conn->query($sqli);
                                       
                                       if ($results->num_rows > 0) {
                                           while($rows = $results->fetch_assoc()) {
                                       ?>
                                       <option value="<?php echo $rows['unit3'] ?>"><?php echo $rows['unit3'] ?></option>
                                       <?php 
                                           }
                                       }
                                       ?>      
                                    </optgroup> 
                                   </select>
                                </div>
                            </div>
                           <script>
                           
                           function myFunctiono() {
                           var x = document.getElementById("mySelect").value;
                           if (x == "Unit Induk Wilayah (UIW) Sumatera Utara")
                           {
                           document.getElementById("uiw").style.display = "";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("public").style.display = "none"; 
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("up2k").style.display = "none";
                           document.getElementById("unit2").style.display = "";
                            }
                           else
                           if (x == "Unit Layanan Pelanggan (ULP) Nias Barat"||(x == "Unit Layanan Pelanggan (ULP) Gunung Sitoli") ||(x == "Unit Layanan Pelanggan (ULP) Teluk Dalam ") )
                          { document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("public").style.display = "none";
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("up2k").style.display = "none";
                           document.getElementById("unit2").style.display = ""; 
                           } 

                           else
                           if ( (x == "Unit Pelaksana Pelayanan Pelanggan (UP3) Nias") )
                          { document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "";
                           document.getElementById("public").style.display = "none"; 
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("up2k").style.display = "none";
                           document.getElementById("unit2").style.display = ""; 
                           }
                           if ( (x == "Unit Pelaksana Pengatur Distribusi (UP2D) Sumatera Utara") )
                          { document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("up2d").style.display = "";
                           document.getElementById("public").style.display = "none"; 
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("up2k").style.display = "none";
                           document.getElementById("unit2").style.display = ""; 
                           }
                           if ( (x == "Unit Pelaksana Proyek Ketenagalistrikan (UP2K) Provinsi Sumatera Utara") )
                          { document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("up2k").style.display = "";
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("public").style.display = "none"; 
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("unit2").style.display = ""; 
                           }
                           else
                         {  
                            var n = x.search("(ULP)");
                            if (n >-1)
                            {
                                
                           document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("binjaibarat").style.display = ""; 
                           document.getElementById("public").style.display = "none";
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("unit2").style.display = ""; 
                           document.getElementById("up2k").style.display = "none";
                            }
                            else
                            {
                           document.getElementById("uiw").style.display = "none";
                           document.getElementById("ulpnb").style.display = "none";
                           document.getElementById("up3n").style.display = "none";
                           document.getElementById("binjaibarat").style.display = "none"; 
                           document.getElementById("up2d").style.display = "none";
                           document.getElementById("public").style.display = "";
                           document.getElementById("up2k").style.display = "none";
                           document.getElementById("unit2").style.display = ""; }
                           }
                           }
                          
                           </script>
                           </div>
                   </div>
               </div>
           </div>
           <div class="col-xl-7 col-lg-6">
               <div class="card card-transparent">
                   <div class="card-body">
                           <h3>
                           <div id="val"></div>
                           <div class="col-md-6">
                           <div id="hasil"></div>
                           <script>
                               function myFunctioni() {
                                var a = document.getElementById("uiw");
                                var b = document.getElementById("ulpnb");
                                var c = document.getElementById("up3n");
                                var d = document.getElementById("public");
                                var e = document.getElementById("binjaibarat");
                                var f = document.getElementById("up2d");
                                var g = document.getElementById("up2k");
                                
                                if (window.getComputedStyle(a).display === "block") {
                                    var jab = document.getElementById("uiwin").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(b).display === "block") {
                                    var jab = document.getElementById("ulpnbin").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(c).display === "block") {
                                    var jab = document.getElementById("up3nin").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(d).display === "block") {
                                    var jab = document.getElementById("publicin").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(e).display === "block") {
                                    var jab = document.getElementById("bjbrt").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(f).display === "block") {
                                    var jab = document.getElementById("upduad").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                                else
                                if (window.getComputedStyle(g).display === "block") {
                                    var jab = document.getElementById("upduak").value;
                                    document.getElementById("hasil").innerHTML = jab; 
                                }
                               }
                             
                               </script>
                               <div class="form-group form-group-default">
                                <label class="label-sm">Tempat Lahir</label>
                                <input name="Tempat_Lahir" type="text" value="<?php echo $row['Tempat_Lahir']?>" class="form-control input-sm">
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Lahir</label>
                                    <input name="Tanggal_Lahir" type="date" class="form-control" value="<?php echo $row['Tanggal_Lahir']?>" id="datepicker-component2">
                                    </div>
                                    <div class="input-group-append ">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Pegawai Tetap</label>
                                    <input name="Tanggal_Pegawai_Tetap" type="date" class="form-control" value="<?php echo $row['Tanggal_Pegawai_Tetap']?>" id="datepicker-component2">
                                    </div>
                                    <div class="input-group-append ">
                                    <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                    </div>
                                </div>
                           </div>
                           <br>
                           Perhatikan semua Form.</h3>
                           <p>Pastikan data sudah terisi semua
                           
                   </div>
               </div>
           </div>
           
</div></div>
</div>
</div>
<div class="tab-pane fade" id="fade2">
    <div class="row">
        <div class="col-lg-6">
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal UPK</label>
                                    <input type="date" name="Tanggal_UPK" class="form-control" value="<?php echo $row['Tanggal_UPK']?>" id="datepicker-component2">
                                    </div>
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Lulus SE 1</label>
                                    <input type="date" name="Tanggal_Lulus_SE_1" class="form-control" value="<?php echo $row['Tanggal_Lulus_SE_1']?>" id="datepicker-component2">
                                    </div>
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Lulus EE 3</label>
                                    <input type="date" name="Tanggal_Lulus_EE_3" class="form-control" value="<?php echo $row['Tanggal_Lulus_EE_3']?>" id="datepicker-component2">
                                    </div>
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Jumlah anak</label>
                                    <input type="number" name="Jumlah_Anak" class="form-control" value="<?php echo $row['Jumlah_Anak']?>" id="datepicker-component2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div id = "agama" class= "col-lg-4">
                                    <div class="form-group form-group-default form-group-default-select2 ">
                                        <label class="">AGAMA</label>
                                        <select name="Religious_Denomination_Key" class="full-width select2-hidden-accessible" data-placeholder="Pilih Agama" id="up3nin" data-init-plugin="select2" tabindex="-1" aria-hidden="true" onchange="myFunctioni()" >
                                            <optgroup label="Agama">
                                                <option value="Islam">Islam</option>
                                                <option value="Kristen">Kristen</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Budha">Budha</option>
                                                <option value="Kong Hu Chu">Kong Hu Chu</option>
                                            </optgroup> 
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group form-group-default">
                                        <label>Alamat</label>
                                        <input type="text" name="Alamat" value="<?php echo $row['Alamat']?>" class="form-control">
                                        </div>
                                    </div> 
                                </div> 
                        </div>
                        <div class="col-lg-6">
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Grade Terakhir</label>
                                    <input type="date" name="Tanggal_Grade_Terakhir" class="form-control" value="<?php echo $row['Tanggal_Grade_Terakhir']?>" id="datepicker-component2">
                                    </div>
                                </div>
                                <div class="form-group form-group-default input-group col-md-10">
                                    <div class="form-input-group">
                                    <label>Tanggal Mutasi</label>
                                    <input type="date" name="Tanggal_Mutasi" class="form-control" value="<?php echo $row['Tanggal_Mutasi']?>" id="datepicker-component2">
                                    </div>
                                </div>
                              
                                <div class="radio radio-success">
                                    <input type="radio" name="Gender" value="Pria" <?php if ($row['Gender'] == "Pria") {?>checked="checked"<?php }?> id="yes">
                                    <label for="yes" >Pria</label>
                                    <input type="radio" <?php if ($row['Gender'] == "Wanita") {?>checked="checked"<?php }?> value="Wanita" name="Gender" id="no">
                                    <label for="no">Wanita</label>
                                </div>
                                Status Pernikahan: <br>
                                   <div class="radio radio-success">
                                    <input type="radio" name="Status_Pernikahan" value="Kawin" <?php if ($row['Status_Pernikahan'] == "Kawin") {?>checked="checked"<?php }?> id="kawin">
                                    <label for="kawin">Kawin</label>
                                    <input type="radio" <?php if ($row['Status_Pernikahan'] == "Belum Kawin") {?>checked="checked"<?php }?> value="Belum Kawin" name="Status_Pernikahan" id="bkawin">
                                    <label for="bkawin">Belum Kawin</label>
                                    <input type="radio" <?php if ($row['Status_Pernikahan'] == "Cerai") {?>checked="checked"<?php }?> value="Cerai" name="Status_Pernikahan" id="cerai">
                                    <label for="cerai">Cerai</label>
                                </div>
                                 
                              
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fade3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group form-group-default">
                                        <label>No Telephone</label>
                                        <input type="text" name="Telephone_no" value="<?php echo $row['Telephone_no']?>" class="form-control">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-group-default">
                                        <label>Email</label>
                                        <input type="Email" name="Email" value="<?php echo $row['Email']?>" class="form-control">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-group-default">
                                        <label>Pendidikan Terakhir</label>
                                        <input type="teks" name="Pendidikan_Terakhir" value="<?php echo $row['Pendidikan_Terakhir']?>" class="form-control">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-group-default">
                                        <label>Sertifikasi Keahlian</label>
                                        <input type="teks" name="Sertifikasi_Keahlian" value="<?php echo $row['Sertifikasi_Keahlian']?>" class="form-control">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group form-group-default">
                                        <label>Pernikahan Antar Pegawi</label>
                                        <input type="teks" name="Pernikahan_Antar_Pegawai" value="<?php echo $row['Pernikahan_Antar_Pegawai']?>" class="form-control">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                            <p class="pull-right">
                                    <button class="btn btn-success btn-cons" type="submit">Submit</button>
                                </p>
                            </div>
</div>

</div>
</form>
<?php 
                                           }
                                       }
           ?>
          
</div>
</div>
        <div class="row">
                <div class="col-xl-12 col-lg-6 ">
                    <div class="card-header ">
                            <div class="card-title">R I W A Y A T &nbsp;&nbsp;&nbsp;&nbsp; K A R I R</div>
                    </div>
                        <div class="table-responsive">
                            <div id="condensedTable_wrapper" class="dataTables_wrapper no-footer">
                                <table class="table table-hover table-condensed dataTable no-footer" id="condensedTable" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th style="width:30%" class="sorting_desc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Title: activate to sort column ascending" aria-sort="descending">JABATAN</th>
                                            <th style="width: 114.6px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Key: activate to sort column ascending">START DATE</th>
                                            <th style="width: 152.8px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">UNIT 1</th>
                                            <th style="width: 152.8px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">UNIT 2</th>
                                            <th style="width: 152.8px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">UNIT 3</th>
                                            <th style="width: 152.8px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">GRADE</th>
                                            <th style="width: 152.8px;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">JENJANG JABATAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $sql = "SELECT * FROM data_pegawai WHERE NIP = '".$_GET['nip']."'";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                            
                                        ?>
                                        <tr role="row" class="odd" style="background:yellow">
                                            <td class="v-align-middle semi-bold sorting_1" style="background:yellow"><?php echo $row['JABATAN']?></td>
                                            <td class="v-align-middle"style="background:yellow"><?php echo $row['Tanggal_Mutasi']?></td>
                                            <td class="v-align-middle semi-bold" style="background:yellow"><?php echo $row['UNIT1']?></td>
                                            <td class="v-align-middle" style="background:yellow"><?php echo $row['UNIT2']?></td>
                                            <td style="background:yellow" class="v-align-middle semi-bold"><?php echo $row['UNIT3']?></td>
                                            <td style="background:yellow" class="v-align-middle"><?php echo $row['Grade']?></td>
                                            <td style="background:yellow" class="v-align-middle semi-bold"><?php echo $row['Jenjang_Jabatan']?></td>
                                        </tr>
                                        <?php
                                            }
                                        
                                
                                        }
                                    
                                        ?>
                                    <?php 
                                        $sql = "SELECT * FROM kronologi WHERE NIP = '".$_GET['nip']."'";
                                        $result = $conn->query($sql);
                                        
                                        if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()) {
                                            
                                        ?>
                                        <tr role="row" class="odd">
                                            <td class="v-align-middle semi-bold sorting_1"><?php echo $row['JABATAN']?></td>
                                            <td class="v-align-middle"><?php echo $row['startdate']?></td>
                                            <td class="v-align-middle semi-bold"><?php echo $row['UNIT1']?></td>
                                            <td class="v-align-middle"><?php echo $row['UNIT2']?></td>
                                            <td class="v-align-middle semi-bold"><?php echo $row['UNIT3']?></td>
                                            <td class="v-align-middle"><?php echo $row['Grade']?></td>
                                            <td class="v-align-middle semi-bold"><?php echo $row['Jenjang_Jabatan']?></td>
                                        </tr>
                                        <?php
                                            }
                                        
                                
                                        }
                                    
                                        ?>
                                
                                    </tbody>
                                </table>
                            </div>
                        </div>
            </div>
        
            </div>
            
        </div>
        
        <div class=" container   container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">Copyright © 2019 </span>
<span class="hint-text">PLN PUSAT WILAYAH. </span>
</p>
<p class="small no-margin pull-right sm-pull-reset">
SUMATERA UTARA 
</p>
<div class="clearfix"></div>
</div>
</div>
</div>

        <div class="modal fade stick-up" id="modalStickUpSmall" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content-wrapper">
                    <div class="modal-content">
                        <div class="modal-header clearfix text-left">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                            </button>
                            <h5>Upload File Pegawai</h5>
                        </div>
                        <div class="modal-body">
                            <p class="no-margin">
                            <form method="post" enctype="multipart/form-data" action="upload_aksi.php">
                                Pilih File: 
                                <input name="filepegawai" type="file" required="required"> 

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button  name="upload" type="submit" value="Import" class="btn btn-primary btn-cons  pull-left inline" >Import</button>
                            </form>
                            <button type="button" class="btn btn-default btn-cons no-margin pull-left inline" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        if (isset($_GET['m'])) {
                if ($_GET['m'] == 1) {
        ?>
            <div class="pgn-wrapper" data-position="bottom-right">
                <div class="pgn push-on-sidebar-open pgn-flip"> 
                    <div class="alert alert-warning">
                        <span>Pastikan Kembali Form sudah di isi semua!</span>
                        <a href=""  data-dismiss="alert" >
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php 
                }
                else
                if ($_GET['m'] == 2) {
        ?>
            <div class="pgn-wrapper" data-position="bottom-right">
                <div class="pgn push-on-sidebar-open pgn-flip"> 
                    <div class="alert alert-warning">
                        <span>Update Success...</span>
                        <a href=""  data-dismiss="alert" >
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php 
                }
                }
                ?>
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
<script type="text/javascript" src="js/dropzone.min.js"></script>

<script src="js/pages.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tagsinput.min.js"></script>
<script src="js/card.js" type="text/javascript"></script>
<script src="js/datatables.js" type="text/javascript"></script> 
<script src="js/scripts.js" type="text/javascript"></script>
<script src="https://www.w3schools.com/lib/w3.js"></script>

<script src="js/jquery.nestable.js" type="text/javascript"></script>
<script src="js/form_elements.js" type="text/javascript"></script>
<script>

function myFunction(s) {
  var x = document.getElementById(s);
    x.style.display = "";
} 
function myFunction2(s) {
  var x = document.getElementById(s);
    x.style.display = "none";
} 
</script>
</body>
</html>