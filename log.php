<?php include 'conn.php';?>

<?php 
if ($_POST['name'] == "" || $_POST['pass'] == "")
	 header('Location: login.php');
else{
	 session_start();
$name = $_POST['name'];
$pass = $_POST['pass'];

$do = 0;
		$sql = "SELECT * FROM admin";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			
		   while($row = $result->fetch_assoc()) {
			   
				if ($name == $row['username'] && $pass == $row['password'])
				   {
					echo $row['username'];
					echo $pass;
						$_SESSION["pengguna"] = $name;
						$_SESSION["password"] = $pass;
						$do = 1;
						
						 header('Location: index.php');
                        break;
                    }
                }
                    
				  
		   }
		if ($do == 0)
		{
		
			header('Location: login.php');
		}	
	}
 ?>
 