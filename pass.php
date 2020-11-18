<!doctype html>
<html>
<head>
	<title>Change Password</title>
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
	<div class="main-nav">
		<ul>
			
		</ul>
	</div>
	<br>
<center>
	<font size="5" color="blue">
<form action="http://localhost/kshitij/pass1.php" method="POST">
	<table>
		
	<tr>
		<td width="50" height="50"></td>
		<td>Enter your Current Password :</td>
		<td width="100" height="50"></td>
		<td width="100" height="50"><Input Type="password" name="pass" Size="20"/></td>
		<td width="100" height="50"></td>
		<td><td><button type="submit" name="Change">Change Password</button></td></td>
	</tr>
	<tr>
			<td width="50" height="100">
			<td>Enter New Password :<td>
			</td width="100" height="100">
			<td><Input Type="password" name="newpass" Size="20" /></td>
			<td width="100" height="100"></td> 
			<td width="100" height="50"></td>
			<td></td>
	<tr>
	</table>
</form>
</font>
</center>
</body>
</html>
