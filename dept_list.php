<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<center>
<form action="" method="POST">

		<font size="5" color="blue">	
	<table>
		<tr>
			<td width="150" height="100">
			Department
			</td width="100" height="100">
			<td>
                <SELECT name="department"/>
                    <option value="">Select Department</option>
                    <OPTION value="Accounts">Accounts</OPTION>
                    <OPTION value="Commercial">Commercial</OPTION>
                    <OPTION value="HR">HR</OPTION>
                    <OPTION value="IT">IT</OPTION>
                    <OPTION value="Marketing">Marketing</OPTION>
                    <OPTION value="Production">Production</OPTION>
                    
                </SELECT>
			</td>
			<td width="100" height="100"></td> 
			<td><button type="submit" name="Search">Search</button></td>
        </tr>
</table>
</form>
</center>

<div class="main-nav">
		<ul>
			<marquee>Select Department and Click On Search Button</marquee>
		</ul>
	</div>
	<br>
	<br>

	<!--<i><font size="6" face="Times New Roman" color=#3333cc > KRA </font></i>-->
	
    <td></td>
	<form action=" " method="POST">
        <TABLE border="1">
         
            <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
                    if(isset($_POST['Search']))
                    {
                        $dept=$_POST['department'];                        
                        $query="select a.Emp_ID,a.Emp_Name,a.Dept_Name,b.Rating,b.performance from emp_official a Join kra b on a.Emp_ID=b.Emp_ID where a.Dept_Name='$dept'";
                        $query_run= mysqli_query($conn,$query);
                        $row=mysqli_num_rows($query_run);

                     if(mysqli_num_rows($query_run)==0)
                    {
                    echo '<script> alert("No record exists for this department !!!")</script>';
                    exit();
                    }
                    else
                    {
                        $query_run= mysqli_query($conn,$query);
                        while ($row = mysqli_fetch_array($query_run)) 
                        {
                ?>
                
    
        <font face="Times New Roman" color=#3333cc>
        <TR>
            
            <th width="30">Employee ID</th>
            <th width="80">Employee Name</th>
            <th width="20">Department</th>
            <th width="10">Rating</th>
            <th width="30">Performance</th>
            
        </TR>
    </font>
        <TR height="30">
           
            <TD> <INPUT type="text" size="30" style="height:30px;" name="actual1" value="<?php echo $row['Emp_ID'] ?>"/> </TD> 
            <TD> <INPUT type="text" size="80" style="height:30px;" name="actual1" value="<?php echo $row['Emp_Name'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="actual1" value="<?php echo $row['Dept_Name'] ?>"/> </TD>
            <TD><INPUT type="text" size="10" style="height:30px;" name="status1" value="<?php echo $row['Rating'] ?>"/>  </TD>
            <TD><INPUT type="text" size="30" style="height:30px;" name="score1" value="<?php echo $row['performance'] ?>"/>  </TD>
        </TR>
        
    </TABLE>
     <?php
                }
    }
}
    ?>
</body>
</html>