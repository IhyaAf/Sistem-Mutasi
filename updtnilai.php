<?php 
include 'conn.php';
session_start();
$id = $_POST['id'];
$nip = $_POST['nip'];
$val = "";
$sql = "SELECT * FROM fitproper";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while($row = mysqli_fetch_assoc($result)) {
    $hi = str_replace(" ","_",$row['uraian']);
    $val = $val.$row['uraian']."='".$_POST[$hi]."',";
    }
}
$val = substr_replace($val, "", -1);
$sqlo = "UPDATE jawaban SET ".$val." where id = $id";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location:rekap.php?nip='.$nip.'&m=3');
               ?>

