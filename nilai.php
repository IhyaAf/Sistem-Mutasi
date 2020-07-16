<?php 
    include 'conn.php';
    session_start();
?>
<div class="card card-transparent">
<div class="card-header ">
<div class="card-title">Pages condensed Table
</div>
<div class="tools">
<a class="collapse" href="javascript:;"></a>
<a class="config" data-toggle="modal" href="#grid-config"></a>
<a class="reload" href="javascript:;"></a>
<a class="remove" href="javascript:;"></a>
</div>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-condensed" id="condensedTable">
<thead>
<tr>

<th>Nip</th>
<th >Proyeksi_jabatan</th>
<th >Aksi</th>
</tr>
</thead>
<tbody>
<?php 
                    
                    $sql = "SELECT * FROM jawaban where nip = '".$_GET['nip']."'";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                                   ?> 
<tr>
<td class="v-align-middle semi-bold"><?php echo $row["nip"]; ?></td>
<td class="v-align-middle"><?php echo $row["proyeksi_jabatan"]; ?></td>
<td class="v-align-middle semi-bold"><a data-target="#modalFillIntalk<?php echo $row['id']?>" data-toggle="modal" id="btnFillSizeToggler"><button class="btn btn-complete btn-cons"><i class="fas fa-envelope-open-text"></i></button></a>

</td>
</tr>

<div class="modal fade slide-up disable-scroll" id="modalFillIntalk<?php echo $row['id']?>" tabindex="-1" role="dialog" aria-hidden="false">
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
        <div style="width: 100%;height: 20%;overflow: auto;">
        <form role="form" action="updtnilai.php" method="post" enctype="multipart/form-data">
                <input type="teks" value="<?php echo $row['id']; ?>" name="id" style="display:none">
            <div class="form-group-attached">
            <?php 
                    
                    $sqls = "SELECT * FROM fitproper";
                    $results = mysqli_query($conn, $sqls);
                    
                    if (mysqli_num_rows($results) > 0) {
                        while($rows = mysqli_fetch_assoc($results)) {
                                   ?> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group form-group-default">
                            <label><?php echo $rows['uraian'] ?></label>
                            <input type="text" class="form-control" name="<?php echo str_replace(" ","_",$rows['uraian']); ?>" value="<?php echo $row[$rows['uraian']] ?>">
                        </div>
                    </div>
                    
                </div>
                <?php 
       }
}
                        ?>
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