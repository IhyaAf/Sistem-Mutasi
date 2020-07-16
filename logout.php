<?php 
session_start();
include 'conn.php';
unset ($_SESSION["pengguna"]);
unset ($_SESSION["password"]);
session_unset();
session_destroy(); 
header('Location: login.php');
echo "hai";

?>
