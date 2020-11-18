<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
</head>
<body>
<center>
<?php
       
        echo "<img src='http://localhost/kshitij/images/kra.png'/>";
        echo "<img src='http://localhost/kshitij/images/kra3.jfif'/>";
         echo "<img src='http://localhost/kshitij/images/goal1.jfif'/>";
        ?>
            
    </center>
<div class="main-nav">
		<font size="5">
        <ul>
            <marquee>Set Your Goals for the year 2020 !</marquee>
        </ul></font>
        
	</div>
	    <form action="http://localhost/kshitij/kra1.php" method="POST">
	   <table>
        <tr>
            <td width="1350" height="50"></td> 
            <td><button type="submit" name="save">Save KRA</button></td>
        </tr>
        </table>
        <font size="4" face="Times New Roman" color=#3333cc>
        <TABLE border="1">
        <TR>
            <th width="25">KRA No.</th>
            <th>Key Result Areas</th>
            <th>Key Performance Indicators</th>
            <th>Weight of KPIs</th>
            <th>Target</th>
            
        </TR>
        <TR height="30">
            
            <TD> 1 </TD>
        
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra1"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi1"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight1"/></TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target1"/> </TD>    <!-- User can't enter final score-->
            
        </TR>
        <TR height="30">
            
            <TD> 2 </TD>
        
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra2" /> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi2"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight2"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target2"/> </TD>    <!-- User can't enter final score-->
            
        </TR>
        <TR height="30">
            
            <TD> 3 </TD>
          
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra3"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi3"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight3"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target3"/> </TD>    <!-- User can't enter final score-->
            
        </TR>
        <TR height="30">
            
            <TD width="50"> 4 </TD>
         
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra4"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi4"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight4"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target4"/> </TD>    <!-- User can't enter final score--> 
        </TR>
        <TR height="30">
            
            <TD> 5 </TD>
           <!-- <TD> <INPUT type="text" size="55" style="height:30px;" name="kra_no5" /> </TD>-->
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra5"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi5"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight5"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target5"/> </TD>    <!-- User can't enter final score-->
            
        </TR>
        
        <TR height="30">
            
            <TD> 6 </TD>
          <!--  <TD> <INPUT type="text" size="55" style="height:30px;" name="kra_no6" /> </TD> -->
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra6"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi6"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight6"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target6"/> </TD>    <!-- User can't enter final score-->
        </TR>

        <TR height="30">
           
            <TD> 7 </TD>
         <!--   <TD> <INPUT type="text" size="55" style="height:30px;" name="kra_no7" /> </TD> -->
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra7"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi7"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight7"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target7"/> </TD>    <!-- User can't enter final score-->
        </TR>

        <TR height="30">
             <TD> 8 </TD>
          
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra8"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi8"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight8"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target8"/> </TD>   
         </TR>  
        <TR height="30">
            
            <TD> 9 </TD>
           
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra9"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi9"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight9"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target9"/> </TD>    
        </TR>

        <TR height="30">
           
            <TD> 10 </TD>
          
            <TD> <INPUT type="text" size="55" style="height:30px;" name="kra10"/> </TD>
            <TD> <INPUT type="text" size="85" style="height:30px;" name="kpi10"/> </TD>
            <TD> <INPUT type="text" size="15" style="height:30px;" name="weight10"/> </TD>
            <TD> <INPUT type="text" size="12" style="height:30px;" name="target10"/> </TD>    
            
        </TR>
    </TABLE>
</font>
<form>
    
</body>
</html>