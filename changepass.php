
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS/Style.css">
<style type="text/css">
<!--

.style2 {color: #0066FF}
.button2 {	
	font-size:20px; 
	border-radius: 10px;
	background-color:#9999FF
}
.login100-form-title {  width: 100%;
  position: relative;

  background-size: cover;
  background-position: center;

  padding: 70px 15px 74px 15px;
}
.login100-form-title-1 {  font-family: Poppins-Bold;
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
}
.reset {  font-family: Poppins-Regular;
  font-size: 15px;
  color: #666666;
  text-align: center;
}
.wrap-login100 {	width: 670px;
	background: #fff;
	border-radius: 10px;
	overflow: hidden;
	position: relative;
	background-color: #FFFFFF;
}
-->
</style>
</head>
<body >

<p>&nbsp;</p>
<p>
	 
</p>
<center>
<div class="wrap-login100" >
  <div class="login100-form-title" style="background-image: url(Images/bg-01.jpg);">
  </div>
  
 
  <p>&nbsp;</p>
  <div align="center">
    <?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$conn=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}



if(isset($_POST['submit']))
{
							$pass=$_POST['pass'];
							$nps=$_POST['nps'];
							$cps=$_POST['cps'];
							if(empty($pass) or empty ($nps) or empty ($cps))
							{
								echo "<p> Fields Empty ! </p> ";
							}
							 else 
							 {
							 
							 $query="SELECT apsd FROM admin WHERE id= '101'";
							 $result=mysqli_query($conn,$query);
							 
							        while ($row=mysqli_fetch_array($result))
							         {
							           $password=$row['apsd'];
									   
									          if($password==$pass)
							                   {
											      if ($nps==$cps)
												  {
												  $a=$nps;
												  $q="UPDATE admin SET apsd='$nps' WHERE id='101'";
												  $update=mysqli_query($conn, $q);
												        if ($update)
														{
														
														echo "<p align='center'> <font color=green size='5pt'>Password Updated Successfully</font> </p>" ;
																											}
														else
														{
														echo"error";}
												  
												  }
												  else { 
												  echo "<p align='center'> <font color=red size='4pt'>Entered Password do not match</font> </p>" ; }
							 
							                 }
											 else 
											 { echo "<p align='center'> <font color=red size='4pt'>Incorrect Password</font> </p>" ;
											 }
									}
}							
}
									
?>	
    <h4 align="center" class="style1">Change Password </h4>
    <br>
    <form method="post" action="changepass.php">
      <p><span class="style2">Old Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
				     <input name="pass" type="password" id="pass" height="30%" placeholder="Password*" required/>
          <br />
		 
		  <br>
		   <span class="style2">New Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>       
		             <input type="password" name="nps" id="nps" placeholder=" new Password*" height="30%" required/>
		 
          <br />
		   <br><span class="style2">Confirm password&nbsp;&nbsp; </span>
				     <input type="password" name="cps" id="cps" placeholder=" confirm Password*" height="30%" required/>
          <br />
      </p>
	  <input name="submit" type="submit" class="button" value="Change Password"  />
    </form>
  </div>
</center>

				 
               
   
</body>
</html>
