 <?php
 if(isset($_POST['addemp']))
{
 $Emp_ID = $_POST['Emp_ID'];
$Emp_name = $_POST['Emp_name'];
$Dept_Name=$_POST['Dept_Name'];
$Rept_mgr=$_POST['Rept_mgr'];
$DOJ=$_POST['DOJ'];
$Desig=$_POST['Desig'];
$Status="Active";
$ass_job=$_POST['ass_job'];
$pass=$_POST['pass'];

if(!empty($Emp_ID))
{
	
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "tiger";
	$dbName = "Project";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$query = "INSERT into emp_official(Emp_ID,Emp_Name,Dept_Name,Reporting_Mgr_ID,DOJ,Desg,Status,Assigned_Job,password) values(?,?,?,?,?,?,?,?,?)";

		$stmt = $conn->prepare($query);
		$stmt->bind_param('sssssssss',$Emp_ID,$Emp_name,$Dept_Name,$Rept_mgr,$DOJ,$Desig,$Status,$ass_job,$pass);
		$stmt->execute();
		echo("New record inserted successfully");

		$stmt->close();
		$conn->close();
	}
} 
else{
	echo "All fields are required";
	die();
}
}
}
?>