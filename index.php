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
<a href="download.php" style="color:white" >download Data <i class="fas fa-file-download"></i></a>
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
<a href="aktivitas.php" >LOG AKTIVITAS</a>
</li>
<li>
<a href="logout.php" >logout</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-container ">

<div class="page-content-wrapper ">

<div class="content ">

<div class="jumbotron" data-pages="parallax" data-scroll-element=".page-container">
        <div class=" container p-l-0 p-r-0   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">

                <div class="row">
                    <div class="col-xl-7 col-lg-6 ">

                        <div class="full-height">
                            <div class="card-body text-center">
                                <img class="image-responsive-height demo-mw-600" src="img/mutasi.gif" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ">
                        <div class="card card-transparent">
                            <div class="card-header ">
                                <div class="card-title">Getting started</div>
                            </div>
                        <div class="card-body">
                        <h3>Sistem Mutasi PLN Pusat wilayah.</h3>
                        <p>Provinsi Sumatera Utara. </p>
                        <p class="small hint-text m-t-5">MEDAN</p><br>
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

<div class="container-fixed-lg bg-white">
<div class="container" style="padding-top:80px">
<center>
<img class="sm-image-responsive-height" src="img/search.png" data-src="img/search.png" data-src-retina="img/search.png" alt="" width="612" height="69">
</center>
<div class="card card-transparent">
<div class="card-header ">
<div class="card-title">Search :
</div>

<div class="clearfix"></div>
</div>
<div class="card-body">
<div class="input-group transparent">
<div class="input-group-prepend">
<span class="input-group-text transparent"><i class="fas fa-user-tag"></i>
</span>
</div>
<input oninput="w3.filterHTML('#tableWithDynamicRows', 'tr', this.value); w3.show('#id01')" id="searching" type="text" placeholder="Username" class="form-control">
</div>
</div>
</div>


<div id="tableWithDynamicRows_wrapper" class="dataTables_wrapper no-footer"><div>
<div  style="width: 100%;  height: 510px;  overflow: auto;">
<table  class="table table-hover demo-table-dynamic table-responsive-block dataTable no-footer" id="tableWithDynamicRows" role="grid" aria-describedby="tableWithDynamicRows_info">
<thead>
<tr role="row">
<th class="sorting_asc" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" aria-sort="ascending" aria-label="App name: activate to sort column descending">NIP</th>
<th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" style="width: 279px;" aria-label="Description: activate to sort column ascending">NAMA</th>
<th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" style="width: 172px;" aria-label="Price: activate to sort column ascending">JABATAN</th>
<th class="sorting" tabindex="0" aria-controls="tableWithDynamicRows" rowspan="1" colspan="1" style="width: 225.5px;" aria-label="Notes: activate to sort column ascending">SERTIFIKASI KEAHLIAN</th></tr>


</thead>
<tbody>
<?php
    $sql = "SELECT * FROM data_pegawai";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
           
?>
    <tr role="row" class="odd">
    <td class="v-align-middle sorting_1">
    <p> <?php echo $row["NIP"];?></p>
    </td>
    <td class="v-align-middle">
    <p><?php echo $row["NAMA_PEGAWAI"];?></p>
    </td>
    <td class="v-align-middle">
    <p><?php echo $row["JABATAN"];?></p>
    </td>
    <td class="v-align-middle">
    <p><?php echo $row["Sertifikasi_Keahlian"];?></p>
    </td>
    <td class="v-align-middle">
    <div class="btn-group">
    <a href="dellpeg.php?id=<?php echo $row["NIP"];?>" type="button" class="btn btn-default"><i class="fas fa-trash-alt"></i>
    </a>
    <button type="button" class="btn btn-default" onclick="myFunction('<?php echo $row["NIP"];?>')"><i class="far fa-check-circle"></i>
    </button>
    <div class="btn-group dropdown dropdown-default">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
    </button>
    <div class="dropdown-menu" style="width: 91.9333px;">
    <a class="dropdown-item" href=""data-target="#modalStickUpSmall<?php echo $row['NIP']?>" data-toggle="modal">Talenta</a>
    <a class="dropdown-item" href="kronologi.php?nip=<?php echo $row['NIP']?>"><i class="fas fa-eye"></i> History</a>
    <a class="dropdown-item" href="fit.php?nip=<?php echo $row['NIP']?>">Fit & Proper </a>
    </div>
    </div>
    </div>
    </td>
</tr>
    
