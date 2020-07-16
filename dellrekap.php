 <?php 
include 'conn.php';
session_start();
$id = $_GET['id'];
$nip = $_GET['nip'];

$sql = "DELETE FROM jawaban WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header('Location: rekap.php?nip='.$nip.'&m=2');
}
else
{
echo "Error deleting record: " . mysqli_error($conn);
}
?>