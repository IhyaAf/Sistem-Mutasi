 <?php 
include 'conn.php';
session_start();
$nama = $_POST['nama'];
 $sql = "INSERT INTO p_jabatan VALUES ('','$nama')";
                    
                    if (mysqli_query($conn, $sql)) {
                        header('Location:fit.php');
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    ?>