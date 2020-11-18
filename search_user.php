<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<br>
<form action="" method="POST">
<table>
<tr>
<td width="500" height="100">
<TD height="100" width="200"> <SELECT name="user1"/>
                    <option value="">Select Area</option>
                    <OPTION value="SAP (Controlling/Cost)">SAP (Controlling/Cost)</OPTION>
                    <OPTION value="SAP (Materials Management)">SAP (Materials Management)</OPTION>
                    <OPTION value="SAP (Plant Maintance)">SAP (Plant Maintance)</OPTION>
                    <OPTION value="SAP (Production Planning)">SAP (Production Planning)</OPTION>
                    <OPTION value="SAP (Sales Management)">SAP (Sales Management)</OPTION>
                    <OPTION value="SAP (Human Resource)">SAP (Human Resource)</OPTION>
                    <OPTION value="SAP (Transpotation Management)">SAP (Transpotation Management)</OPTION>
                    <OPTION value="SAP (Quality Management)">SAP (Quality Management)</OPTION>
                    <OPTION value="Power BI">Power BI</OPTION>
                    <OPTION value="Qlikview">Qlikview</OPTION>
                    <OPTION value="Tableau">Tableau</OPTION>
                    <OPTION value="Advance Excel">Advance Excel</OPTION>
                    <OPTION value="Google Meet">Google Meet</OPTION>
                    <OPTION value="PHP">PHP</OPTION>
                    <OPTION value="Android">Android</OPTION>
                    <OPTION value="My SQL">My SQL</OPTION>
                    <OPTION value="Oracle">Oracle</OPTION>
                    
                </SELECT></TD>
    <td width="50"> </td>
    <td><button type="submit" name="user">User</button></td>
    <td width="50">
    <td><button type="submit" name="superuser">Super User</button></td>
</tr>
</table>
</form><font size="3">
<div class="main-nav"><font size="5">
		<ul>
            <marquee>Select Area and Click on User/Super USer !</marquee>
        </ul></font>
	</div>
	<br>
	<br>
    
       
             <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
                    if(isset($_POST['user']))
                    {   $user1=$_POST['user1'];                        
                        $query="select a.Emp_ID,a.Emp_Name,a.Dept_Name from emp_official a join superuser_intarea b on a.Emp_ID=b.Emp_ID where b.user1='$user1' or b.user2='$user1' or b.user3='$user1' ";

                        $query_run= mysqli_query($conn,$query);
                        $row=mysqli_num_rows($query_run);
                        while ($row = mysqli_fetch_array($query_run)) 
                        {
                ?> <font face="Times New Roman" size="4" color=#3333cc>    
                 <TABLE width="350px" border="1"> 
            
            <TR>
            <th width="20">Employee ID</th>
            <th width="80">Employee Name</th>
            <th width="30">Department</th>
             </TR>
             <TR>
             <td width="20"><INPUT type="text" size="20" style="height:30px;"  value="<?php echo $row['Emp_ID']?>"/> </td>
             <TD width="80"> <INPUT type="text" size="80" style="height:30px;" name="actual1" value="<?php echo $row['Emp_Name'] ?>"/> </TD>
            <TD width="30"> <INPUT type="text" size="30" style="height:30px;" name="actual1" value="<?php echo $row['Dept_Name'] ?>"/> </TD>
            </TR>
        </TABLE></font>
            <?php
        }
    }
    ?>


        
         
             <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
                    if(isset($_POST['superuser']))
                    {   $user1=$_POST['user1'];                        
                        $query="select a.Emp_ID,a.Emp_Name,a.Dept_Name from emp_official a join superuser_intarea b on a.Emp_ID=b.Emp_ID where b.s_user='$user1' ";

                      #  $query="select a.Emp_ID,a.Emp_Name,a.Dept_Name,b.Rating,b.performance from emp_official a Join kra b on a.Emp_ID=b.Emp_ID where #a.Dept_Name='$dept'";
                        $query_run= mysqli_query($conn,$query);
                        $row=mysqli_num_rows($query_run);
                        while ($row = mysqli_fetch_array($query_run)) 
                        {
                ?>  
           <font face="Times New Roman" size="4" color=#3333cc>  <TABLE border="1">  
            <TR>
            <th width="20">Employee ID</th>
            <th width="80">Employee Name</th>
            <th width="30">Department</th>
             </TR></font>
             <TR>
             <td width="20"><INPUT type="text" size="20" style="height:30px;"  value="<?php echo $row['Emp_ID']?>"/> </td>
             <TD width="80"> <INPUT type="text" size="80" style="height:30px;" name="actual1" value="<?php echo $row['Emp_Name'] ?>"/> </TD>
            <TD width="30"> <INPUT type="text" size="30" style="height:30px;" name="actual1" value="<?php echo $row['Dept_Name'] ?>"/> </TD>
            </TR>
        </TABLE>
    </font>
            <?php
        }
    }
    ?>
</div>  

</body>
</html>