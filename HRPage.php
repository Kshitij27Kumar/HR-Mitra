<!DOCTYPE html>
<html>
<head>
	<title>HR Page</title>
	<link rel= "stylesheet" type="text/css" href="HRPagecss.php"/>
</head>
<body>
	<?php
	if(isset($_POST1['Search2']))
					{
						$_id1= $_POST1['username'];
						$_pass1= $_POST1['password'];
											
        			if ($_id1!='admin' && $_pass1!='1234') 
        			{
            			echo '<script>alert("Wrong password or username")</script>';
            		
            		}
}
?>

	<br>
	<br>
	<div class="main-nav">
		<ul>
			<li><a href="http://localhost/kshitij/addemp.php">Add Employee</a></li>
			<li><a href="http://localhost/kshitij/update_emp.php">Update Employee</a></li>
			<li><a href="http://localhost/kshitij/Performance.php">Performance Review</a></li>
			<li><a href="http://localhost/kshitij/search_emp.php">Search an Employee</a></li>
			<li><a href="http://localhost/kshitij/dept_list.php">View Department wise Rating</a></li>
			<li><a href="http://localhost/kshitij/search_user.php">Serach for a Superuser</a></li>
			<li><a href="http://localhost/kshitij/view_sugg.php">View Suggestions</a></li>
			<li><a href="http://localhost/kshitij/homepage.php">Logout</a></li>
		</ul>
	</div>
		<br>
		  <br>
		  <center>
		<div class="slider">
		<figure>
		<div class="slide">
	<?php		
		echo "<img src='http://localhost/kshitij/images/hr1.jpg'/>";
	?>
		</div>
		<div class="slide">
	<?php
		echo "<img src='http://localhost/kshitij/images/balance.jpg'/>";
	?>
		</div>
	<div class="slide">
	<?php
		echo "<img src='http://localhost/kshitij/images/need1 (2).jpeg'/>";
		?>
	</div>
	<div class="slide">
	<?php
		echo "<img src='http://localhost/kshitij/images/emp6.png'/>";
		?>
	</div>
	<div class="slide">
	<?php
		echo "<img src='http://localhost/kshitij/images/emp7.png'/>";
		?>
	</div>
</figure>
</div>

	</center>
<!--	
<table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">
		 <font size="6" face="Times New Roman" color=#3333cc id="Official Details"> Official Details </font>
		  </td></tr></table> 
		  <br>
		  <br>
		  

	<form>  
        <div class="container"> 
        
						
        <table>
        	<tr>
            <td>Employee ID : </td>   
            <td><input type="text" name="Emp_ID" /></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Department Name : </td>   
            <td><input type="text"  name="Dept_Name"/></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Date of Joining : </td>   
            <td><input type="text" name="DOJ" /></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>Designation : </td>   
            <td><input type="text" name="Desig."/></td>
            <td></td>
        	</tr>
        	<tr></tr>
        	<tr></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            
        	</tr>
    	</table>
    				
        </div>  
    </form>

							
    <br>
    <br>
    <hr>
    <table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">
		 <font size="6" face="Times New Roman" color=#3333cc id="Personal Details"> Personal Details </font>
		  </td></tr></table> 
		 
		  
    <form>
          <div class="container">   
          	
        <table>
        	
        	<tr>
            <td>Employee Name : </td>   
            <td><input type="text" size="50" name="Name" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Father's Name : </td>   
            <td><input type="text" size="50" name="F_Name"/></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Mother's Name : </td>   
            <td><input type="text" size="50" name="M_Name" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Date of Birth : </td>   
            <td><input type="text" size="50" name="DOB" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Gender : </td>   
            <td><input type="text" size="50" name="Gender" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Current Address : </td>   
          <td><input type="text"  name="C_Add" required></td>
            <td><textarea name="message" rows="3" cols="47"></textarea></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Permanent Address : </td>   
            <td><textarea name="message" rows="3" cols="47"></textarea></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Blood Group : </td>   
            <td><input type="text" size="50" name="B_grp"/></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Marital Status : </td>   
            <td><input type="text" size="50" name="Status" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Aadhar No. : </td>   
            <td><input type="text" size="50" name="Number"  /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Pan No. : </td>   
            <td><input type="text" size="50" name="Number" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Religion : </td>   
            <td><input type="text" size="50" name="Religion"  /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Nationality : </td>   
            <td><input type="text" size="50" name="Country" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Contact No. : </td>   
            <td><input type="text" size="50" name="Cont. no." /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Gender : </td>   
            <td><input type="text" size="50" name="Emergency no." /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>E-mail ID : </td>   
            <td><input type="text" size="50" name="ID" /></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Nominee: </td>   
            <td><input type="text" size="50" name="Name"/></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr>
            <td>Relationship with Nominee : </td>   
            <td><input type="text" size="50" name="Relationship"/></td>
        	</tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
        	<tr><td></td></tr>
           	<br>
        	<br>
    	</table>
    	<hr>
    	<br>
    	</div>
    </form> -->
</body>
</html>