<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<center>
<form action="" method="POST">
	 <?php
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					

					if(isset($_POST['Search']))
					{
						$id= $_POST['Emp_ID'];
						
						$query="select * from emp_official where Emp_ID='$id'";
						$query_run= mysqli_query($conn,$query);
						  $row=mysqli_num_rows($query_run);
    					if(mysqli_num_rows($query_run)==0)  
    					{
    						echo '<script>alert("Wrong Employee ID!!!")</script>';
            				header('Location:HRPage.php');	

            			exit();

    					}
    					else
   						{
						/*$query_run= mysqli_query($conn,$query);*/
						
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
		<font size="5" color="blue">	
	<table>
		<tr>
			<td width="200" height="100">
			Enter Employee Id
			</td width="200" height="100">
			<td><Input Type=text name="Emp_ID" Size="10" value="<?php echo $row['Emp_ID'] ?>" />
			</td>
			<td width="200" height="100"></td> 
			<td><button type="submit" name="Search">Search</button></td>
        </tr>
</table>

</center>

<div class="main-nav">
		<ul>
			<marquee>Change Details of the Employee and Click on Update Details !</marquee>
		</ul>
	</div>
	<br>
	<br>

	<i><font size="6" face="Times New Roman" color=#3333cc id="Official Details"> Official Details </font></i>
	<br>
	<br>
	
	<font size="4" color="blue">			
        <table>
        	<tr>
            <td width="150" height="50">Employee ID : </td>   
            <td><input type="text" size="45" name="Emp_ID" value="<?php echo $row['Emp_ID'] ?>" /></td>
            
             <td width="200" height="50"></td>  

             <td width="200">Employee Name : </td>   
            <td><input type="text" size="45"  name="Emp_name" value="<?php echo $row['Emp_Name'] ?>" /></td>
            
            <td width="100" height="50"></td>  

          	<td><button type="submit" name="update">Update Details</button></td>
            </tr>
            <tr>

            <td width="200">Department Name : </td>   
            <td>
               <!-- <SELECT name="Dept_Name" value="<?php echo $row['Dept_Name'] ?>"/>
                    <option value="">Select Department</option>
                    <OPTION value="Accounts">Accounts</OPTION>
                    <OPTION value="Commercial">Commercial</OPTION>
                    <OPTION value="HR">HR</OPTION>
                    <OPTION value="IT">IT</OPTION>
                    <OPTION value="Marketing">Marketing</OPTION>
                    <OPTION value="Production">Production</OPTION>
                    
                </SELECT>-->
            <input type="text" size="45"  name="Dept_Name" value="<?php echo $row['Dept_Name'] ?>" /></td>

             <td width="200" height="50"></td>  
           
            <td width="150" height="50">Date of Joining : </td>   
            <td><input type="text" name="DOJ" size="45" value="<?php echo $row['DOJ'] ?>"/></td>

            </tr>
        	
        	<tr>
            <td>Designation : </td>   
            <td><input type="text" size="45" name="Desig" value="<?php echo $row['Desg'] ?>"/></td>
            	 <td width="200" height="50"></td>  
            <td width="150" height="50">Status : </td>   
            <td><input type="text" name="Status" size="45" value="<?php echo $row['Status'] ?>"/></td>
            
           </tr>
           <tr> 
           	
            <td>Reporting Manager ID : </td>   
            <td><input type="text" name="Rept_mgr" size="45" value="<?php echo $row['Reporting_Mgr_ID']?>" /></td>
             <td width="200" height="50"></td> 
             <td width="150" height="50"/>Assigned Job : </td>   
            <td><textarea name="ass_job" rows="5" cols="42" ><?php echo $row['Assigned_Job'] ?></textarea></td>
           
            </tr>	
        	
    	</table>
    </font>
   <?php
						}
					}
				}

						?>
	<br>
	<hr>
	
    	<?php

					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
          	if(isset($_POST['Search']))
					{
						$id= $_POST['Emp_ID'];
												
						$query="select * from emp_personal where Emp_ID='$id' ";
						$query_run= mysqli_query($conn,$query);
						while ($row = mysqli_fetch_array($query_run)) 
						{
				?>
        <i><font size="6" face="Times New Roman" color=#3333cc id="Personal Details"> Personal Details </font></i>
    	<font size="4" color="blue">
        <table>
        	<tr><td height="50"></td>  <td></td>  <td></td>  <td></td> </tr>
        	<tr>
           <!-- <td height="50">Employee Name : </td>
            <td><input type="text" size="45" name="Name" /></td>-->
            <td>Father's Name :</td>
        	<td><input type="text" size="45" name="F_Name" value="<?php echo $row['F_Name'] ?>" /></td>

            <td width="200" height="50"></td>

     		<td>Mother's Name : </td>   
            <td><input type="text" size="45" name="M_Name" value="<?php echo $row['M_Name'] ?>" /></td>

        	<td width="100" height="50"></td>  

          	</tr>
        	<tr>
            <td>Born On :</td>
        	<td><input type="text" size="45" name="DOB" value="<?php echo $row['DOB'] ?>"/></td>
        	<td width="100" height="50"></td>
        	<td>Gender : </td>   
            <td><input type="text" size="45" name="Gender" value="<?php echo $row['Gender'] ?>" /></td>
        	</tr>
        	<tr>
            <td>Blood Group : </td>   
            <td><input type="text" size="45" name="B_grp" value="<?php echo $row['Blood_Grp'] ?>"/></td>

            <td width="100" height="50"></td>  

            <td>Current Address : </td>   
            <td><textarea name="add1" rows="5" cols="42"><?php echo $row['Current_Add'] ?></textarea></td>
        	</tr>
        	
        	<tr>
             <td>Permanent Address : </td>   
            <td><textarea name="add2" rows="5" cols="42"><?php echo $row['Permanent_Add'] ?></textarea></td>
        	
        	 <td height="50"></td> 
        	 <td>Contact No. : </td>   
            <td><input type="text" size="45" name="Cont_no" value="<?php echo $row['Contact_No'] ?>"/></td> 
           
        	</tr>
        	
        	<tr>
        	 <td>Marital Status : </td>   
            <td><input type="text" size="45" name="MStatus" value="<?php echo $row['Marital_Status'] ?>"/></td>

            <td width="100" height="50"></td>  

            <td>Religion : </td>   
            <td><input type="text" size="45" name="Religion" value="<?php echo $row['Religion'] ?>" /></td>
            </tr>
        	
        	<tr>
           <td>Nationality : </td>   
            <td><input type="text" size="45" name="Country" value="<?php echo $row['Nationality'] ?>"/></td>
        	
        	<td width="100" height="50"></td>  
        	<td>Aadhar No. : </td>   
            <td><input type="text" size="45" name="Aadhar" value="<?php echo $row['Aadhar_No'] ?>"/></td>
            
        	</tr>

        	<tr>
            <td>Pan No. : </td>   
            <td><input type="text" size="45" name="Pan" value="<?php echo $row['Pan_No'] ?>" /></td>
        	
        	<td width="100" height="50"></td>  
        	<td>Emergency Contact : </td>   
            <td><input type="text" size="45" name="Emergency_No" value="<?php echo $row['Emergency_No'] ?>" /></td>
            
        	</tr>
        	

        	<tr>
            <td>E-mail ID : </td>   
            <td><input type="text" size="45" name="ID" value="<?php echo $row['Email_ID'] ?>" /></td>

        	<td width="100" height="50"></td>  
        	<td>Nominee: </td>   
            <td><input type="text" size="45" name="Name" value="<?php echo $row['Nominee'] ?>" /></td>
            
        	</tr>
        	
        	<tr>
            <td>Relationship with Nominee : </td>   
            <td><input type="text" size="45" name="Relationship" value="<?php echo $row['Rel_Nominee'] ?>"/></td>
        	
        	<!--<td width="100" height="50"></td>  -->

            
        	</tr>
        	
    	</table>
    </font>
    <?php
				}
			}
			?>
	</form>
