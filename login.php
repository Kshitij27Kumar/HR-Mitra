!DOCTYPE html>
<html>
<head>
	<style>
	<title> Search data by its ID</title>
	.btn{
		width: 10%;
		height: 5%;
		font-size: 22px;
		padding: 0px;
	}
	</style>
</head>
<body>
	<center>
		<h1> Search for a single data/record from Database</h1>
		<div class="container">
			<form action="F:/xampp/htdocs/EmpInfo.html" method="POST">
				<input type="text" name="id" class="btn" placeholder="Enter Employee ID"/>
				<input type="submit" name="Search" class="btn" value="SEARCH BY ID"/>
			</form>
			<!--<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>City</th>
					</tr><br>-->
					<?php
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					

					if(isset($_POST['Search']))
					{
						$id= $_POST['username'];
						$pass= $_POST['password'];
						
						$query= "SELECT * from emp_official where Emp_ID='$id' and password='$pass' ";
						$query_run= mysqli_query($conn,$query);

						while ($row = mysqli_fetch_array($query_run)) 
						{
							?>
								<form>							
								<input type="text" name="Emp_ID" value="<?php echo $row['Emp_ID'] ?>" />
								<input type="text" name="Dept_No" value="<?php echo $row['Dept_No'] ?>"/>
								<input type="text" name="Reporting_Mgr_ID" value="<?php echo $row['Reporting_Mgr_ID'] ?>" />
								<input type="text" name="DOJ" value="<?php echo $row['DOJ'] ?>" />
								<input type="text" name="Desg" value="<?php echo $row['Desg'] ?>"/>
								<input type="text" name="Status" value="<?php echo $row['Status'] ?>" />
								<input type="text" name="Assigned_Job" value="<?php echo $row['Assigned_Job'] ?>"/>
								<input type="text" name="password" value="<?php echo $row['password'] ?>" />
								
							</form>	
							
							<?php
						}
					}
					?>
			
		</div>
	</center>
</body>
</html>