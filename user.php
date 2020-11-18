<!doctype html>
<html>
<head>
	<title>Employee Information</title>
	<link rel= "stylesheet" type="text/css" href="addempcss.php"/>
    <style type="text/css">
    p {
  
  
  margin-right: 150px;
  margin-left: 80px;
}</style>
</head>
<body>
<center>
<?php
       
        echo "<img src='http://localhost/kshitij/images/user3.png'/>";
        echo "<img src='http://localhost/kshitij/images/superuser.jpg'/>";
         echo "<img src='http://localhost/kshitij/images/add1.jpg'/>";
        ?>
            
    </center>
<div class="main-nav">
		<ul>
        </ul>
	</div>
	<br><center>
    <form action="http://localhost/kshitij/user1.php" method="POST">
        <font size="4" face="Times New Roman" color=#3333cc>
	   <table>
        <tr>
            <td width="550" height="50"></td> 
            <td><button type="submit" name="save">Save</button></td>
        </tr>
        </table>
        <TABLE border="1">
        <TR>
            <th>S.No.</th>
            <th>Category</th>
            <th>Choice</th>
        </TR>
        <TR>
            
            <td width="10">1</td>
            <TD width="100"> <SELECT name="user1"/>
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
            <TD width="60">
                <SELECT name="Choice1"/>
                    <option value="">Select User/SuperUser</option>
                    <OPTION value="User">User</OPTION>
                    <OPTION value="Superuser">Superuser</OPTION>
                </SELECT>
            </TD>
        </TR>
        <TR>
             <td>2</td>
            <TD> <SELECT name="user2"/>
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
            <TD>
                <SELECT name="Choice2"/>
                    <option value="">Select User/SuperUser</option>
                    <OPTION value="User">User</OPTION>
                    <OPTION value="Superuser">Superuser</OPTION>
                </SELECT>
            </TD>
        </TR>
        <TR>
            <td>3</td>
            <TD> <SELECT name="user3"/>
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
            <TD>
                <SELECT name="Choice3"/>
                    <option value="">Select User/SuperUser</option>
                    <OPTION value="User">User</OPTION>
                    <OPTION value="Superuser">Superuser</OPTION>
                </SELECT>
            </TD>
        </TR>
        <TR>
             <td>4</td>
            <TD> <SELECT name="s_user"/>
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
            <TD>
                <SELECT name="Choice4"/>
                    <option value="">Select User/SuperUser</option>
                    <OPTION value="User">User</OPTION>
                    <OPTION value="Superuser">Superuser</OPTION>
                </SELECT>
            </TD>
        </TR>
    </TABLE>
 </font>      
</form>
</center>
<br>
<p>
<font size="5" color="Blue">Note :</font>
<font size="4" color="Black">Employee can rate his/her skills on the above mentioned modules on a (1-5) rating scale, where 1 is lowest and 5 is highest.</font>
<br>
<br><br>
<font size="5" color="Blue">Skill Rating Scale :</font>
<br><br>
<font size="4">
1. Novice<br>
2. Expert Novice<br>
3. Proficient<br>
4. Export Proficient<br>
5. Expert<br><br>   
The '5' rated employees can be designated as "Super User". Super user will be able to provide the training to end users.
<br>
</font>
</p>
</body>
</html>