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
			<td width="200" height="100">
			Enter Employee Id
			</td width="200" height="100">
			<td><Input Type=text name="Emp_ID" Size="10" />
			</td>
			<td width="200" height="100"></td> 
			<td><button type="submit" name="Search">Search</button></td>
        </tr>
</table>
</form>
</center>

<div class="main-nav">
		<ul>
			<marquee>Enter Employee ID and Click On Search Button</marquee>
		</ul>
	</div>
	<br>
	<br>

	<i><font size="6" face="Times New Roman" color=#3333cc > KRA </font></i>
	<br>
    <td></td>
	<br>
	<form action="http://localhost/kshitij/kra_status.php" method="POST">
        <button type="submit" name="update_status">Update Status</button>
          <div class="container">   
            <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";

                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
                    if(isset($_POST['Search']))
                    {
                        $id= $_POST['Emp_ID'];
                        session_start();
                    
                         $_SESSION['S_ID']=$id;                         
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
            <th>Score</th>
        </TR>
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 1 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra1" value="<?php echo $row['KRA_1'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi1" value="<?php echo $row['kpi1'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight1" value="<?php echo $row['weight1'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target1" value="<?php echo $row['target1'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual1" value="<?php echo $row['actual1'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status1"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
            
        </TR>
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 2 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra2" value="<?php echo $row['KRA_2'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi2" value="<?php echo $row['kpi2'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight2" value="<?php echo $row['weight2'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target2" value="<?php echo $row['target2'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual2" value="<?php echo $row['actual2'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status2"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT> </TD>
        </TR>
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 3 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra3" value="<?php echo $row['KRA_3'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi3" value="<?php echo $row['kpi3'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight3" value="<?php echo $row['weight3'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target3" value="<?php echo $row['target3'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual3" value="<?php echo $row['actual3'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status3"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 4 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra4" value="<?php echo $row['KRA_4'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi4" value="<?php echo $row['kpi4'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight4" value="<?php echo $row['weight4'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target4" value="<?php echo $row['target4'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual4" value="<?php echo $row['actual4'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status4"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 5 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra5" value="<?php echo $row['KRA_5'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi5" value="<?php echo $row['kpi5'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight5" value="<?php echo $row['weight5'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target5" value="<?php echo $row['target5'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual5" value="<?php echo $row['actual5'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status5"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>
        
        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 6 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra6" value="<?php echo $row['KRA_6'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi6" value="<?php echo $row['kpi6'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight6" value="<?php echo $row['weight6'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target6" value="<?php echo $row['target6'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual6" value="<?php echo $row['actual6'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status6"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>

        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 7 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra7" value="<?php echo $row['KRA_7'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi7" value="<?php echo $row['kpi7'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight7" value="<?php echo $row['weight7'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target7" value="<?php echo $row['target7'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual7" value="<?php echo $row['actual7'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status7"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>

        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 8 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra8" value="<?php echo $row['KRA_8'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi8" value="<?php echo $row['kpi8'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight8" value="<?php echo $row['weight8'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target8" value="<?php echo $row['target8'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual8" value="<?php echo $row['actual8'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status8"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>

        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 9 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra9" value="<?php echo $row['KRA_9'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi9" value="<?php echo $row['kpi9'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight9" value="<?php echo $row['weight9'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target9" value="<?php echo $row['target9'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual9" value="<?php echo $row['actual9'] ?>"/> </TD> <!-- User can't enter final score-->
            <TD> <SELECT name="status9"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>

        <TR height="30">
            <!--<TD><INPUT type="checkbox" name="chk[]"/></TD>-->
            <TD> 10 </TD>
            <TD> <INPUT type="text" size="35" style="height:30px;" name="kra10" value="<?php echo $row['KRA_10'] ?>"/> </TD>
            <TD> <INPUT type="text" size="65" style="height:30px;" name="kpi10" value="<?php echo $row['kpi10'] ?>"/> </TD>
            <TD> <INPUT type="text" size="20" style="height:30px;" name="weight10" value="<?php echo $row['weight10'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target10" value="<?php echo $row['target10'] ?>"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="actual10" value="<?php echo $row['actual10'] ?>"/> </TD>   <!-- User can't enter final score-->
            <TD> <SELECT name="status10"/>
                    <option value="">Select Status</option>
                    <OPTION value="Approved">Approve</OPTION>
                    <OPTION value="Rejected">Reject</OPTION>
                </SELECT></TD>
        </TR>
    </TABLE>
     <?php
                }
    }
    ?>
</body>
</html>