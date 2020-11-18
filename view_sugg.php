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
<TD height="100" width="200"> <SELECT name="area"/>
                    <option value="">Select Area</option>
                    <OPTION value="Safety & Work Culture">Safety & Work Culture</OPTION>
                    <OPTION value="System Improvement">System Improvement</OPTION>
                    <OPTION value="Wastage & Cost Control">Wastage & Cost Control</OPTION>
                    <OPTION value="Improvement in Productivity & Quality">Improvement in Productivity & Quality</OPTION>
                    <OPTION value="Improvement in Delivery">Improvement in Delivery</OPTION>
                   </SELECT></TD>
    <td width="50"> </td>
    <td><button type="submit" name="search">Search</button></td>
    <td width="50">
    <td></td>
</tr>
</table>
</form>
<!--<center>
<?php
        echo "<img src='http://localhost/kshitij/images/sugg4.jfif'/>";
        echo "<img src='http://localhost/kshitij/images/suggbox.png'/>";
        echo "<img src='http://localhost/kshitij/images/idea1.jpg'/>";
        
        ?>   
    </center>-->    
<div class="main-nav">
		<ul>  
        </ul>
	</div>
    <br>
    <br>
	<form action="" method="POST">
        <div class="container">   <font size="4" face="Times New Roman" color=#3333cc><font size="4" face="Times New Roman" color=#3333cc>
        <TABLE border="1">
            <TR>
            <th width="20">Employee ID</th>
            <th width="150">Suggestions</th>
            </TR>       
            <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");
                    if(isset($_POST['search']))
                    {
                        $area=$_POST['area'];                        
                        $query="select * from suggestion where area='$area'";
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
                
            
                    
             <TR>
             <td width="20" heigth="50"><INPUT type="text" size="20" style="height:50px;" style="font-size:50px;" value="<?php echo $row['Emp_ID']?>"/> </td>
             <TD width="150" heigth="50"> <INPUT type="text" size="200" style="height:50px;" value="<?php echo $row['sugg'] ?>"/> </TD>
            
            </TR>
           


  <?php
        }
    }
}
    ?></TABLE></font>
</form>
</body>
</html>
