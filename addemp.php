<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<center>
	
	<?php
		echo "<img src='http://localhost/kshitij/images/add.jfif'/>";
		echo "<img src='http://localhost/kshitij/images/add1.jpg'/>";
		echo "<img src='http://localhost/kshitij/images/feedback.jpg'/>";
		?>
	
</center>

<div class="main-nav"><font size="5">
		<ul>
			<marquee>Enter Details of a New Employee and Click on Save Detail !</marquee>
		</ul></font>
	</div>
	<br>
	<br>

	<i><font size="6" face="Times New Roman" color=#3333cc id="Official Details"> Official Details </font></i>
	<br>
	<br>
	<form action="http://localhost/kshitij/add1.php" method="POST">
	<font size="4" color="blue">			
        <table>
        	<tr>
            <td width="150" height="50">Employee ID : </td>   
            <td><input type="text" size="45" name="Emp_ID" /></td>
            
             <td width="200" height="50"></td>  

             <td width="200">Employee Name : </td>   
            <td><input type="text" size="45"  name="Emp_name" /></td>
            
            <td width="100" height="50"></td>  

          	<td><button type="submit" name="add_official">Save Details</button></td>
            </tr>
            <tr>

            <td width="200">Department Name : </td>   
            <td width="200"><SELECT name="Dept_Name" />
                    <option value="">Select Department</option>
                    <OPTION value="Accounts">Accounts</OPTION>
                    <OPTION value="Commercial">Commercial</OPTION>
                    <OPTION value="HR">HR</OPTION>
                    <OPTION value="IT">IT</OPTION>
                    <OPTION value="Marketing">Marketing</OPTION>
                    <OPTION value="Production">Production</OPTION>
                    
                </SELECT></td>

             <td width="200" height="50"></td>  
           
            <td width="150" height="50">Date of Joining : </td>   
            <td><input type="text" name="DOJ" size="45" /></td>

            </tr>
        	
        	<tr>
            <td>Designation : </td>   
            <td><input type="text" size="45" name="Desig" /></td>

            	 <td width="200" height="50"></td>  
                 
            <td width="150" height="50">Default Password : </td>   
            <td><input type="text" name="pass" size="45" /></td>

            
           </tr>
           <tr>
            <td>Assigned Job : </td>   
            <td><textarea name="ass_job" rows="5" cols="42"></textarea></td>
             <td width="200" height="50"></td>  
            <td width="150" height="50">Reporting Manager ID : </td>   
            <td><input type="text" name="Rept_mgr" size="45" /></td>

            </tr>	
        	
    	</table>
    </font>
   
	<br>
	<hr>
	<i><font size="6" face="Times New Roman" color=#3333cc id="Personal Details"> Personal Details </font></i>
    
    	<font size="4" color="blue">
        <table>
        	<tr><td height="50"></td>  <td></td>  <td></td>  <td></td> </tr>
        	<tr>
           <!-- <td height="50">Employee Name : </td>
            <td><input type="text" size="45" name="Name" /></td>-->
            <td>Father's Name :</td>
        	<td><input type="text" size="45" name="F_Name" /></td>

            <td width="200" height="50"></td>

     		<td>Mother's Name : </td>   
            <td><input type="text" size="45" name="M_Name" /></td>

        	<td width="100" height="50"></td>  

          	</tr>
        	<tr>
            <td>Born On :</td>
        	<td><input type="text" size="45" name="DOB" /></td>
        	<td width="100" height="50"></td>
        	<td>Gender : </td>   
            <td><input type="text" size="45" name="Gender" /></td>
        	</tr>
        	<tr>
            <td>Blood Group : </td>   
            <td><input type="text" size="45" name="B_grp" /></td>

            <td width="100" height="50"></td>  

            <td>Current Address : </td>   
            <td><textarea name="add1" rows="5" cols="42"></textarea></td>
        	</tr>
        	
        	<tr>
             <td>Permanent Address : </td>   
            <td><textarea name="add2" rows="5" cols="42"></textarea></td>
        	
        	 <td height="50"></td> 
        	 <td>Contact No. : </td>   
            <td><input type="text" size="45" name="Cont_no" /></td> 
           
        	</tr>
        	
        	<tr>
        	 <td>Marital Status : </td>   
            <td><input type="text" size="45" name="Status"/></td>

            <td width="100" height="50"></td>  

            <td>Religion : </td>   
            <td><input type="text" size="45" name="Religion"/></td>
            </tr>
        	
        	<tr>
           <td>Nationality : </td>   
            <td><input type="text" size="45" name="Country" /></td>
        	
        	<td width="100" height="50"></td>  
        	<td>Aadhar No. : </td>   
            <td><input type="text" size="45" name="Aadhar" /></td>
            
        	</tr>

        	<tr>
            <td>Pan No. : </td>   
            <td><input type="text" size="45" name="Pan" /></td>
        	
        	<td width="100" height="50"></td>  
        	<td>Emergency Contact : </td>   
            <td><input type="text" size="45" name="Emergency_No" /></td>
            
        	</tr>
        	

        	<tr>
            <td>E-mail ID : </td>   
            <td><input type="text" size="45" name="ID" /></td>

        	<td width="100" height="50"></td>  
        	<td>Nominee: </td>   
            <td><input type="text" size="45" name="Name" /></td>
            
        	</tr>
        	
        	<tr>
            <td>Relationship with Nominee : </td>   
            <td><input type="text" size="45" name="Relationship" /></td>
        	
        	<!--<td width="100" height="50"></td>  -->

            
        	</tr>
        	
    	</table>
    </font>
	</form>
    <br>
    <br>
</body>
</html>