<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<br>
<br>

<div class="main-nav">
		<ul>
           
        </ul>
	</div>
	<br>
	<br>
    <form action="" method="POST">
        <TABLE width="350px" border="1">
             <?php
                   
                    $host = "localhost";
                    $dbUsername = "root";
                    $dbPassword = "tiger";
                    $dbName = "project";
                    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,"3307");               
                        $query="select * form suggestion";
                        $query_run= mysqli_query($conn,$query);
                         $row=mysqli_num_rows($query_run);
                        while ($row = mysqli_fetch_array($query_run)) 
                        {
                ?>      
            <TR>
           
            <th width="20">Employee ID</th>
            <th width="200">Suggestions</th>
             </TR>
             <TR>
             <td><INPUT type="text" size="12" style="height:30px;"  value="<?php echo $row['Emp_ID']?>"/> </td>
             <TD> <INPUT type="text" size="12" style="height:200px;" name="actual1" value="<?php echo $row['sugg'] ?>"/> </TD>
            
            </TR>
            <?php
        
    }
    ?>
</TABLE>
</form>
</body>
</html>
