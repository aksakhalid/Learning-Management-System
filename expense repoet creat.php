<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");


	if(isset($_POST['login']))
	{
		$month = $_POST['rno'];
		$_SESSION['month'] = $month;
					
					echo "<script>alert('success');</script>";
					header("Location:exrense report.php");
		



		

	}
?>
<html>
<head><style>
.style1 {
	font-size: 36px;
	color: #000033;
}
.header
{
	height: 80px; 
	background: #A9A9A9; 
	color: purple; 
	font-size: 50px; 
	border-radius: 0px 0px 20px 20px;  
	padding-top:20px;
	font-family: Monotype Cursiva;
}
.frame
{
	margin: 80px  350px;
}
.login
{
background-image: url(Images/623f38a33dfe1e41909e1156dec0de94.jpg);
	border: 5px  #000033 solid; 
	width: 700px; 
	height: 330px; 
	padding: 30px;
	padding-top: 10px;
	border-radius:40px;
	font-size: 30px;
	align-items: center;
}

td
{
	width: 200px;
	font-size: 30px;
}
.textbox
{
	width: 250px; 
	font-size:20px; 
	border-radius: 10px;
}
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}
.style3 {color: #000000}
</style>
<title>Welcome to Attendence System</title></head>
<link rel="stylesheet" href="CSS\\Style.css">

<body >
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>
<p>
  <?php include 'Header.php'; ?>
  
</p>
<p>&nbsp;</p>
<center>
<div id = "login" class="login" >
    <center><h3 class="style1"><u>Student Report</u></h3>
	</center>
	<form method ="post" >
	<table>
				<tr>
					<td>Enter month </td>
					<td><input name = "rno" type = "month" class="textbox" id="rno" required ></td>
				</tr>
				

				
				<tr>
					<td colspan = "2">
						<center>
						  <p>&nbsp;					      </p>
						  <p>
						    <input type = "submit" name = "login" class = "button" value="Enter">
					      </p>
						</center>					</td>
				</tr>
				
	  </table>
  </form>
</div>
</center>

</body>
<script>

	function login()
	{
		document.getElementById("login").style.display = "block";

	}
	
</script>
</html>