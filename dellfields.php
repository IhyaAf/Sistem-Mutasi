 <?php 
include 'conn.php';
session_start();
$id = $_GET['id'];
$u = $_GET['uraian'];
$sql = "DELETE FROM fitproper WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "di hapus dari table jawaban <br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}


$sql = "ALTER TABLE jawaban DROP COLUMN $u";
echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "di hapus dari table fitproper <br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
                   header('Location: struktur.php');
                    ?>