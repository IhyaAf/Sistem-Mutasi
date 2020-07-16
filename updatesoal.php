<?php 
include 'conn.php';
session_start();
$id = $_POST['id'];
$tipe = $_POST['tipe'];
$kategori = $_POST['kategori'];
$uraian = $_POST['uraian'];
$nama = $_POST['nama'];
$sqlo = "UPDATE fitproper SET  tipe = '$tipe' ,kategori = '$kategori', uraian = '$uraian' where id = $id";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
$sqlo = "ALTER TABLE jawaban CHANGE $nama $uraian VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location:struktur.php');
               ?>

