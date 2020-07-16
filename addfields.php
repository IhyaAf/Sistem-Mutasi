 <?php 
include 'conn.php';
session_start();
$nama = $_POST['nama'];
$t = $_POST['tittle'];
$k = $_POST['key'];
 $sql = "ALTER TABLE jawaban ADD $nama VARCHAR(123) NOT NULL";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_query($conn, $sql)) {
                        echo "Record deleted successfully";
                    }
                    $sql = "INSERT INTO fitproper VALUES ('','$t', '$k', '$nama')";
                    
                    if (mysqli_query($conn, $sql)) {
                        echo "New record created successfully";
                    }
                    header('Location: struktur.php');

                    ?>