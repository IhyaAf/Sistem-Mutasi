<?php include 'conn.php';
session_start();
if (!isset($_SESSION["pass"])||!isset($_SESSION["user"]))
header('Location: login.php');
?>

<?php
$name = $_POST['name'];
$sql = "INSERT INTO kelas (nama) VALUES ('".$name."')";

if (mysqli_query($conn, $sql)) {
    header('Location: admin.php');
} else {
    header('Location: login.php?m=1');
}
?>