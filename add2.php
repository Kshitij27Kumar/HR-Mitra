 <?php
 if(isset($_POST['add_personal']))
{
 $F_Name = $_POST['F_Name'];
$M_Name = $_POST['M_Name'];
$DOB=$_POST['DOB'];
$Gender=$_POST['Gender'];
$B_grp=$_POST['B_grp'];
$message=$_POST['message'];
$message=$_POST['message'];
$Cont_no=$_POST['Cont_no'];
$Status=$_POST['Status'];
$Religion=$_POST['Religion'];
$Country=$_POST['Country'];
$Number=$_POST['Number'];
$Number=$_POST['Number'];
$Emergency_No=$_POST['Emergency_No'];
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Relationship=$_POST['Relationship'];



if(!empty($Emp_ID))
{
	
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "tiger";
	$dbName = "Project";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

	if(mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else{
		$query = "INSERT into emp_personal(F_Name,M_Name,DOB,Gender,Current_Add,Permanent_Add,Blood_Grp,Marital_Status,Aadhar_No,Pan_No,Religion,Nationality,Contact_No,Emergency_No,Email_ID,Nominee,Rel_Nominee) values('$F_Name','$M_Name','$DOB','$Gender','$message','$message','$Status','$Number','$Number','$Religion,'$Country','$Cont_no','$Emergency_No','$ID','$Name','$Relationship')";

		if(mysqli_query($conn,$query))
		{
		echo "New record inserted successfully";
		}
		else 
			{echo "Error" . mysqli_error($conn);
			}
		mysqli_close($conn);
	}
} 

}
?>