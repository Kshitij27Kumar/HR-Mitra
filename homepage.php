<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>HR MITRA</title>
	<style type="text/css">
        
		html{ 
			background-image: url("http://localhost/kshitij/images/image_new.jpeg");
			background-size: cover;
			background-attachment: fixed;
			}
			.bottomright {
 			 position: absolute;
  			bottom: 15px;
  			right: 20px;
  			  			font-size: 24px;

			}

			.topright {
 				 position: absolute;
  				 top: 3px;
  				 right: 140px;
  				 height: 14px;
  				 width: 14px;		
  				/* font-size: 18px;*/
			}

			

			
 form {   
        border: 0px solid #f1f1f1;
        
    }   
 input[type=text], input[type=password] {   
        width: 200px;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {  

        opacity: 0.7;   
    }   
  button {   
        background-color: #4CAF50;   
        
        color: orange;
        font-size: 18px;   
        padding: 10px;   
        margin: 30px 15px;   
        border: none;   
        cursor: pointer;
        position: relative;   
        }   
  .cancelbtn {   
        width: 75px; 
        padding: 10px;  
        margin: 10px 5px; 
        background-color: #4CAF50; 
        color: Black;
        border: none;   
        cursor: pointer;
        position: relative;   
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;
        position: absolute;
        top: 270px;
        left: 810px;
        align-content: center;
        opacity: 1.0;
        width: 28%;  
        /*position: center;*/
		font-family: calibri;
		border-radius: 10px; 
    }
		</style>
</head>

<body> 
	
	<div class="topright">
	
	<img src="http://localhost/kshitij/images/HR Mitra Logo.png" >
	</div>
	<form action="http://localhost/kshitij/EmpInfo.php" method="POST">  
        <div class="container">   
        <table>
        	<tr>
            <td>Username : </td>   
            <td><input type="text" placeholder="Enter Username" name="username" required> </td> 
            <td> <button type="submit" name="Search1">Login</button></td>
        	</tr>
        	<tr>
            <td>Password : </td>   
            <td><input type="password" placeholder="Enter Password" name="password" required> </td>
            <td></a></td>
            </tr>
            <tr>
            <td></td>
            <td><input type="checkbox" checked="checked"> Remember me</td>
            <td>
            Forgot <a href="#"> password?            	     
            </td>
            </tr>
        </table>
                          
        </div>   
    </form>
    
    <div class="bottomright">
    	<font color="orange">
   <u>	About Us 
  	<br><br>
    Contact Us</u>
</font>
</div>
  
</body>