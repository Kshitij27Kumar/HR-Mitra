<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
	 <?php    session_start();
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";
					$ID= $_SESSION['Emp_ID'];
					$pass=$_POST['pass'];
					$newpass=$_POST['newpass'];
					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					
					if(isset($_POST['Change']))
					{	
						$query= "UPDATE emp_official SET password='$newpass' where Emp_ID='$ID' and password='$pass'";
						$query_run= mysqli_query($conn,$query);
							if ($query_run)
							 {
						    echo '<script> alert("Password Changed") </script>';
						    header('Location:homepage.php');	
                            exit();
						    }

							else
							{
							echo '<script> alert("Password not Changed") </script>';
							
            				exit();
							}

						}

	?>
</head>

<body>
					
	

</body>
</html>