 <?php 
include 'conn.php';
session_start();
$tahun = $_POST['tahun'];
$sem = $_POST['semester'];
$talen = $_POST['talen'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
 $sql = "INSERT INTO talenta VALUES ('','$nama','$nip' ,'$sem','$tahun','$talen')";
                    
                    if (mysqli_query($conn, $sql)) {
                        header('Location:index.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    ?>