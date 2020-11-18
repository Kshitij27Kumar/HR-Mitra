<?php
 
 if(isset($_POST['save']))
{
 session_start();
 $Emp_ID = $_SESSION['Emp_ID'];
 $sugg1 = $_POST['sugg1'];
 $area = $_POST['area'];
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
        $query = "Insert into suggestion(Emp_ID,sugg,area) values('$Emp_ID','$sugg1','$area')";
        
        if(mysqli_query($conn,$query))
        {
        echo "suggestion sent Successfully";
        }
        else 
        {echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }

}
   
?>