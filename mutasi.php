<?php 
include 'conn.php';
session_start();
$stts=0;
if ((!isset($_SESSION["pengguna"]))||(!isset($_SESSION["password"])))
header('Location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/logo.png">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="jquery.orgchart.css">
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    #chart-container { height:  620px; }
    .orgchart { background: white; }
    .dropbtn {
  background-color: rgb(26, 145, 156);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.pad {

  padding-left: 20px;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}a
  </style>

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
<li>
<a href="mutasi.php" >LOG AKTIVITAS</a>
</li>
<li>
<a href="logout.php" >logout</a>
</li>
</ul>
</div>
</div>
</div>
</div>
        <div class="pad">

<h2>Struktur Organisasi</h2>
<p>Pilih Wilayah Untuk dimutasikan</p>

<select id="go" onchange="myFunctiongo()">
<option value="mutasi.php" selected>Unit Induk Wilayah (UIW)</option>
<option value="mutasiup3.php?unit2=Unit Pelaksana Pelayanan Pelanggan (UP3) Binjai">Manager Unit Pelaksana Pelayanan Pelanggan ( UP3 )</option>
<option value="MUTASIUP2.PHP?unit2=Unit Pelaksana Pengatur Distribusi (UP2D) Sumatera Utara ">Unit Pelaksana Pengatur Distribusi (UP2D) Sumatera Utara</option>
<option value="UP2k.php?unit2=Unit Pelaksana Proyek Ketenagalistrikan (UP2K) Provinsi Sumatera Utara">Unit Pelaksana Proyek Ketenagalistrikan (UP2K) Provinsi Sumatera Utara</option>
<option value="ULP.PHP?unit1=Unit Layanan Pelanggan (ULP) Binjai Barat">Unit Layanan Pelanggan (ULP)</option>
<option value="ULPnias.PHP?unit1=Unit Layanan Pelanggan (ULP) Nias Barat" >Unit Layanan Pelanggan (ULP) NIAS</option>
<option value="UP3nias.PHP?unit2=Unit Pelaksana Pelayanan Pelanggan (UP3) Nias" >Unit Pelaksana Pelayanan Pelanggan (UP3) Nias</option>
</select>


 <div id="chart-container"></div>
</div></div>
 <script>
 function myFunctiongo() {
  var x = document.getElementById("go").value;
  window.location = x;
}
</script>

 <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.orgchart.js"></script>
  <script type="text/javascript">
   var nama = 'Jabatan';
    $(function() {

    var datascource = {
      'name': nama,
      <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'General Manager'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip =0 ;
      }
      ?>
          'name': nama, 'title': 'General Manager<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
      'children': [

          { 'name': nama, 'title': '* ' ,
          'children':[

                { 
                    <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Pejabat Pelaksana Keselamatan<br>,kesehatan kerja dan lingkungan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                    'name': nama, 'title': 'Pejabat Pelaksana Keselamatan<br>,kesehatan kerja dan lingkungan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
                { 
                    <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Pejabat Pelaksana Keselamatan<br>,kesehatan kerja dan lingkungan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }?>
                    'name': nama, 'title': 'Pejabat Pelaksana Pengadaan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
                { 
                    <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Pejabat Perencana Pengadaan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }?>
                    'name': nama, 'title': 'Pejabat Perencana Pengadaan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        ]
},  
        
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Senior Manager Keuangan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Senior Manager Keuangan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
          'children': [
            { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Akuntansi'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Manager Akuntansi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
            'children': [                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Akuntansi AT dan PDP'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip =0 ;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Akuntansi AT dan PDP<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Akuntansi Umum dan Biaya'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Akuntansi Umum dan Biaya<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
                        ]
            },

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Keuangan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Keuangan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pengelolaan Pendapatan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Pengelolaan Pendapatan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pembayaran'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Pembayaran<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
            <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pembayaran'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
            'name': nama, 'title': 'Assistant Manager Pembayaran<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
            <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pajak dan Asuransi'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
            'name': nama, 'title': 'Assistant Manager Pajak dan Asuransi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
        
                          ]
            }

          ]
        },



         { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Senior Manager Niaga dan Pelayanan Pelanggan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
           'name': nama, 'title': 'Senior Manager Niaga dan Pelayanan Pelanggan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
          'children': [
            { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Administrasi Niaga'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Manager Administrasi Niaga<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
            'children': [                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pengendalian Piutang'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Pengendalian Piutang<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        
                        ]
            
            },
 {  <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Layanan Prioritas'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
   
   'name': nama, 'title': 'Manager Layanan Prioritas<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>'},
  { 
    <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Pengelolaan Pembangkit Independent Power Producer dan Excess Power'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
    'name': nama, 'title': 'Manager Pengelolaan Pembangkit Independent Power Producer dan Excess Power<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>'},     

            { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Revenue Assurance dan Mekanisme Niaga'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Manager Revenue Assurance dan Mekanisme Niaga<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Revenue Assurancea'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Assistant Manager Revenue Assurance<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Strategi Pemasaran'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                  'name': nama, 'title': 'Manager Strategi Pemasaran<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
            <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Manajemen Billing'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
            'name': nama, 'title': 'Assistant Manager Manajemen Billing<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
            <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Contact Center Supervisor'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
            'name': nama, 'title': 'Assistant Manager Contact Center Supervisor<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
                             ]
            }

          ]
        },
    
 { 
  <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Senior Manager Perencanaan'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
   'name': nama, 'title': 'Senior Manager Perencanaan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
          'children': [
            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Perencanaan Sistem Kelistrikan'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Perencanaan Sistem Kelistrikan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Perencanaan Pengusahaan'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title':'Manager Perencanaan Pengusahaan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
        
                        ]
            },

{ 
  <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Senior Manager Sumber Daya Manusia dan Umum'";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
  'name': nama, 'title': 'Senior Manager Sumber Daya Manusia dan Umum<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
          'children': [
            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Administrasi SDM'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>

              'name': nama, 'title': 'Manager Administrasi SDM<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
            'children': [                 
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Administrasi SDM'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Assistant Manager Administrasi SDM<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Hubungan Industrial dan Pengawasan Tenaga Kerja'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Hubungan Industrial dan Pengawasan Tenaga Kerja<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Kesejahteraan Pegawai'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Assistant Manager Kesejahteraan Pegawai<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
                        ]
            },


            {
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Administrasi Umum dan Fasilitas'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      }
      else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Administrasi Umum dan Fasilitas<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [                
        {
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pengelolaan Fasilitas Kantor'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
           'name': nama, 'title': 'Assistant Manager Pengelolaan Fasilitas Kantor<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Sekretariat'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Sekretariat<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
        
                          ]
            },
      { 
        <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Komunikasi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
        'name': nama, 'title': 'Manager Komunikasi <br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [                
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Komunikasi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Komunikasi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager CSR dan PKBL'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager CSR dan PKBL<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Manajemen Stakeholder'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Manajemen Stakeholder<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
                        ]
            },
{
  <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Pengamanan dan Pendayagunaan Aset Properti'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
  'name': nama, 'title': 'Manager Pengamanan dan Pendayagunaan Aset Properti<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>'},    

            { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Pengamanan dan Pendayagunaan Aset Properti'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
                'name': nama, 'title': 'Manager Pengembangan SDM<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [                 
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = ('Assistant Manager Pengembangan SDM')";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>  
          'name': nama, 'title': 'Assistant Manager Pengembangan SDM<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = ('Assistant Manager Kinerja dan Perencanaan Tenaga Kerja')";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>  
          'name': nama, 'title': 'Assistant Manager Kinerja dan Perencanaan Tenaga Kerja<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
                             ]
            },

          ]
        },
    
  { 
    <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Senior Manager Teknik'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
    'name': nama, 'title': 'Senior Manager Teknik<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
          'children': [
            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = ('Manager Efisiensi, Pengukuran dan Mutu Sistem Distribusi')";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Efisiensi, Pengukuran dan Mutu Sistem Distribusi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
            'children': [                 
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = ('Assistant Manager Pengendalian Sistem Meter')";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>  
          'name': nama, 'title': 'Assistant Manager Pengendalian Sistem Meter<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
              { 
                <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = ('Assistant Manager Penertiban Pemakaian Tenaga Listrik')";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>  
                'name': nama, 'title': 'Assistant Manager Penertiban Pemakaian Tenaga Listrik<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>  ' }
                        ]
            },


            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Pembangkitan'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Pembangkitan<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>'},
          
      { 
        <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Pengendalian Operasi Sistem Distribusi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
        'name': nama, 'title': 'Manager Pengendalian Operasi Sistem Distribusi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [               
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager PDKB'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager PDKB<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' }
        
                          ]
    
            },

            { 
              <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Manager Perencanaan Pola Operasi dan Pemeliharaan Sistem Distribusi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
              'name': nama, 'title': 'Manager Perencanaan Pola Operasi dan Pemeliharaan Sistem Distribusi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>',
              'children': [  
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pengelolaan Aset Distribusi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Pengelolaan Aset Distribusi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Pengelolaan Konstruksi Distribusi'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Pengelolaan Konstruksi Distribusi<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        { 
          <?php
      $sql = "SELECT * FROM data_pegawai where JABATAN = 'Assistant Manager Logistik'";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              $r = $row['NAMA_PEGAWAI'];
              $nip = $row['NIP'];
          }
      } else {
          $r = "Tidak Ada Pegawai Mengisi Jabatan";
          $nip = 0;
      }
      ?>
          'name': nama, 'title': 'Assistant Manager Logistik<br><a href="kronologi.php?nip=<?php echo $nip ?>"><?php echo $r ?></a>' },
        
                             ]
           },

          ]
        },

]
    };

    $('#chart-container').orgchart({
      'data' : datascource,
      'nodeContent': 'title',
      'verticalLevel': 3,
      'visibleLevel': 4
    });

  });
  </script>
  </div>
       

<script src="js/pace.min.js" type="text/javascript"></script>
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