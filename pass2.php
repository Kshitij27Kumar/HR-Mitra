<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
	 

	<?php 
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					if(isset($_POST['Change']))
					{	$ID = '.$_SESSION['Emp_ID']';
						$newpass1=$_POST['new_pass1'];
						$newpass2=$_POST['new_pass2'];
						$id= $_POST['EmpID'];
						if($newpass1 != $newpass2)		
						{
							echo 'Password doesn\'t Match';
							exit();
						}	
						else
						{   
						$query= "UPDATE emp_official SET password='$newpass1' where Emp_ID='$ID' ";
						$query_run= mysqli_query($conn,$query);
							if ($query_run)
							 {
						    echo '<script> alert("Password Changed") </script>';
                            exit();
						    }

							else
							{
							echo '<script> alert("Password not Changed") </script>';
							exit();
							}

						}


					
					
				}
			?>
</body>
</html>