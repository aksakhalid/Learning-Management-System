<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");


	if(isset($_POST['login']))
	{
		$rollno = $_POST['rno'];
		$term = $_POST['term'];
		


			$sql = "Select * from result where sid = '$rollno' AND term='$term'";
			$result = $conn->query($sql);
			if($result->num_rows >0)
			{
				while($rows = $result->fetch_assoc())
				{
					$rollno = $rows['sid'];
					$term = $rows['term'];
					$_SESSION['rollno'] = $rollno;
					$_SESSION['term'] = $term;
					echo "<script>alert('success');</script>";
					header("Location: reportcardcheck.php");
				}
			} else {
				echo "<script>alert('NO record for this ID');</script>";
			}
		

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
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="325"></p>
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
					<td><span class="style3">Student RollNo</span> </td>
					<td><input name = "rno" type = "text" class="textbox" id="rno" required ></td>
				</tr>
											<tr>
					<td><span class="style3">Term</span> </td>
					<td>			<select name="term" id="term"   required>
              <option value ="" selected>Select Term</option>
              <option value ="mid term">Mid term</option>
              <option value ="final term">Final term</option>
            </select> </td>

				
				<tr>
					<td colspan = "2">
						<center><input type = "submit" name = "login" class = "button" value="Enter"></center>					</td>
				</tr>
				
	  </table>
  </form>
</div>
</tcenter>

</body>
<script>

	function login()
	{
		document.getElementById("login").style.display = "block";

	}
	
</script>
</html>