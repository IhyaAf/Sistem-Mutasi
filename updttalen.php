<?php 
include 'conn.php';
session_start();
$id = $_POST['id'];
$talen = $_POST['talenta'];
$sqlo = "UPDATE talenta SET  TALENTA = '$talen' where ID = $id";
echo $sqlo;
if (mysqli_query($conn, $sqlo)) {
    header('Location:index.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
               ?>

