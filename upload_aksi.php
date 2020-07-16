<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->
<?php 
include 'conn.php';
session_start();
$stts=0;
if ((!isset($_SESSION["pengguna"]))||(!isset($_SESSION["password"])))
header('Location:login.php');
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);


chmod($_FILES['filepegawai']['name'],0777);

$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
 $sqlt = "SELECT * FROM kronologi";
$jumlah_baris = $data->rowcount($sheet_index=0);
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
    $NIP = $data->val($i, 1);
	$NAMA_PEGAWAI = $data->val($i, 2);	
	$JABATAN = $data->val($i, 3);	
	$UNIT1	= $data->val($i, 4);
	$UNIT2	= $data->val($i, 5);
	$UNIT3	= $data->val($i, 6);
	$Grade	= $data->val($i, 7);
	$Jenjang_Jabatan = $data->val($i, 8);
	$Tempat_Lahir = $data->val($i, 9);
	$Tanggal_Lahir = $data->val($i, 10);
	$Tanggal_Pegawai_Tetap = $data->val($i, 11);
	$Tanggal_UPK = $data->val($i, 12);
	$Tanggal_Lulus_SE_1 = $data->val($i, 13);
	$Tanggal_Lulus_EE_3 = $data->val($i, 14);
	$Tanggal_Grade_Terakhir = $data->val($i, 15);
	$Tanggal_Mutasi	= $data->val($i, 16);
	$Gender	= $data->val($i, 17);
	$Status_Pernikahan = $data->val($i, 18);
	$Jumlah_Anak = $data->val($i, 19);
	$Pernikahan_Antar_Pegawai = $data->val($i, 20);
	$Religious_Denomination_Key	= $data->val($i, 21);
	$Alamat	= $data->val($i, 22);
	$Telephone_no = $data->val($i, 23);
	$Email = $data->val($i, 24);
	$Pendidikan_Terakhir = $data->val($i, 25);
    $Sertifikasi_Keahlian = $data->val($i, 26);
    
        $status = 0;
        $sqls = "SELECT * FROM data_pegawai WHERE NIP = '".$NIP."'";
        $results = $conn->query($sqls);
        if ($results->num_rows > 0) {
            // output data of each row
            while($row = $results->fetch_assoc()) {
                  $status = 1;
                  if(
                        $row['NAMA_PEGAWAI'] != $NAMA_PEGAWAI ||
                        $row['JABATAN'] != $JABATAN ||
                        $row['UNIT1'] != $UNIT1 || 
                        $row['UNIT2'] != $UNIT2 || 
                        $row['UNIT3'] != $UNIT3 || 
                        $row['Grade'] != $Grade ||
                        $row['Jenjang_Jabatan'] != $Jenjang_Jabatan||
                        $row['Tempat_Lahir'] != $Tempat_Lahir || 
                        $row['Tanggal_Lahir'] != $Tanggal_Lahir || 
                        $row['Tanggal_Pegawai_Tetap'] != $Tanggal_Pegawai_Tetap || 
                        $row['Tanggal_UPK'] != $Tanggal_UPK || 
                        $row['Tanggal_Lulus_SE_1'] != $Tanggal_Lulus_SE_1 || 
                        $row['Tanggal_Lulus_EE_3'] != $Tanggal_Lulus_EE_3 || 
                        $row['Tanggal_Grade_Terakhir'] != $Tanggal_Grade_Terakhir || 
                        $row['Tanggal_Mutasi'] != $Tanggal_Mutasi || 
                        $row['Gender'] != $Gender || 
                        $row['Status_Pernikahan'] != $Status_Pernikahan || 
                        $row['Jumlah_Anak'] != $Jumlah_Anak || 
                        $row['Pernikahan_Antar_Pegawai'] != $Pernikahan_Antar_Pegawai || 
                        $row['Religious_Denomination_Key'] != $Religious_Denomination_Key || 
                        $row['Alamat'] != $Alamat || 
                        $row['Telephone_no'] != $Telephone_no ||
                        $row['Email'] != $Email ||  
                        $row['Pendidikan_Terakhir'] != $Pendidikan_Terakhir || 
                        $row['Sertifikasi_Keahlian'] != $Sertifikasi_Keahlian
                      )
                      {
                        if ( $row['JABATAN'] != $JABATAN || $row['UNIT1'] != $UNIT1 || 
                            $row['UNIT2'] != $UNIT2 || $row['UNIT3'] != $UNIT3 || 
                            $row['Grade'] != $Grade || $row['Jenjang_Jabatan'] != $Jenjang_Jabatan)
                            {
                                $sqli = "INSERT into kronologi values( 
                                    '',
                                    '$NIP', 
                                    '$NAMA_PEGAWAI',	
                                    '".$row['Tanggal_Mutasi']."',
                                    '$JABATAN',
                                    '$UNIT1', 
                                    '$UNIT2', 
                                    '$UNIT3', 
                                    '$Grade', 
                                    '$Jenjang_Jabatan', 
                                    '')";
                                    if (mysqli_query($conn,$sqli))
                                    {
                                        echo $JABATAN." = ".$row['JABATAN']."<br>";
                                    }
                            }
                        $sqli = "UPDATE data_pegawai SET 
                        NAMA_PEGAWAI = '$NAMA_PEGAWAI', 
                        JABATAN = '$JABATAN', 
                        UNIT1 = '$UNIT1', 
                        UNIT2 = '$UNIT2', 
                        UNIT3 = '$UNIT3', 
                        Grade = '$Grade', 
                        Jenjang_Jabatan = '$Jenjang_Jabatan', 
                        Tempat_Lahir = '$Tempat_Lahir', 
                        Tanggal_Lahir = '$Tanggal_Lahir', 
                        Tanggal_Pegawai_Tetap = '$Tanggal_Pegawai_Tetap', 
                        Tanggal_UPK= '$Tanggal_UPK', 
                        Tanggal_Lulus_SE_1 = '$Tanggal_Lulus_SE_1',
                        Tanggal_Lulus_EE_3 = '$Tanggal_Lulus_EE_3', 
                        Tanggal_Grade_Terakhir = '$Tanggal_Grade_Terakhir', 
                        Tanggal_Mutasi = '$Tanggal_Mutasi', 
                        Gender = '$Gender', 
                        Status_Pernikahan = '$Status_Pernikahan', 
                        Jumlah_Anak = $Jumlah_Anak, 
                        Pernikahan_Antar_Pegawai = '$Pernikahan_Antar_Pegawai', 
                        Religious_Denomination_Key = '$Religious_Denomination_Key', 
                        Alamat = '$Alamat', 
                        Telephone_no = '$Telephone_no', 
                        Email = '$Email', 
                        Pendidikan_Terakhir = '$Pendidikan_Terakhir', 
                        Sertifikasi_Keahlian = '$Sertifikasi_Keahlian'
                        WHERE NIP = '$NIP'";
                        if (mysqli_query($conn, $sqli)) {
                            //header("location:index.php");
                        }
                        }
              }
            }
        

        if ($status == 0){
            if (
                mysqli_query($conn,"INSERT into data_pegawai values( 
                '$NIP',
                '$NAMA_PEGAWAI',	
                '$JABATAN',
                '$UNIT1',
                '$UNIT2',
                '$UNIT3', 
                '$Grade', 
                '$Jenjang_Jabatan', 
                '$Tempat_Lahir', 
                '$Tanggal_Lahir', 
                '$Tanggal_Pegawai_Tetap', 
                '$Tanggal_UPK', 
                '$Tanggal_Lulus_SE_1', 
                '$Tanggal_Lulus_EE_3', 
                '$Tanggal_Grade_Terakhir', 
                '$Tanggal_Mutasi', 
                '$Gender', 
                '$Status_Pernikahan', 
                '$Jumlah_Anak', 
                '$Pernikahan_Antar_Pegawai', 
                '$Religious_Denomination_Key', 
                '$Alamat', 
                '$Telephone_no', 
                '$Email',	
                '$Pendidikan_Terakhir', 
                '$Sertifikasi_Keahlian')")
                )
            {
                echo "input $NIP";
              
            }
	}
}
unlink($_FILES['filepegawai']['name']);
header("location:index.php");

?>