<div class="modal fade stick-up" id="modalStickUpSmall<?php echo $row['NIP']?>" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content-wrapper">
<div class="modal-content">
<div class="modal-header clearfix text-left">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
</button>
<h5>Talenta</h5>
</div>
<div class="modal-body" style=" width: 100%;  height: 400px;  overflow: auto;">
<p class="no-margin">
<form method="post" action="addtalen.php">
<div class="row">
                <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <label>Tahun</label>
                        <input type="text" style="display:none" name="nama" class="form-control" value="<?php echo $row['NIP']?>">
                        <input type="text" name="nip" style="display:none" class="form-control" value="<?php echo $row['NAMA_PEGAWAI']?>">
                        <input type="text" name="tahun" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <label>Semester</label>
                        <input type="text" name="semester" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <label>Talenta</label>
                        <input type="text" name="talen" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group form-group-default">
                        <div class="btn-group sm-m-t-10">
                            <button type="submit" class="btn btn-default"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                        </div>
                </div>
            </div>
            </form>
<?php 
    $sqlz = "SELECT * FROM talenta where nip = '".$row['NIP']."' ORDER BY id desc";
    $resultz = mysqli_query($conn, $sqlz);
    
    if (mysqli_num_rows($resultz) > 0) {
        // output data of each row
        while($rowz = mysqli_fetch_assoc($resultz)) {
           
?>          <form action ="updttalen.php" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group form-group-default">
                        <label><?php echo $rowz['TAHUN']." (semester : ".$rowz['SEMESTER'].")" ?></label>
                        <input name="talenta" type="text" class="form-control" value="<?php  echo $rowz['TALENTA'] ?>">
                        <input name="id" style="display:none" type="text" class="form-control" value="<?php  echo $rowz['ID'] ?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group form-group-default">
                        <div class="btn-group sm-m-t-10">
                            <button  type="submit" class="btn btn-default"><i class="fa fa-save"></i>
                            </button>
                        </div>
                        </form>
                        <div class="btn-group sm-m-t-10">
                            <a href="delltalen.php?id=<?php echo $rowz['ID']?>" type="button" class="btn btn-default"><i class="fa fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } 
    }
    ?>
        </p>
        </div>
<div class="modal-footer">
<button type="button" class="btn btn-default btn-cons no-margin pull-left inline" data-dismiss="modal">Cancel</button>
</div>
</div>
</div>

<?php 
 }
}
?>
</tbody>
</table></div></div>

<br>
<center>
<h3>
Data pegawai akan tampilkan<br>
setelah melakukan pencarian
<h3> 
</center>   
<br>
<br>

</div>
</div>

</div>

</div>

<div class=" container container-fixed-lg">
<div class="card card-white" style="width: 100%;  height: 500px;  overflow: auto;">
<div class="cardo" style="display:">
<div class="alert alert-info d-flex" role="alert">
<p class="mr-auto overflow-ellipsis col-6 no-padding">CEK DATA ANDA DI BAWAH INI!</p>
</p>
</div>
</div>
<div class="card-header ">
<div class="card-title">
</div>
</div>
<div class="card-body sortable">
<div class="row">
<?php
    $sql = "SELECT * FROM data_pegawai";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $sum = 0 ;  
            $index = 0;
         
           
