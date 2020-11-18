<?php
    session_start();
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "tiger";
	$dbName = "Project";

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

 
 $Emp_ID = $_SESSION['Emp_ID'];
$kra1=$_POST['kra1'];
$kpi1=$_POST['kpi1'];
$weight1=$_POST['weight1'];
$target1=$_POST['target1'];
$status1=$_POST['status1'];
$actual1=$_POST['actual1'];

$kra2=$_POST['kra2'];
$kpi2=$_POST['kpi2'];
$weight2=$_POST['weight2'];
$target2=$_POST['target2'];
$status2=$_POST['status2'];
$actual2=$_POST['actual2'];

$kra3=$_POST['kra3'];
$kpi3=$_POST['kpi3'];
$weight3=$_POST['weight3'];
$target3=$_POST['target3'];
$status3=$_POST['status3'];
$actual3=$_POST['actual3'];

$kra4=$_POST['kra4'];
$kpi4=$_POST['kpi4'];
$weight4=$_POST['weight4'];
$target4=$_POST['target4'];
$status4=$_POST['status4'];
$actual4=$_POST['actual4'];

$kra5=$_POST['kra5'];
$kpi5=$_POST['kpi5'];
$weight5=$_POST['weight5'];
$target5=$_POST['target5'];
$statust5=$_POST['status5'];
$actual5=$_POST['actual5'];

$kra6=$_POST['kra6'];
$kpi6=$_POST['kpi6'];
$weight6=$_POST['weight6'];
$target6=$_POST['target6'];
$status6=$_POST['status6'];
$actual6=$_POST['actual6'];

$kra7=$_POST['kra7'];
$kpi7=$_POST['kpi7'];
$weight7=$_POST['weight7'];
$target7=$_POST['target7'];
$status7=$_POST['status7'];
$actual7=$_POST['actual7'];

$kra8=$_POST['kra8'];
$kpi8=$_POST['kpi8'];
$weight8=$_POST['weight8'];
$target8=$_POST['target8'];
$status8=$_POST['status8'];
$actual8=$_POST['actual8'];

$kra9=$_POST['kra9'];
$kpi9=$_POST['kpi9'];
$weight9=$_POST['weight9'];
$target9=$_POST['target9'];
$status9=$_POST['status9'];
$actual9=$_POST['actual9'];

$kra10=$_POST['kra10'];
$kpi10=$_POST['kpi10'];
$weight10=$_POST['weight10'];
$target10=$_POST['target10'];
$status10=$_POST['status10'];
$actual10=$_POST['actual10'];

if(isset($_POST['edit']))
{

        $query = "UPDATE kra SET KRA_1='$kra1',kpi1='$kpi1',weight1='$weight1',target1='$target1' where Emp_ID='$Emp_ID'and status1='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_2='$kra2',kpi2='$kpi2',weight2='$weight2',target2='$target2' where Emp_ID='$Emp_ID'and status2='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_3='$kra3',kpi3='$kpi3',weight3='$weight3',target3='$target3' where Emp_ID='$Emp_ID'and status3='Rejected'";
        $query_run= mysqli_query($conn,$query);

        $query = "UPDATE kra SET KRA_4='$kra4',kpi4='$kpi4',weight4='$weight4',target4='$target4' where Emp_ID='$Emp_ID'and status4='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_5='$kra5',kpi5='$kpi5',weight5='$weight5',target5='$target5' where Emp_ID='$Emp_ID'and status5='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_6='$kra6',kpi6='$kpi6',weight6='$weight6',target6='$target6' where Emp_ID='$Emp_ID'and status6='Rejected'";
        $query_run= mysqli_query($conn,$query);

        $query = "UPDATE kra SET KRA_7='$kra7',kpi7='$kpi7',weight7='$weight7',target7='$target7' where Emp_ID='$Emp_ID'and status7='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_8='$kra8',kpi8='$kpi8',weight8='$weight8',target8='$target8' where Emp_ID='$Emp_ID'and status8='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_9='$kra9',kpi9='$kpi9',weight9='$weight9',target9='$target9' where Emp_ID='$Emp_ID'and status9='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET KRA_10='$kra10',kpi10='$kpi10',weight10='$weight10',target10='$target10' where Emp_ID='$Emp_ID'and status10='Rejected'";
        $query_run= mysqli_query($conn,$query);
        
        
    }

	if(isset($_POST['actual']))
	{

        $query = "UPDATE kra SET actual1='$actual1' where Emp_ID='$Emp_ID'and status1='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual2='$actual2' where Emp_ID='$Emp_ID'and status2='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual3='$actual3' where Emp_ID='$Emp_ID'and status3='Approved'";
        $query_run= mysqli_query($conn,$query);

        $query = "UPDATE kra SET actual4='$actual4' where Emp_ID='$Emp_ID'and status4='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual5='$actual5' where Emp_ID='$Emp_ID'and status5='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual6='$actual6' where Emp_ID='$Emp_ID'and status6='Approved'";
        $query_run= mysqli_query($conn,$query);

        $query = "UPDATE kra SET actual7='$actual7' where Emp_ID='$Emp_ID'and status7='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual8='$actual8' where Emp_ID='$Emp_ID'and status8='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual9='$actual9' where Emp_ID='$Emp_ID'and status9='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        $query = "UPDATE kra SET actual10='$actual10' where Emp_ID='$Emp_ID'and status10='Approved'";
        $query_run= mysqli_query($conn,$query);
        
        }
        mysqli_close($conn);
?>