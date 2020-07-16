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
<title>PLN-PUSAT WILAYAH SUMUT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
<script src="/cdn-cgi/apps/head/QJpHOqznaMvNOv9CGoAdo_yvYKU.js"></script><link rel="apple-touch-icon" href="pages/ico/60.png">
<link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
<link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
<link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/fontawesome-free/css/all.css" rel="stylesheet" type="text/css" />
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
    <a href="login.php" class="semi-bold">
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

<div class="page-container ">

        
    <div class=" container    container-fixed-lg">
    <div class="card card-transparent">
        <div class="card-header ">
            <div class="card-title">FIT AND PROPER
            </div>
        </div>
        <div class="card-body">
        <div class="row">
            <div class="col-md-12">
            <div class="">
                <div class="dropdown dropdown-default">
                <button class="btn dropdown-toggle text-center" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Action
                </button>
                <div class="dropdown-menu" style="width: 91.9333px; position: absolute; transform: translate3d(0px, -169px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="top-start">
                <a class="dropdown-item" href="fit.php">Input Nilai</a>
                <a class="dropdown-item" href="struktur.php">Struktur</a>
                <a class="dropdown-item" href="rekap.php">Rekap Data </a>
                </div>
            </div>
            
            <br>
           
            </div>
            <br>
            <a data-target="#modalFillIntalk" data-toggle="modal" id="btnFillSizeToggler">
            <button class="btn btn-info btn-cons m-b-10" type="button"><i class="fas fa-folder-plus"></i> <span class="bold">Edit</span></button>
            </a>
            <div class="modal fade slide-up disable-scroll" id="modalFillIntalk" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog ">
<div class="modal-content-wrapper">
    <div class="modal-content">
        <div class="modal-header clearfix text-left">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
            </button>
            <h5>Data <span class="semi-bold">Information</span></h5>
            <p class="p-b-10">Update</p>
        </div>
        <div class="modal-body">
            <form role="form" action="addfields.php" method="post" enctype="multipart/form-data">
                <div class="form-group-attached">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>name</label>
                                <input type="teks" name="nama" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>tittle</label>
                                <input type="teks" name="tittle" class="form-control" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label>key</label>
                                <input type="teks" name="key" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
           
            <div class="row">
                <div class="col-md-8">
                    <div class="p-t-20 clearfix p-l-10 p-r-10">
                        <div class="pull-left">
                            <p class="bold font-montserrat text-uppercase">Pastikan Semua Form Diisi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-t-10 sm-m-t-10">
                    <button type="submit" class="btn btn-primary btn-block m-t-5">Update</button>
                 </div>
                 </form>
            </div>
        </div>
    </div>
</div>
</div>
                  <div class="card card-transparent">
                    <div class="card-header ">
                   
                    <div class="tools">
                    <a class="collapse" href="javascript:;"></a>
                    <a class="config" data-toggle="modal" href="#grid-config"></a>
                    <a class="reload" href="javascript:;"></a>
                    <a class="remove" href="javascript:;"></a>
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <div id="condensedTable_wrapper" class="dataTables_wrapper no-footer">
                    <table class="table table-hover table-condensed dataTable no-footer" id="condensedTable" role="grid">
                    <thead>
                    <tr role="row">
                    <th style="width:100%" class="sorting_asc" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Title: activate to sort column descending">Title</th>
                    <th style="width: 100%;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Key: activate to sort column ascending">Key</th>
                    <th style="width: 100%;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">Condensed</th>
                    <th style="width: 100%;" class="sorting" tabindex="0" aria-controls="condensedTable" rowspan="1" colspan="1" aria-label="Condensed: activate to sort column ascending">Aksi</th></tr>

                    </thead>
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM fitproper";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                    ?>
                    <tr role="row" class="odd">
                    <td class="v-align-middle semi-bold sorting_1"><?php echo $row['tipe'];?></td>
                    <td class="v-align-middle"><?php echo $row['kategori'];?></td>
                    <td class="v-align-middle semi-bold"><?php echo $row['uraian'];?>
                    </td>
                    <td class="v-align-middle semi-bold">
                            <div class="btn-group">
                            
                            <button type="button" class="btn btn-success" id="btnToggleSlideUpSize" data-target="#modalSlideUp<?php echo $row['id'];?>" data-toggle="modal"><i class="fas fa-pencil-alt"></i>
                            </button>
                            <a href="dellfields.php?id=<?php echo $row['id']?>&uraian=<?php echo $row['uraian']?>"><button type="button" class="btn btn-success"><i class="fas fa-trash-alt"></i>
                            </button>
                            </div>
                    </td>
                    </tr>
                    <div class="modal fade slide-up disable-scroll" id="modalSlideUp<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog ">
<div class="modal-content-wrapper">
<div class="modal-content">
<div class="modal-header clearfix text-left">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
</button>
<h5>Update <span class="semi-bold">Data Structure</span></h5>
<p class="p-b-10">Pastikan semua data di isi</p>
</div>
<div class="modal-body">
<form role="form" method="post" action="updatesoal.php">
<div class="form-group-attached">
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-default">
<label>Tipe</label>
<input type="text" name="id" value="<?php echo $row['id'];?>" class="form-control" style="display:none">
<input type="text" name="tipe" value="<?php echo $row['tipe'];?>" class="form-control">
<input type="text" name="nama" value="<?php echo $row['uraian'];?>" class="form-control">
</div>
</div>
</div>
<div class="row">
 <div class="col-md-8">
<div class="form-group form-group-default">
<label>Kategori</label>
<input type="text" name="kategori" value="<?php echo $row['kategori'];?>" class="form-control">
</div>
</div>
<div class="col-md-4">
<div class="form-group form-group-default">
<label>Uraian</label>
<input type="text" name="uraian" value="<?php echo $row['uraian'];?>"class="form-control">
</div>
</div>
</div>
</div>
<div class="col-md-4 m-t-10 sm-m-t-10">
<button type="submit" class="btn btn-primary btn-block m-t-5">Update Now</button>
</div>
</form>
</div>
</div>
</div>
</div>

                    <?php 
                               
                            }
                        } 
                        ?>
                    </tbody>
                    </table></div>
                    </div>
                    </div>
                    </div>
                  
                    <br>
                  
                </form>
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