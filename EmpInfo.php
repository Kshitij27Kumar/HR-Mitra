<!doctype html>
<html>
<head>
	
<?php
	if (isset($_POST['Search1']))
	{
		$_id1= $_POST['username'];
						$_pass1= $_POST['password'];
						
        			if ($_id1=='admin' && $_pass1=='1234') 
        			{
            			header('Location:HRPage.php');
						exit();
            		}
            		/*else{
            			echo '<script>alert("Wrong Admin user")</script>';
            			header('Location:homepage.php');	
            			exit();
            		}*/
		
	}
	?>
	<meta charset="utf-8">
	<title>Employee Information</title>
	<link rel="stylesheet" type="text/css" href="EmpInfocss.php"/>
	
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
			<li><a href="#Official Details">Official Details</a></li>
			<li><a href="#Personal Details">Personal Details</a></li>
			<li><a href="http://localhost/kshitij/kra.php">Goal Setting</a></li>
			<li><a href="http://localhost/kshitij/user.php">User/Superuser</a></li>
			<li><a href="http://localhost/kshitij/Interest.php">Interest Area</a></li>
			<li><a href="http://localhost/kshitij/Suggestion.php">Suggestions</a></li>
			<li><a href="http://localhost/kshitij/subordinate.php">View Sub-ordinates</a></li>
			<li><a href="http://localhost/kshitij/pass.php">Change Password</a></li>
			
			<li>
				<?php $link_name="Logout"; ?>
				<a href="http://localhost/kshitij/homepage.php"><?php echo $link_name; ?></a></li>
		</ul>
	</div>
		<br>
		  <br>
			<br>
		 <i><font size="6" face="Times New Roman" color=#3333cc id="Official Details"> Official Details </font></i>
		 
		  <br>
		  <br>
		  
	<form>  
        <div class="container"> 
        <?php
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					

					if(isset($_POST['Search1']))
					{   session_start();

						$id= $_POST['username'];
						$pass= $_POST['password'];
					    $_SESSION['Emp_ID']=$id;   
        			/*	if ($_id=='admin' && $_pass=='1234') 
        			{
            			header('Location:HRPage.php');
						exit();
            		}*/
            		
						$query="select * from emp_official where Emp_ID='$id' and password='$pass' ";
						$query_run= mysqli_query($conn,$query);
						  $row=mysqli_num_rows($query_run);
    					if(mysqli_num_rows($query_run)==0)  
    					{
    						echo '<script>alert("Wrong Username or Passowrd!!!")</script>';
            				header('Location:homepage.php');	

            			exit();

    					}
    					else
   						{
						/*$query_run= mysqli_query($conn,$query);*/
						
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
		<font size="4" color="blue">			
        <table>
        	<tr>
        	<td height="50">Employee Name : </td>
            <td><input type="text" size="45" name="Name" value="<?php echo $row['Emp_Name'] ?>" /></td>

            <td width="200" height="50"></td>
            <td width="150" height="50">Employee ID : </td>   
            <td><input type="text" size="45" name="Emp_ID" value="<?php echo $row['Emp_ID'] ?>" /></td>
            </tr>
            <tr>

            <td width="200">Department Name : </td>   
            <td><input type="text" size="45"  name="Dept_No" value="<?php echo $row['Dept_Name'] ?>" /></td>
             <td width="200" height="50"></td>  
           
            
            <td width="150" height="50">Date of Joining : </td>   
            <td><input type="text" name="DOJ" size="45" value="<?php echo $row['DOJ'] ?>" /></td>
             </tr>

            <tr> 
           
            <td>Designation : </td>   
            <td><input type="text" size="45" name="Desig." value="<?php echo $row['Desg'] ?>" /></td>
            
            <td width="200" height="50"></td>  

            <td>Assigned Job : </td>   
            <td><textarea name="message" rows="5" cols="42"><?php echo $row['Assigned_Job'] ?></textarea></td>
        	</tr>
    	</table>
    </font>
    				<?php
						}
					}
				}

						?>
        </div>  
    </form>

							
    <br>
    <br>
    <hr>
    <br>
    <br>
  <i><font size="6" face="Times New Roman" color=#3333cc id="Personal Details"> Personal Details </font></i>
		 
		  
    <form>
          <div class="container">   
          	<?php
          	if(isset($_POST['Search1']))
					{
						$id= $_POST['username'];
						$_SESSION['Emp_ID']=$id; 						
						$query="select * from emp_personal where Emp_ID='$id' ";
						$query_run= mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
				<font size="4" color="blue">
        <table>
        	<tr><td height="50"></td><td></td><td></td><td></td><tr>
        	<tr>
   			<td>Father's Name :</td>
        	<td><input type="text" size="45" name="F_Name" value="<?php echo $row['F_Name'] ?>" /></td>
        	
        	
            <td>Mother's Name : </td>   
            <td><input type="text" size="45" name="M_Name" value="<?php echo $row['M_Name'] ?>" /></td>
        	
        	<td width="100" height="50"></td>
        	</tr>
        	<tr>
        	<td>Born On :</td>
        	<td><input type="text" size="45" name="DOB" value="<?php echo $row['DOB'] ?>" /></td>
        	
        	
            <td>Gender : </td>   
            <td><input type="text" size="45" name="Gender" value="<?php echo $row['Gender'] ?>" /></td>

            <td width="100" height="50"></td>  
            </tr>
            <tr>
            <td>Blood Group : </td>   
            <td><input type="text" size="45" name="Blood_Grp" value="<?php echo $row['Blood_Grp'] ?>"/></td>
        	
        	
        	
            <td>Current Address : </td>   
            <td><textarea name="message" rows="5" cols="42"><?php echo $row['Current_Add'] ?></textarea></td>
        	
        	 <td height="50"></td>  
        	 </tr>
        	 <tr>
            <td>Permanent Address : </td>   
            <td><textarea name="message" rows="5" cols="42"><?php echo $row['Permanent_Add'] ?></textarea></td>
        	
        	
        	
        	<td>Contact No. : </td>   
            <td><input type="text" size="45" name="Cont_no" value="<?php echo $row['Contact_No'] ?>" /></td>

            <td width="100" height="50"></td>  
            </tr>
            <tr>
            <td>Marital Status : </td>   
            <td><input type="text" size="45" name="Status" value="<?php echo $row['Marital_Status'] ?>" /></td>
            
        	
        	
            <td>Religion : </td>   
            <td><input type="text" size="45" name="Religion" value="<?php echo $row['Religion'] ?>" /></td>
        	
        	<td width="100" height="50"></td>  
        	</tr>
        	<tr>

            <td>Nationality : </td>   
            <td><input type="text" size="45" name="Country" value="<?php echo $row['Nationality'] ?>" /></td>
        	

        	
            <td>Aadhar No. : </td>   
            <td><input type="text" size="45" name="Number" value="<?php echo $row['Aadhar_No'] ?>" /></td>
        	
        	<td width="100" height="50"></td>  
        	</tr>
        	<tr>
            <td>Pan No. : </td>   
            <td><input type="text" size="45" name="Number" value="<?php echo $row['Pan_No'] ?>" /></td>
        	
        	

        	
            <td>Emergency Contact : </td>   
            <td><input type="text" size="45" name="Emergency_No" value="<?php echo $row['Emergency_No'] ?>" /></td>

        	<td width="100" height="50"></td> 
        	</tr> 
        	<tr>
            <td>E-mail ID : </td>   
            <td><input type="text" size="45" name="ID" value="<?php echo $row['Email_ID'] ?>" /></td>
        	
        	
        	
            <td>Nominee: </td>   
            <td><input type="text" size="45" name="Name" value="<?php echo $row['Nominee'] ?>" /></td>
        	
        	<td width="100" height="50"></td>  
        	</tr>
        	<tr>
            <td height="50">Relationship with Nominee : </td>   
            <td><input type="text" size="45" name="Relationship" value="<?php echo $row['Rel_Nominee'] ?>" /></td>
        	</tr>
        	
    	</table>
    </font>
   				<?php
				}
			}
			?>
			<br>
			<br>
    	<hr>
    	<br>
    	</div>
    </form> 
    <br><br><br>
    <table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">
		 <i><font size="6" face="Times New Roman" color=#3333cc> KRA </font></i>
		  </td></tr></table> 
		  <br>
		  <br>
   
	<!--<INPUT type="submit" value="Edit" onclick="EditData('dataTable')" style="margin:25px;"/>-->
	
	<br>
	<form action="http://localhost/kshitij/edit_kra.php" method="POST">
		<button type="submit" name="edit">Update KRA</button> <button type="submit" name="actual">Confirm Actual Score</button>
          <div class="container">   
          	<?php
          	$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					
          	if(isset($_POST['Search1']))
					{ 
						$id= $_POST['username'];
						$_SESSION['Emp_ID']=$id; 						
						$query="select * from kra where Emp_ID='$id' ";
						$query_run= mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
	<TABLE border="1">
		<TR>
			<!--<th>Select</th>-->
			<th width="25">KRA No.</th>
			<th>Key Result Areas</th>
			<th>Key Performance Indicators</th>
			<th>Weight of KPIs</th>
			<th>Target</th>
			<th>Actual</th>
			<th>Status</th>
			<!--<th>Score</th>-->
		</TR>
		<TR height="30">
			<TD> 1 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra1" value="<?php echo $row['KRA_1'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi1" value="<?php echo $row['kpi1'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight1" value="<?php echo $row['weight1'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target1" value="<?php echo $row['target1'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual1" value="<?php echo $row['actual1'] ?>"/> </TD>	
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status1" value="<?php echo $row['status1'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score1" value="<?php echo $row['score1'] ?>"/> </TD>-->
		</TR>
		<TR height="30">
			<TD> 2 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra2" value="<?php echo $row['KRA_2'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi2" value="<?php echo $row['kpi2'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight2" value="<?php echo $row['weight2'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target2" value="<?php echo $row['target2'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual2" value="<?php echo $row['actual2'] ?>"/> </TD>	
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status2" value="<?php echo $row['status2'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score2" value="<?php echo $row['score2'] ?>"/> </TD>-->
		</TR>
		<TR height="30">
			
			<TD> 3 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra3" value="<?php echo $row['KRA_3'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi3" value="<?php echo $row['kpi3'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight3" value="<?php echo $row['weight3'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target3" value="<?php echo $row['target3'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual3" value="<?php echo $row['actual3'] ?>"/> </TD>	
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status3" value="<?php echo $row['status3'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score3" value="<?php echo $row['score3'] ?>"/> </TD>-->
		</TR>
		<TR height="30">
			<!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
			<TD> 4 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra4" value="<?php echo $row['KRA_4'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi4" value="<?php echo $row['kpi4'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight4" value="<?php echo $row['weight4'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target4" value="<?php echo $row['target4'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual4" value="<?php echo $row['actual4'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status4" value="<?php echo $row['status4'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score4" value="<?php echo $row['score4'] ?>"/> </TD>-->
		</TR>
		<TR height="30">
			
			<TD> 5 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra5" value="<?php echo $row['KRA_5'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi5" value="<?php echo $row['kpi5'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight5" value="<?php echo $row['weight5'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target5" value="<?php echo $row['target5'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual5" value="<?php echo $row['actual5'] ?>"/> </TD>	
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status5" value="<?php echo $row['status5'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score5" value="<?php echo $row['score5'] ?>"/> </TD>-->
		</TR>
		
		<TR height="30">
			
			<TD> 6 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra6" value="<?php echo $row['KRA_6'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi6" value="<?php echo $row['kpi6'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight6" value="<?php echo $row['weight6'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target6" value="<?php echo $row['target6'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual6" value="<?php echo $row['actual6'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status6" value="<?php echo $row['status6'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score6" value="<?php echo $row['score6'] ?>"/> </TD>-->
		</TR>

		<TR height="30">
			
			<TD> 7 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra7" value="<?php echo $row['KRA_7'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi7" value="<?php echo $row['kpi7'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight7" value="<?php echo $row['weight7'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target7" value="<?php echo $row['target7'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual7" value="<?php echo $row['actual7'] ?>"/> </TD>	
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status7" value="<?php echo $row['status7'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score7" value="<?php echo $row['score7'] ?>"/> </TD>-->
		</TR>

		<TR height="30">
			
			<TD> 8 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra8" value="<?php echo $row['KRA_8'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi8" value="<?php echo $row['kpi8'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight8" value="<?php echo $row['weight8'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target8" value="<?php echo $row['target8'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual8" value="<?php echo $row['actual8'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status8" value="<?php echo $row['status8'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score8" value="<?php echo $row['score8'] ?>"/> </TD>-->
		</TR>

		<TR height="30">
			<!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
			<TD> 9 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra9" value="<?php echo $row['KRA_9'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi9" value="<?php echo $row['kpi9'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight9" value="<?php echo $row['weight9'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target9" value="<?php echo $row['target9'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual9" value="<?php echo $row['actual9'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status9" value="<?php echo $row['status9'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score9" value="<?php echo $row['score9'] ?>"/> </TD>-->
		</TR>

		<TR height="30">
			<!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
			<TD> 10 </TD>
			<TD> <INPUT type="text" size="35" style="height:30px;" name="kra10" value="<?php echo $row['KRA_10'] ?>"/> </TD>
			<TD> <INPUT type="text" size="65" style="height:30px;" name="kpi10" value="<?php echo $row['kpi10'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="weight10" value="<?php echo $row['weight10'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="target10" value="<?php echo $row['target10'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="actual10" value="<?php echo $row['actual10'] ?>"/> </TD>
			<TD> <INPUT type="text" size="12" style="height:30px;" name="status10" value="<?php echo $row['status10'] ?>"/> </TD>
			<!--<TD> <INPUT type="text" size="12" style="height:30px;" name="score10" value="<?php echo $row['score10'] ?>"/> </TD>-->
		</TR>
	</TABLE>
	<font size="4" color=#3333cc><br>
	Your Overall Score is <?php echo $row['Rating'] ?>
	<br><br>
	Your Performance Rating is <?php echo $row['performance'] ?>
</font>
	 <?php
				}
	}
	?>
</div>
</form>
	 <br><br><hr>
	 <br><br><br><br><br><br><br>

	<table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">
		 <font size="6" face="Times New Roman" color=#3333cc id="User/Superuser"> User/Superuser </font>
		  </td></tr></table> 
		  <br>
		  <br>

	<!-- USER & SUPERUSER-->
	<?php $host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					
          	if(isset($_POST['Search1']))
					{ 
						$id= $_POST['username'];
						$_SESSION['Emp_ID']=$id; 						
						$query="select * from superuser_intarea where Emp_ID='$id' ";
						$query_run= mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
				<form action="" method="">

	<TABLE width="350px" border="1">
		<TR>
			<th>S.No.</th>
			<th>Category</th>
			<th>Choice</th>
		</TR>
		<TR>
			<!--<TD><INPUT type="checkbox" name="chk"/></TD>-->
			<td>1</td>
			<TD><INPUT type="text" name="user1" size="35" style="height:30px;" value="<?php echo $row['user1'] ?>"/></TD>
			<TD>
				<INPUT type="text" size="35" style="height:30px;" value="User"/>
			</TD>
		</TR>
		<TR>
			<!--<TD><INPUT type="checkbox" name="chk"/></TD>-->
			<td>2</td>
			<TD><INPUT type="text" name="user2" size="35" style="height:30px;" value="<?php echo $row['user2'] ?>"/></TD>
			<TD>
				<INPUT type="text" size="35" style="height:30px;" value="User"/>
			</TD>
		</TR>
		<TR>
			<!--<TD><INPUT type="checkbox" name="chk"/></TD>-->
			<td>3</td>
			<TD><INPUT type="text" name="user3" size="35" style="height:30px;" value="<?php echo $row['user3'] ?>"/></TD>
			<TD>
				<INPUT type="text" size="35" style="height:30px;" value="User"/>
			</TD>
		</TR>
		<TR>
			<!--<TD><INPUT type="checkbox" name="chk"/></TD>-->
			<td>4</td>
			<TD><INPUT type="text" name="s_user" size="35" style="height:30px;" value="<?php echo $row['s_user'] ?>"/></TD>
			<TD>
				<INPUT type="text" size="35" style="height:30px;" value="Super User"/>
			</TD>
		</TR>
		
	</TABLE>
	 <?php
				}
	}
	?>
</form>
	<br><br><hr>
	 <br><br><br><br><br><br><br>

	<table><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td align="right">
		 <font size="6" face="Times New Roman" color=#3333cc id="Interest Area"> Interest Areas </font>
		  </td></tr>
	</table> 
		  <br>
		  <br>
	
		<?php
			 $host = "localhost";
			 $dbUsername = "root";
			 $dbPassword = "tiger";
			 $dbName = "project";
			 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
				if(isset($_POST['Search1']))
					{ 
						$id= $_POST['username'];
						$_SESSION['Emp_ID']=$id; 						
						$query="select * from superuser_intarea where Emp_ID='$id' ";
						$query_run= mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($query_run)) 
						{	

				?>
	<form action="" method="">
	<TABLE width="350px" border="1">
		<TR>
			<th>S.No.</th>
			<th>Interest Areas</th>
		</TR>
		<TR>
			<td>1</td>
			<TD><INPUT type="text" name="int1" size="100" style="height:30px;" value="<?php echo $row['I_area1'] ?>"/></TD>
		</TR>
		<TR>
			<td>2</td>
			<TD><INPUT type="text" name="int2" size="100" style="height:30px;" value="<?php echo $row['I_area2'] ?>"/></TD>
		</TR>
		<TR>
			<td>3</td>
			<TD><INPUT type="text" name="int3" size="100" style="height:30px;" value="<?php echo $row['I_area3'] ?>"/></TD>
		</TR>
	</TABLE>
   <?php
		}
	}
	?>
	</form>
<br><br><br><br><br>

</body>
</div>
</html>
