
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Style.css">
<style type="text/css"> 

<!--
.style1 {
	font-size: 36px;
	color: #000066;
}
.limiter {
  width: 100%;
  margin: 0 auto;
 
  
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
}

.wrap-login100 {
	width: 670px;
	background: #fff;
	border-radius: 10px;
	overflow: hidden;
	position: relative;
	background-color: #FFFFFF;
	
}
.login100-form-title {
  width: 100%;
  position: relative;

  background-size: cover;
  background-position: center;

  padding: 70px 15px 74px 15px;
}

.login100-form-title-1 {
  font-family: Poppins-Bold;
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
}

.reset {
  font-family: Poppins-Regular;
  font-size: 15px;
  color: #666666;
  text-align: center;
}
.reset:hover {

  color: #666666;

}
.button
{
	
	font-size:20px; 
	border-radius: 10px;
	background-color:#9999FF
}
body {
	background-image: url(Images/picture.png);
	background-repeat: no-repeat;
}

-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>

<body>


<div class="limiter" id="BG">
<div class="container-login100">
			<div class="wrap-login100" >
<div class="login100-form-title" style="background-image: url(Images/bg-01.jpg);">
					<div align="center"><span class="login100-form-title-1">
					  Sign In
					  </span>
	        </div>
</div>

				<p>&nbsp;</p>
				
<div align="center">
<?php include 'PHP\\connect.php'; ?>

				<?php
				if(isset($_POST['submit'])){
							$id=$_POST['adminid'];
							$password=$_POST['password'];
									$check_login=mysql_query("Select id, apsd from admin where id='$id' and apsd='$password'");
									if(mysql_num_rows($check_login)==1){
												header('location: Home.php');
											}
									 else {
									 echo "<p align='center'> <font color=red size='4pt'>User Name or Password is incorrect!</font> </p>" ;
								
										
									}		
							
				}
				?>

				<h4 align="center" class="style1">	Login Form </h4>

				<br>
				<form method="post">
				   <p><span class="style2">Admin ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span> 
			          <input type="text" name="adminid" placeholder="Admin ID*" height="30%"  required />
		             <br />
		             <br />
				          <span class="style2">Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>       
		             <input type="password" name="password" placeholder="Password*" height="30%" required />
		             <br />
		             <br />
		             <input type="submit" name="submit" class = "button"   value="Log In"  />
			      </p>
				   <p>&nbsp;</p>
				   <p>&nbsp;   </p>
				   
				   <div class="reset" ><p><a href="changepass.php">change password? </a></p> </div>
				</form>
							 
</div>	



	</div>
  </div>
</div>
</body>
</html>
