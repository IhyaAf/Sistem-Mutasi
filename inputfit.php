<?php 
include 'conn.php';
$sql="SELECT * FROM jawaban";
if ($result=mysqli_query($conn,$sql))
  {
  // Get field information for all fields
  while ($fieldinfo=mysqli_fetch_field($result))
    {
      if (str_replace(" ","_",$fieldinfo->name) != "id"){
    $array[] =  str_replace(" ","_",$fieldinfo->name);
    $array2[] = $_POST[str_replace(" ","_",$fieldinfo->name)];}
    }
  // Free result set
  mysqli_free_result($result);
}
$sql = "SELECT * FROM data_pegawai where NIP = '$array2[0]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       
$val = "";
for ($i =0 ;$i<sizeof($array2);$i++ )
{
  if ($i != sizeof($array2)-1){
  $val=$val."'".$array2[$i]."',";}
  else
  $val=$val."'".$array2[$i]."'";
}
$sql = "INSERT INTO jawaban
VALUES ('',".$val.")";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header('Location: fit.php');
}  else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
} 
else{
$m =  "nip tidak dapat di temukan";
header('Location: fit.php?m='.$m);}
?>