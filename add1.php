 <?php
 
 if(isset($_POST['add_official']))
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

$F_Name = $_POST['F_Name'];
$M_Name = $_POST['M_Name'];
$DOB=$_POST['DOB'];
$Gender=$_POST['Gender'];
$B_grp=$_POST['B_grp'];
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$Cont_no=$_POST['Cont_no'];
$Status=$_POST['Status'];
$Religion=$_POST['Religion'];
$Country=$_POST['Country'];
$Aadhar=$_POST['Aadhar'];
$Pan=$_POST['Pan'];
$Emergency_No=$_POST['Emergency_No'];
$ID=$_POST['ID'];
$Name=$_POST['Name'];
$Relationship=$_POST['Relationship'];
$B_grp=$_POST['B_grp'];


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
		$query = "INSERT into emp_official(Emp_ID,Emp_Name,Dept_Name,Reporting_Mgr_ID,DOJ,Desg,Status,Assigned_Job,password) values('$Emp_ID','$Emp_name','$Dept_Name','$Rept_mgr','$DOJ','$Desig','Active','$ass_job','$pass')";

		if(mysqli_query($conn,$query))
		{
		echo "Official Details and ";
		}
		else 
			{echo "Error" . mysqli_error($conn);
			}
		mysqli_close($conn);
	}

}

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
		$query = "INSERT into emp_personal(Emp_ID,F_Name,M_Name,DOB,Gender,Current_Add,Permanent_Add,Blood_Grp,Marital_Status,Aadhar_No,Pan_No,Religion,Nationality,Contact_No,Emergency_No,Email_ID,Nominee,Rel_Nominee)		values('$Emp_ID','$F_Name','$M_Name','$DOB','$Gender','$add1','$add2','$B_grp','$Status','$Aadhar','$Pan','$Religion','$Country','$Cont_no','$Emergency_No','$ID','$Name','$Relationship')";

		if(mysqli_query($conn,$query))
		{
		echo "Personal Details Added Successfully";
		}
		else 
		{echo "Error" . mysqli_error($conn);
		}
		mysqli_close($conn);
	
		} 

  }
?>