</body>
</html>
<?php
					$host = "localhost";
					$dbUsername = "root";
					$dbPassword = "tiger";
					$dbName = "project";

					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
					

					if(isset($_POST['update']))
					{
						$Emp_ID = $_POST['Emp_ID'];
						$Emp_name = $_POST['Emp_name'];
						$Dept_Name=$_POST['Dept_Name'];
						$Rept_mgr=$_POST['Rept_mgr'];
						$DOJ=$_POST['DOJ'];
						$Desig=$_POST['Desig'];
						$Status=$_POST['Status'];
						$ass_job=$_POST['ass_job'];
						/*$pass=$_POST['pass'];*/

						$F_Name = $_POST['F_Name'];
						$M_Name = $_POST['M_Name'];
						$DOB=$_POST['DOB'];
						$Gender=$_POST['Gender'];
						$B_grp=$_POST['B_grp'];
						$add1=$_POST['add1'];
						$add2=$_POST['add2'];
						$Cont_no=$_POST['Cont_no'];
						$MStatus=$_POST['MStatus'];
						$Religion=$_POST['Religion'];
						$Country=$_POST['Country'];
						$Aadhar=$_POST['Aadhar'];
						$Pan=$_POST['Pan'];
						$Emergency_No=$_POST['Emergency_No'];
						$ID=$_POST['ID'];
						$Name=$_POST['Name'];
						$Relationship=$_POST['Relationship'];
						$B_grp=$_POST['B_grp'];

						$query= "UPDATE emp_official SET Emp_ID='$Emp_ID',Emp_Name='$Emp_name',Dept_Name='$Dept_Name',Reporting_Mgr_ID='$Rept_mgr',DOJ='$DOJ', Desg='$Desig',Status='$Status',Assigned_Job='$ass_job' where Emp_ID='$Emp_ID' ";
                         
						$query_run= mysqli_query($conn,$query);

                        $query= "UPDATE emp_personal SET F_Name='$F_Name',M_Name='$M_Name',DOB='$DOB',Gender='$Gender',  Current_Add='$add1',Permanent_Add=   '$add2',Blood_Grp='$B_grp',Marital_Status='$MStatus',Aadhar_No='$Aadhar',Pan_No='$Pan',Religion='$Religion', Nationality='$Country',Contact_No='$Cont_no',Emergency_No='$Emergency_No',Email_ID='$ID',Nominee='$Name', Rel_Nominee='$Relationship' where Emp_ID='$Emp_ID' ";

                        $query_run= mysqli_query($conn,$query);                        
						if ($query_run) {
							
							echo '<script> alert("Data updated") </script>';
                            header('Location:HRPage.php');    
                            exit();
						}
						else{
							echo '<script> alert("Data not updated") </script>';
						}

					}
?>