<?php  session_start();
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "tiger";
    $dbName = "Project";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

 if(isset($_POST['score']))
{
 $S_ID = $_SESSION['S_ID'];
$score1=$_POST['score1'];
$score2=$_POST['score2'];
$score3=$_POST['score3'];
$score4=$_POST['score4'];
$score5=$_POST['score5'];
$score6=$_POST['score6'];
$score7=$_POST['score7'];
$score8=$_POST['score8'];
$score9=$_POST['score9'];
$score10=$_POST['score10'];

    if(mysqli_connect_error())
    {
        die('Connect Error('. mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {   /*$query1="select * from kra where Emp_ID='$Emp_ID'";
        $query_run=mysqli_query($conn,$query1);*/
        if($score1!=0)
            $i=1;
        if($score2!=0)
            $i=2;
        if($score3!=0)
            $i=3;
        if($score4!=0)
            $i=4;
        if($score5!=0)
            $i=5;
        if($score6!=0)
            $i=6;
        if($score7!=0)
            $i=7;
        if($score8!=0)
            $i=8;
        if($score9!=0)
            $i=9;
        if($score10!=0)
            $i=10;
        $total_score=$score1+$score2+$score3+$score4+$score5+$score6+$score7+$score8+$score9+$score10;
        $rating=$total_score/$i;
        $rating=floor($rating);
        if($rating>=1 and $rating<2)
            $per="Needs Improvement";
         elseif($rating>=2 and $rating<3)
            $per="Good";
        elseif($rating>=3 and $rating<4)
            $per="Very Good";
        elseif($rating>=4 and $rating<5)
            $per="Excellent";
        elseif($rating>=5)
            $per="Outstanding";
        $query = "UPDATE kra SET score1='$score1',score2='$score2',score3='$score3',score4='$score4',score5='$score5',score6='$score6',score7='$score7',score8='$score8',score9='$score9',score10='$score10',Rating='$rating',performance='$per' where Emp_ID='$S_ID' ";
        if(mysqli_query($conn,$query))
        {
        echo "Employee's performance is $per !!";
        }
        else 
            {echo "Error" . mysqli_error($conn);
            }
        mysqli_close($conn);
    }

}

?>