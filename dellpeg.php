 <?php 
include 'conn.php';
session_start();
$id = $_GET['id'];

$sql = "DELETE FROM data_pegawai WHERE NIP= '$id'";

if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
}
else
{
echo "Error deleting record: " . mysqli_error($conn);
}
?>