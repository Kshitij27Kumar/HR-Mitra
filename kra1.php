<?php  session_start();
$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "tiger";
	$dbName = "Project";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

 if(isset($_POST['save']))
{
 $Emp_ID = $_SESSION['Emp_ID'];
$kra1=$_POST['kra1'];
$kpi1=$_POST['kpi1'];
$weight1=$_POST['weight1'];
$target1=$_POST['target1'];

$kra2=$_POST['kra2'];
$kpi2=$_POST['kpi2'];
$weight2=$_POST['weight2'];
$target2=$_POST['target2'];

$kra3=$_POST['kra3'];
$kpi3=$_POST['kpi3'];
$weight3=$_POST['weight3'];
$target3=$_POST['target3'];

$kra4=$_POST['kra4'];
$kpi4=$_POST['kpi4'];
$weight4=$_POST['weight4'];
$target4=$_POST['target4'];

$kra5=$_POST['kra5'];
$kpi5=$_POST['kpi5'];
$weight5=$_POST['weight5'];
$target5=$_POST['target5'];

$kra6=$_POST['kra6'];
$kpi6=$_POST['kpi6'];
$weight6=$_POST['weight6'];
$target6=$_POST['target6'];

$kra7=$_POST['kra7'];
$kpi7=$_POST['kpi7'];
$weight7=$_POST['weight7'];
$target7=$_POST['target7'];

$kra8=$_POST['kra8'];
$kpi8=$_POST['kpi8'];
$weight8=$_POST['weight8'];
$target8=$_POST['target8'];

$kra9=$_POST['kra9'];
$kpi9=$_POST['kpi9'];
$weight9=$_POST['weight9'];
$target9=$_POST['target9'];

$kra10=$_POST['kra10'];
$kpi10=$_POST['kpi10'];
$weight10=$_POST['weight10'];
$target10=$_POST['target10'];


if(!empty($Emp_ID))
{
	
	$query1="select * from kra where Emp_ID='$Emp_ID' and year=2020 ";
	$query_run=mysqli_query($conn,$query1);
	$row=mysqli_num_rows($query_run);
	if(mysqli_num_rows($query_run)>0)
	{
		echo '<script> alert("KRA already added for this year")</script>';
		exit();
	}

	if(mysqli_connect_error())
	{
		die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$query = "INSERT into kra(Emp_ID,KRA_1,kpi1,weight1,target1,KRA_2,kpi2,weight2,target2,KRA_3,kpi3,weight3,target3,KRA_4,kpi4,weight4,target4,KRA_5,kpi5,weight5,target5,KRA_6,kpi6,weight6,target6,KRA_7,kpi7,weight7,target7,KRA_8,kpi8,weight8,target8,KRA_9,kpi9,weight9,target9,KRA_10,kpi10,weight10,target10)
		 values('$Emp_ID','$kra1','$kpi1','$weight1','$target1','$kra2','$kpi2','$weight2','$target2','$kra3','$kpi3','$weight3','$target3','$kra4','$kpi4','$weight4','$target4','$kra5','$kpi5','$weight5','$target5','$kra6','$kpi6','$weight6','$target6','$kra7','$kpi7','$weight7','$target7','$kra8','$kpi8','$weight8','$target8','$kra9','$kpi9','$weight9','$target9','$kra10','$kpi10','$weight10','$target10')";

		if(mysqli_query($conn,$query))
		{
		echo "KRA Added Successfully";
		}
		else 
			{echo "Error" . mysqli_error($conn);
			}
		mysqli_close($conn);
	}

}
}
?>