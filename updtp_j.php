<?php 
include 'conn.php';
session_start();
$id = $_POST['id'];
$nama = $_POST['nama'];
$sqlo = "UPDATE p_jabatan SET  nama = '$nama' where id = $id";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    header('Location:fit.php?m=2');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
/*
$sqlo = "ALTER TABLE jawaban CHANGE $nama $uraian VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
header('Location:struktur.php');
*/
               ?>

