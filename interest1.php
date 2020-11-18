<?php
 
 if(isset($_POST['save']))
{
 session_start();
 $Emp_ID = $_SESSION['Emp_ID'];
 $Int1 = $_POST['Int1'];
 $Int2 = $_POST['Int2'];
 $Int3 = $_POST['Int3'];
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "tiger";
    $dbName = "Project";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $query = "UPDATE superuser_intarea SET I_area1='$Int1',I_area2='$Int2',I_area3='$Int3' where Emp_ID='$Emp_ID'";
        $query_run=mysqli_query($conn,$query);
        if(mysqli_query($conn,$query))
        {
        echo "Interest Area Added Successfully";
        }
        else 
        {echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

}
   
?>