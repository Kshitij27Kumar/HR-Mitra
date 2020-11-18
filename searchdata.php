<!DOCTYPE html>
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
			<form action="" method="POST">
				<input type="text" name="id" class="btn" placeholder="Enter emp/Student ID"/>
				<input type="submit" name="Search" class="btn" value="SEARCH BY ID">
			</form>
			<table>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>City</th>
					</tr><br>
					<?php
					$connection=mysqli_connect("localhost","root","tiger");
					$db=mysqli_select_db($connection,'searchdata');

					if(isset($POST['Search']))
					{
						$id= $POST['id'];

						$query= "SELECT * from 'details' where id='$id' ";
						$query_run= mysqli_query($connection,$query);

						while ($row = mysqli_fetch_array($query_run)) {
							# code...
							?>
							<tr>
								<td> <?php echo $row['ID']; ?> </td>
								<td> <?php echo $row['Name']; ?> </td>
								<td> <?php echo $row['City']; ?> </td>
							</tr>
							<?php
						}
					}
					?>
			</table>
		</div>
	</center>
</body>
</html>