<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");


	if(isset($_POST['login']))
	{
		$cls = $_POST['cls'];
		$_SESSION['cls'] = $cls;
					
					echo "<script>alert('success');</script>";
					header("Location:class attendence.php");
		



		

	}
?>
<html>
<head><style>
.header
{
	height: 80px; 
	background: #FFFFFF; 
	color: #0000CC; 
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
	background: #FFFFFF;
	border: 5px  #0000FF solid; 
	border-radius:40px;
	font-size: 30px;
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

.style1 {
	color: #0000FF;
	font-size: 36px;
}
.button1 {	
	font-size:20px; 
	border-radius: 10px;
}
.button2 {	
	font-size:20px; 
	border-radius: 10px;
}
.login1 {background-image: url(Images/pencil-3326180__340.jpg);
	border: 5px  #000033 solid; 
	width: 700px; 
	height: 330px; 
	padding: 30px;
	padding-top: 10px;
	border-radius:40px;
	font-size: 30px;
	align-items: center;
}
.style2 {	font-size: 36px;
	color: #000033;
}
.textbox1 {	width: 250px; 
	font-size:20px; 
	border-radius: 10px;
}
</style>
<title>Welcome to Attendence System</title></head>
<link rel="stylesheet" href="CSS\\Style.css">

<body >
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>
<?php include 'Header.php'; ?> 
<?php  


$con=mysqli_connect("localhost","root","","LMS");
$query = "SELECT DISTINCT course FROM prooffered ";
$result1 = mysqli_query($con ,$query) ;

?>

<div class="header">
<center> 
	<span class="style1">Welcome to Attendence System</span> </center>
</div>
	</center>
	<center>
 	<div id = "div" class="login1" >
      <center>
        <h3 class="style1"><u>Class Attenedence </u></h3>
      </center>
 	  <form method ="post" >
        <table width="629">
				<tr>
					<td width="198"><div align="right">Select class </div></td>
				    <td width="276">
					 <select name="cls" id="cls" required>
			  <option value ="" selected>Please Select</option>
			  <?php while ($row1 = mysqli_fetch_array($result1)):;?>
			  <option value ="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
			  
			  <?php endwhile ;?>
			  </select>
	    </tr>
				<tr>
					<td colspan = "2">
						<center>
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