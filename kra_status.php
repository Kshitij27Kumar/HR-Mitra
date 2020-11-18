<?php  session_start();
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "tiger";
    $dbName = "Project";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

 if(isset($_POST['update_status']))
{
 $S_ID = $_SESSION['S_ID'];


$status1=$_POST['status1'];
$status2=$_POST['status2'];
$status3=$_POST['status3'];
$status4=$_POST['status4'];
$status5=$_POST['status5'];
$status6=$_POST['status6'];
$status7=$_POST['status7'];
$status8=$_POST['status8'];
$status9=$_POST['status9'];
$status10=$_POST['status10'];

    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $query = "UPDATE kra SET status1='$status1',status2='$status2',status3='$status3',status4='$status4',status5='$status5',status6='$status6',status7='$status7',status8='$status8',status9='$status9',status10='$status10' where Emp_ID='$S_ID' ";
        if(mysqli_query($conn,$query))
        {
        echo "KRA Status Updates Successfully !!";
        }
        else 
            {echo "Error" . mysqli_error($conn);
            }
        mysqli_close($conn);
    }

}

?>