?>
<div class="col-lg-6 sortable-column" id="<?php echo $row["NIP"];?>" style="display:none" >
<div class="card card-default" data-pages="card">
<div class="card-header ">
<div class="card-title"><?php echo $row["NIP"];?>
</div>
<div class="card-controls"> 
<ul>
<li><a href="#" class="card-collapse" data-toggle="collapse"><i class="card-icon card-icon-collapse"></i></a>
</li>
<li><a href="#" class="card-refresh" data-toggle="refresh"><i class="card-icon card-icon-refresh"></i></a>
</li>
<li><a href="#" class="card-close" onclick="myFunction2('<?php echo $row["NIP"];?>')"><i class="card-icon card-icon-close"></i></a>
</li>
</ul>
</div>
</div>
<div class="card-body" >
<p class="text-black">
<h3><b><?php echo $row["NAMA_PEGAWAI"];?></b></h3>
    <div class="row" >
        <table>
        <tr>
            <td>JABATAN</td>
            <td> <?php echo $row["JABATAN"];?></td>
        </tr>
        <tr>
            <td>UNIT 1</td>
            <td><?php echo $row["UNIT1"];?></td>
        </tr>
        <tr>
            <td>UNIT 2</td>
            <td><?php echo $row["UNIT2"];?></td>
        </tr>
        <tr>
            <td>UNIT 3</td>
            <td> <?php echo $row["UNIT3"];?></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td> <?php echo $row["Grade"];?></td>
        </tr>
        <tr>
            <td> Jenjang_Jabatan</td>
            <td> <?php echo $row["Jenjang_Jabatan"];?></td>
        </tr>
        <tr>
            <td>Tempat_Lahir</td>
            <td> <?php echo $row["Tempat_Lahir"];?></td>
        </tr>
        <tr>
            <td>Tanggal_Pegawai_Tetap</td>
            <td><?php echo $row["Tanggal_Pegawai_Tetap"];?></td>
        </tr>
        <tr>
            <td>Tanggal_UPK</td>
            <td><?php echo $row["Tanggal_UPK"];?></td>
        </tr>
        <tr>
            <td>Tanggal_Lulus_SE_1</td>
            <td> <?php echo $row["Tanggal_Lulus_SE_1"];?></td>
        </tr>
        <tr>
            <td>Tanggal_Lulus_EE3</td>
            <td> <?php echo $row["Tanggal_Lulus_EE_3"];?></td>
        </tr>
        <tr>
            <td>Tanggal_Grade_Terakhir</td>
            <td><?php echo $row["Tanggal_Grade_Terakhir"];?></td>
        </tr>
        <tr>
            <td>Tanggal_Mutasi</td>
            <td><?php echo $row["Tanggal_Mutasi"];?></td>
        </tr>
        <tr>
            <td> Gender</td>
            <td> <?php echo $row["Gender"];?></td>
        </tr>
        <tr>
            <td>Status_Pernikahan</td>
            <td><?php echo $row["Status_Pernikahan"];?></td>
        </tr>
        <tr>
            <td>Jumlah_Anak</td>
            <td> <?php echo $row["Jumlah_Anak"];?></td>
        </tr>
        <tr>
            <td>Pernikahan_Antar_Pegawai</td>
            <td><?php echo $row["Pernikahan_Antar_Pegawai"];?></td>
        </tr>
        <tr>
            <td>  Religious_Denomination_Key</td>
            <td> <?php echo $row["Religious_Denomination_Key"];?></td>
        </tr>
        <tr>
            <td> Alamat</td>
            <td>  <?php echo $row["Alamat"];?></td>
        </tr>
        <tr>
            <td>   Telephone_no</td>
            <td><?php echo $row["Telephone_no"];?></td>
        </tr>
        <tr>
            <td> Email</td>
            <td> <?php echo $row["Email"];?></td>
        </tr>
        <tr>
            <td> Pendidikan_Terakhir</td>
            <td> <?php echo $row["Pendidikan_Terakhir"];?></td>
        </tr>
        <?php 
            $sqls = "SELECT * FROM p_jabatan";
            $results = $conn->query($sqls);
            
            if ($results->num_rows > 0) {
                // output data of each row
                while($rows = $results->fetch_assoc()) {
                    $index = 0 ;
                    $sum = 0;
                    $indexo = 0; 
                    
                    ?>
                     <tr>
                        <td> <?php echo $rows["nama"];?></td>
                        <?php 
                           
                            $sqlss = "SELECT * FROM jawaban where nip = '".$row["NIP"]."' AND proyeksi_jabatan = '".$rows['nama']."'";
                            $resultss = $conn->query($sqlss);
                            
                            if ($resultss->num_rows > 0) {
                                // output data of each row
                                while($rowss = $resultss->fetch_assoc()) {
                                    $sqlrs = "SELECT * FROM  fitproper";
                                    $resultrs = $conn->query($sqlrs);
                                    $index = 0 ;
                                    $sum = 0;
                                    $indexo = 0; 
                                    if ($resultrs->num_rows > 0) {
                                        // output data of each row
                                        while($rowrs = $resultrs->fetch_assoc()) {
                                            if ($index % 2  == 0)
                                            {
                                                $sum = $sum + $rowss[$rowrs['uraian']];
                                                $indexo++;
                                            }    
                                            $index++;
                                        }
                                    }
                            }
                        }
                            ?>
                        <td> <?php if ($indexo > 0 ){echo $sum/$indexo;} else echo "0"?></td>
                    </tr>
                    <?php
                }
            }
        ?>
        
        <tr>
            <td> Sertifikasi_Keahlian</td>
            <td> <?php echo $row["Sertifikasi_Keahlian"];?></td>
        </tr>
     </table>
    </div>
</p>
</div>
</div>
</div>
<?php 
        }
    }
?>

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