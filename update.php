<?php
include 'conn.php';
$NIP = $_POST['NIP'];
$NAMA_PEGAWAI = $_POST['NAMA_PEGAWAI'];
$UNIT1	= $_POST['unit1'];
$UNIT2	= $_POST['UNIT2'];
$UNIT3	= $_POST['UNIT3'];
$Grade	= $_POST['Grade'];
$uiw	= $_POST['uiw'];
$ulpnb	= $_POST['ulpnb'];
$up3n	= $_POST['up3n'];
$public	= $_POST['public'];
$up2d	= $_POST['up2d'];
$up2k	= $_POST['up2k'];
$binjaibrt	= $_POST['binjaibrt'];
$Tempat_Lahir = $_POST['Tempat_Lahir'];
$Tanggal_Lahir = $_POST['Tanggal_Lahir'];
$Tanggal_Pegawai_Tetap = $_POST['Tanggal_Pegawai_Tetap'];
$Tanggal_UPK = $_POST['Tanggal_UPK'];
$Tanggal_Lulus_SE_1 = $_POST['Tanggal_Lulus_SE_1'];
$Tanggal_Lulus_EE_3 = $_POST['Tanggal_Lulus_EE_3'];
$Tanggal_Grade_Terakhir = $_POST['Tanggal_Grade_Terakhir'];
$Tanggal_Mutasi	=$_POST['Tanggal_Mutasi'];
$Gender	=$_POST['Gender'];
$Status_Pernikahan = $_POST['Status_Pernikahan'];
$Jumlah_Anak = $_POST['Jumlah_Anak'];
$Pernikahan_Antar_Pegawai =$_POST['Pernikahan_Antar_Pegawai'];
$Religious_Denomination_Key	= $_POST['Religious_Denomination_Key'];
$Alamat	= $_POST['Alamat'];
$Telephone_no = $_POST['Telephone_no'];
$Email = $_POST['Email'];
$Pendidikan_Terakhir = $_POST['Pendidikan_Terakhir'];
$Sertifikasi_Keahlian = $_POST['Sertifikasi_Keahlian'];
if ($NIP == "" ||    $NAMA_PEGAWAI == "" ||    $NAMA_PEGAWAI == "" ||    $UNIT1 == "" ||    $UNIT2 == "" ||    $UNIT3 == "" ||    $Grade == "" ||
    $Tempat_Lahir== "" ||    $Tanggal_Lahir == "" ||    $Tanggal_Pegawai_Tetap == "" ||    $Tanggal_UPK == "" ||    $Tanggal_Lulus_SE_1 == "" ||    $Tanggal_Lulus_EE_3 == "" ||
    $Tanggal_Grade_Terakhir == "" ||    $Tanggal_Mutasi == "" ||    $Gender == "" ||    $Status_Pernikahan == "" ||    $Jumlah_Anak == "" ||    $Pernikahan_Antar_Pegawai == "" ||
    $Religious_Denomination_Key == "" ||    $Alamat == "" ||    $Telephone_no == "" ||    $Email == "" ||    $Pendidikan_Terakhir == "" ||    $Sertifikasi_Keahlian == ""
    || ($uiw == "" && $ulpnb == "" && $up3n == "" && $public == "" && $binjaibrt == "" && $up2d == ""  && $up2k == ""))
{
    
    header('Location: kronologi.php?nip='.$NIP.'&m=1');
}
else
{   $jabatan = "";
    if ($uiw != "")
    {
        $jabatan = $uiw;
    }
    else
    if ($ulpnb != "")
    {
        $jabatan = $ulpnb;
    }
    else
    if ($up3n != "")
    {
        $jabatan = $up3n;
    }
    else
    if ($public != "")
    {
        $jabatan = $public;
    }
    else
    if ($binjaibrt != "")
    {
        $jabatan = $binjaibrt;
    }
    else
    if ($up2d != "")
    {
        $jabatan = $up2d;
    }
    else
    if ($up2k != "")
    {
        $jabatan = $up2k;
    }
    $jenjang = "";
    $sql = "SELECT jenjang FROM jabatan_uiw WHERE jabatan = '$jabatan'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $jenjang = $row['jenjang'];
        }
    }
    $sqls = "SELECT * FROM data_pegawai WHERE NIP = '".$NIP."'";
    $results = $conn->query($sqls);
    if ($results->num_rows > 0) {
        while($row = $results->fetch_assoc()) {
                if ( $row['JABATAN'] != $jabatan || $row['UNIT1'] != $UNIT1 || 
                $row['UNIT2'] != $UNIT2 || $row['UNIT3'] != $UNIT3 || 
                $row['Grade'] != $Grade || $row['Jenjang_Jabatan'] != $jenjang)
                {
                    $sqli = "INSERT into kronologi values( 
                        '',
                        '$NIP', 
                        '$NAMA_PEGAWAI',	
                        '".$row['Tanggal_Mutasi']."',
                        '$jabatan',
                        '$UNIT1', 
                        '$UNIT2', 
                        '$UNIT3', 
                        '$Grade', 
                        '$jenjang', 
                        '')";
                        if (mysqli_query($conn,$sqli))
                        {
                            echo $jabatan." = ".$row['JABATAN']."<br>";
                        }
                }
            }
        }
        else {
            echo "Error updating record: " . $conn->error;
        }
    $sql = "UPDATE data_pegawai SET NAMA_PEGAWAI = '$NAMA_PEGAWAI' , Jenjang_Jabatan = '$jenjang' ,JABATAN = '$jabatan', NAMA_PEGAWAI ='$NAMA_PEGAWAI' ,  UNIT1='$UNIT1' ,  UNIT2 = '$UNIT2' , UNIT3 = '$UNIT3', Grade = '$Grade' ,
    Tempat_Lahir = '$Tempat_Lahir',  Tanggal_Lahir =  '$Tanggal_Lahir' ,  Tanggal_Pegawai_Tetap = '$Tanggal_Pegawai_Tetap',  Tanggal_UPK='$Tanggal_UPK', 
    Tanggal_Lulus_SE_1 = '$Tanggal_Lulus_SE_1', Tanggal_Lulus_EE_3 = '$Tanggal_Lulus_EE_3', Tanggal_Grade_Terakhir ='$Tanggal_Grade_Terakhir' , 
    Tanggal_Mutasi = '$Tanggal_Mutasi',Gender ='$Gender' , 
    Status_Pernikahan = '$Status_Pernikahan' , Jumlah_Anak = $Jumlah_Anak , Pernikahan_Antar_Pegawai = '$Pernikahan_Antar_Pegawai',
    Religious_Denomination_Key = '$Religious_Denomination_Key' ,  Alamat = '$Alamat', Telephone_no= '$Telephone_no',  
    Email = '$Email' , Pendidikan_Terakhir='$Pendidikan_Terakhir' , Sertifikasi_Keahlian = '$Sertifikasi_Keahlian' WHERE NIP='$NIP'";

    if ($conn->query($sql) === TRUE) {
        echo "Update succ";
        header('Location: kronologi.php?nip='.$NIP.'&m=2');
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
}
?>