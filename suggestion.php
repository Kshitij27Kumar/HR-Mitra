<!doctype html>
<html>
<head>
	<title>Employee Information</title>
     <style type="text/css">
        input[type=text] {
        width: 96%;
         padding: 12px 20px;
       
        }
    </style>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
       
</head>
<body><br>
<center><marquee>
<?php
       
        echo "<img src='http://localhost/kshitij/images/suggestion1.png'/>";
        echo "<img src='http://localhost/kshitij/images/sugg5.png'/>";
         echo "<img src='http://localhost/kshitij/images/sugg3.jfif'/>";
        ?></marquee>
            
    </center>
<div class="main-nav">
		<ul>
        </ul>
	</div>
    <br>
    <br>
    <br>
    <br>
	<form action="http://localhost/kshitij/suggestion1.php" method="POST">
       <font size="4" face="Times New Roman" color=#3333cc>
        <TABLE border="1">
        <TR>
            <th>S.No.</th>
            <th>Suggestions</th>
            <th>Area</th>
        </TR>
        <TR>
          
            <td>1</td>
            <TD><input type="text" size="150" name="sugg1" /></TD>
            <td>
                <SELECT name="area" />
                    <option value="">Select Area</option>
                    <OPTION value="Safety & Work Culture">Safety & Work Culture</OPTION>
                    <OPTION value="System Improvement">System Improvement</OPTION>
                    <OPTION value="Wastage & Cost Control">Wastage & Cost Control</OPTION>
                    <OPTION value="Improvement in Productivity & Quality">Improvement in Productivity & Quality</OPTION>
                    <OPTION value="Improvement in Delivery">Improvement in Delivery</OPTION>
                  
                </SELECT></td>
            <td></td>
        </TR>
        
        
    </TABLE>
    
         <table>
        <tr>
            <td width="1300" height="70"></td> 
            <td><button type="submit" name="save">Send</button></td>
        </tr>
        </table> 
      
       </font>
</form>
<br>
<br>
   <center>
<?php
        echo "<img src='http://localhost/kshitij/images/sugg4.jfif'/>";
        echo "<img src='http://localhost/kshitij/images/suggbox.png'/>";
        echo "<img src='http://localhost/kshitij/images/idea1.jpg'/>";
        
        ?>   
    </center>
</body>
</html>
