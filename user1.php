<?php  session_start();
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "tiger";
	$dbName = "Project";
	$Emp_ID = $_SESSION['Emp_ID'];
	$user1=$_POST['user1'];
	$user2=$_POST['user2'];
	$user3=$_POST['user3'];
	$s_user=$_POST['s_user'];
	$choice1=$_POST['Choice1'];
	$choice2=$_POST['Choice2'];
	$choice3=$_POST['Choice3'];
	$choice4=$_POST['Choice4'];

	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");

 	if(isset($_POST['save']))
	{	$query1="select * from superuser_intarea where Emp_ID='$Emp_ID'";
		$query_run=mysqli_query($conn,$query1);
		$row=mysqli_num_rows($query_run);
		if(mysqli_num_rows($query_run)>0)
		{
		echo '<script> alert("Your Record already added........!")</script>';
		exit();
		}
		else
		{
		$query = "INSERT into superuser_intarea(Emp_ID) values('$Emp_ID')";

		 $query_run=mysqli_query($conn,$query);
		 

 		if($choice1=="User")
 		{
		$query = "UPDATE superuser_intarea set user1='$user1' where Emp_ID='$Emp_ID'";
		$query_run=mysqli_query($conn,$query);
		}
		if($choice2=="User")
 		{
		$query = "UPDATE superuser_intarea set user2='$user2' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice3=="User")
 		{
		$query = "UPDATE superuser_intarea set user3='$user3' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice4=="User")
 		{
		$query = "UPDATE superuser_intarea set user3='$s_user' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice1=="Superuser")
 		{
		$query = "Update superuser_intarea set s_user='$user1' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice2=="Superuser")
 		{
		$query = "Update superuser_intarea set s_user='$user2' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice3=="Superuser")
 		{
		$query = "Update superuser_intarea set s_user='$user3' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		if($choice4=="Superuser")
 		{
		$query = "Update superuser_intarea set s_user='$s_user' where Emp_ID='$Emp_ID'";
		 $query_run=mysqli_query($conn,$query);
		}
		
	}
}

?>