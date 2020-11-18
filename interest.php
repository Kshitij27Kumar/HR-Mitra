<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
    <style type="text/css">
        input[type=text] {
  width: 96%;
   padding: 12px 20px;
  
}
    </style>
</head>
<body>
<center>
<?php
        echo "<img src='http://localhost/kshitij/images/interest4.jfif'/>";
        echo "<img src='http://localhost/kshitij/images/interest3.png'/>";
        echo "<img src='http://localhost/kshitij/images/interest2.jpg'/>";
        
 ?>
            
    </center>
<div class="main-nav">
		<ul>
        </ul>
	</div>
	<br>
    <br>
<form action="http://localhost/kshitij/interest1.php" method="POST">
     <font size="4" face="Times New Roman" color=#3333cc>
        <TABLE border="1">
        <TR>
            <th width="10">S.No.</th>
            <th width="160">Interest Area</th>
            
        </TR>
        <TR>
            <td width="10">1</td>
            <TD><input type="text" size="160" name="Int1" /></TD>
            
        </TR>
        <TR>
             <td width="10">2</td>
            <TD><input type="text" size="160" name="Int2" /></TD>
        </TR>
        <TR>
            <td width="10">3</td>
            <TD><input type="text" size="160" name="Int3" /></TD>
            
        </TR>
        
    </TABLE>
   
       <table>
        
            <td width="1200" height="50"></td> 
            <td><button type="submit" name="save">Save</button></td>
        </tr>
        </table>
    </font>
</form>
    
</body>
</html>
