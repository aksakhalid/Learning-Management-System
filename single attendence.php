<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");


	if(isset($_POST['login']))
	{
		$id = $_POST['rno'];
		


			$sql = "Select * from student where grno = '$id'";
			$result = $conn->query($sql);
			if($result->num_rows== 1)
			{
				while($rows = $result->fetch_assoc())
				{
					$id = $rows['grno'];
					$name = $rows['stdname'];
					$_SESSION['id'] = $id;
					$_SESSION['name'] = $name;
					echo "<script>alert('success');</script>";
					header("Location: view.php");
				}
			} else {
				echo "<script>alert('Error Occurred');</script>";
			}
		

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


.button1 {	
	font-size:20px; 
	border-radius: 10px;
}
.button2 {	
	font-size:20px; 
	border-radius: 10px;
}
.login1 {background-image: url(Images/pexels-photo-45718.jpg);
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
        <h3 class="style1"><u>Student Attenedence </u></h3>
      </center>
 	  <form method ="post" >
<table>
				<tr>
					<td>Student RollNo </td>
					<td><input name = "rno" type = "text" class="textbox" id="rno"></td>
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
