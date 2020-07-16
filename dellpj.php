 <?php 
include 'conn.php';
session_start();
$id = $_GET['id'];

$sql = "DELETE FROM p_jabatan WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('Location: fit.php');
}
else
{
echo "Error deleting record: " . mysqli_error($conn);
}
?>