<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
	
</head>
<body>
<center>
	<?php
		echo "<img src='http://localhost/kshitij/images/emp4.jfif'/>";
		echo "<img src='http://localhost/kshitij/images/emp1.jpg'/>";
		echo "<img src='http://localhost/kshitij/images/emp3.jfif'/>";
		echo "<img src='http://localhost/kshitij/images/Performance.jfif'/>";
		?>
	</center>
<div class="main-nav"><font size="5">
		<ul>
			<marquee>Your Sub-ordinates Details !</marquee>
		</ul></font>
	</div>
	
	<form action="http://localhost/kshitij/search_kra.php" method="POST">
	<table>
		<tr>
		<td width="1100" height="50" align="center"><i><font size="6" face="Times New Roman" color=#3333cc> Sub-Ordinates Details </font></i></td>
		<td width="100" height="50"><button type="submit" name="kra">Check KRA</button></td>
		</tr>
	</table>
	</form>
	<form action="http://localhost/kshitij/score.php" method="POST">
		<table><tr>
		<td width="1100" height="50"></td>
		<td width="100" height="50">
		<button type="submit" name="score">Give Score</button>
		</td>
		</tr>
		</table>
	</form>

	<TABLE border="1">
		<font size="6" face="Times New Roman" color=#3333cc>
		<TR>
			
			<th width="20">Employee Code</th>
			<th width="50">Employee's Name</th>
			<th width="80">Assigned Job</th>
			
		</TR>
	</font>
		<?php   
	 session_start();
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "tiger";
		$dbName = "project";
			$ID= $_SESSION['Emp_ID'];
			$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
			$query= "SELECT Emp_ID,Emp_Name,Assigned_job from emp_official where Reporting_Mgr_ID='$ID'";
			$query_run= mysqli_query($conn,$query);
			$row=mysqli_num_rows($query_run);

			if(mysqli_num_rows($query_run)==0)
			{
			echo '<script> alert("You do not have any sub-ordinate !!!")</script>';
			exit();
			}
			else
			{
				while($row = mysqli_fetch_array($query_run))
				{	
		
	?>
		<TR height="30">
			<TD> <INPUT type="text" size="20" style="height:30px;" name="s_emp_id" value="<?php echo $row['Emp_ID'] ?>"/> </TD>
			<TD> <INPUT type="text" size="50" style="height:30px;" name="s_name" value="<?php echo $row['Emp_Name'] ?>"/> </TD>
			<TD> <INPUT type="text" size="80" style="height:30px;" name="assigned_job" value="<?php echo $row['Assigned_job'] ?>"/> </TD>
		</TR>
		<?php
				}
	}
	?>
	</TABLE>
</body>
</html>