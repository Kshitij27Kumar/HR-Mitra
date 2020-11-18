<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<center>
<form action="search1.php" method="POST">
		<font size="5" color="blue">	
	<table>
		<tr>
			<td width="250" height="100">
            Enter Employee Id
            </td width="200" height="100">
            <td><Input Type=text name="Emp_ID" Size="20" />
            </td>
            <td width="100" height="100"></td> 
			<td><button type="submit" name="Search">Search</button></td>
        </tr>
</table>
</form>
</center>

<div class="main-nav">
		<ul>
			<marquee>Enter Employee ID and Click on Search Button !</marquee>
		</ul>
	</div>
	<br>
	<br>

	<i><font size="6" face="Times New Roman" color=#3333cc id="Official Details"> Official Details </font></i>
	<br>
	<br>
	<form>
	<font size="4" color="blue">			
        <table>
        	<tr>
            <td width="150" height="50">Employee ID : </td>   
            <td><input type="text" size="45" name="Emp_ID" /></td>
            
             <td width="200" height="50"></td>  

             <td width="200">Employee Name : </td>   
            <td><input type="text" size="45"  name="Emp_name" /></td>
            
            <td width="100" height="50"></td>  

          	<td></td>
            </tr>
            <tr>

            <td width="200">Department Name : </td>   
            <td><input type="text" size="45"  name="Dept_Name" /></td>

             <td width="200" height="50"></td>  
           
            <td width="150" height="50">Date of Joining : </td>   
            <td><input type="text" name="DOJ" size="45" /></td>

            </tr>
        	
        	<tr>
            <td>Designation : </td>   
            <td><input type="text" size="45" name="Desig" /></td>
            	 <td width="200" height="50"></td>  
            <td width="150" height="50">Status : </td>   
            <td><input type="text" name="Status" size="45" /></td>
           
            
           </tr>
           <tr>
            
            
            <td>Reporting Manager ID : </td>   
            <td><input type="text" name="Rept_mgr" size="45" /></td>
            <td width="200" height="50"></td>
             <td width="150" height="50">Assigned Job : </td>   
            <td><textarea name="ass_job" rows="5" cols="42"></textarea></td>
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
            <td><input type="text" size="45" name="MStatus"/></td>

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
</body>
</html>