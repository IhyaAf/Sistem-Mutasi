<?PHP
  // Original PHP code by Chirp Internet: www.chirp.com.au
  // Please acknowledge use of this code by including this header.
$mysqli = new mysqli("localhost", "root", "", "pln");

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "website_data_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = true;
  $query = "SELECT * FROM data_pegawai";
  $result = $mysqli->query($query);
  while($row = $result->fetch_assoc()) {
    {
      if($flag == true){
         // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        //$flag = true;
        $flag = false;
      }
     
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
?>