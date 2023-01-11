<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");
	if(!isset($_SESSION['name']))
	{
		header("location : index.php");
	}
	else
	{
		if(isset($_SESSION['id']))
		{
			$id = $_SESSION['id'];
		}
	}
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	if(isset($_POST['add']))
	{
		$date = date('Y-m-d', time());
		$ssql = "Select * from attendence where date = '$date' and lid = '$id'";
		$sresult = $conn->query($ssql);
		if($sresult->num_rows > 0)
		{
			echo "<script>alert('Today`s attendence already inserted.');</script>";
		}
		else
		{
			$insql = "Insert into attendence(lid, date, status) values('$id', '$date', 'PRESENT')";
			if ($conn->query($insql) === TRUE) {
				echo "<script>alert('Attendence record Inserted');</script>";
			} else {
				echo "<script>alert('Error Occurred');</script>";
			}
		}
		
	}


if(isset($_POST['absent']))
	{
		$date = date('Y-m-d', time());
		$ssql = "Select * from attendence where date = '$date' and lid = '$id'";
		$sresult = $conn->query($ssql);
		if($sresult->num_rows > 0)
		{
			echo "<script>alert('Today`s attendence already inserted.');</script>";
		}
		else
		{
			$insql = "Insert into attendence(lid, date, status) values('$id', '$date', 'ABSENT')";
			if ($conn->query($insql) === TRUE) {
				echo "<script>alert('Attendence record Inserted');</script>";
			} else {
				echo "<script>alert('Error Occurred');</script>";
			}
		}
		
	}
	
	if(isset($_POST['leave']))
	{
		$date = date('Y-m-d', time());
		$ssql = "Select * from attendence where date = '$date' and lid = '$id'";
		$sresult = $conn->query($ssql);
		if($sresult->num_rows > 0)
		{
			echo "<script>alert('Today`s attendence already inserted.');</script>";
		}
		else
		{
			$insql = "Insert into attendence(lid, date, status) values('$id', '$date', 'LEAVE')";
			if ($conn->query($insql) === TRUE) {
				echo "<script>alert('Attendence record Inserted');</script>";
			} else {
				echo "<script>alert('Error Occurred');</script>";
			}
		}
		
	}
?>
<html>
<head><link rel="stylesheet" href="CSS\\Style.css"><title>Welcome to Attendence System</title></head>
<style>
.header
{
	height: 90px; 
	
	color: #000066; 
	font-size: 40px; 
	border-radius: 0px 0px 20px 20px;  
	padding-top:20px;
	font-family: Monotype Cursiva;
}
.name
{
	margin-left: 1050px;
	font-size: 30px;
	border: 2px aqua solid;
	border-radius: 10px;
	display: inline-block;
	padding: 2px 5px;
	background: aqua;
	cursor: pointer;
}

td
{
	font-size: 25px;
	width: 400px;
}
.button
{
	background: #990033;
	color:#FFFFFF;
	padding: 5px 15px;
	font-size: 25px;
	border-radius: 40px 0px;
	cursor: pointer;
	border-width: 0px;
}
#add
{
	margin: 120px 220px;
	background:  #FFFFFF;
	font-size: 30px;
	border-radius: 40px;
	padding: 50px 80px 50px 100px;
}
#view
{
	display: none;
	margin: 120px 220px;
	background: #FFFFFF;
	font-size: 30px;
	border-radius: 40px;
	padding: 20px 50px;
}
.style1 {
	font-size: 24px;
	color: #000000;
}
</style>


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>
<?php include 'Header.php'; ?> 


<div class="header">
  <center>
	<p>Welcome to Attendence System</p>
</center>
</div>

		<table width="800px" style = 'margin-left:200px; margin-top: 30px; border-color: #000033;' border = "10">
		<?php
			$sql = "Select grno, CONCAT(stdname ,' ', stdlname) AS sname , reqclass from student where grno = '$id'";
			$result = $conn->query($sql);
			if($result->num_rows== 1)
			{
				while($rows = $result->fetch_assoc())
				{
					$name = $rows['sname'];
					$regd = $rows['grno'];
					$cls = $rows['reqclass'];
					echo "	<tr><td>Name</td>
							<td>".$name."</td></tr><tr>
							<td>Registration No.</td>
							<td>".$regd."</td></tr><tr>
							<td>Class</td>
							<td>".$cls."</td></tr><tr>

					";
					
				}
			}
		?>
	</table>
	

<div style="margin-top: 50px; margin-left: 350px; float: left;">
	<button class = "button" onClick="add();">Add Attendence</button>
	<button class = "button" style="margin-left: 80px;" onClick="view();">View Attendence</button>
</div>
<div id = "add">
	<br>
	"Please click on the Add button, if you are present."
	<br><br>
	<center>
		<form method = "post">
			<button name = "add" style="background: #990033;padding: 5px 15px;font-size: 25px;cursor: pointer;border-width: 0px; border-radius: 20px; color:#FFFFFF;">Present</button>
						<button name = "absent" style="background:#990033;padding: 5px 15px;font-size: 25px;cursor: pointer;border-width: 0px; border-radius: 20px;color:#FFFFFF;">
			Absent
			</button>
						<button name = "leave" style="background: #990033;padding: 5px 15px;font-size: 25px;cursor: pointer;border-width: 0px; border-radius: 20px; color:#FFFFFF;">
			Leave
			</button>
		</form>
	</center>
</div>
<div id = "view">
	<table width="800px" style = 'border-color: #000033;' border = "10">
		<tr>
			<td>Sl.No.</td>
			<td>Date</td>
			<td>Status</td>
		</tr>
		<?php
			$c = 0;
			$sql = "Select * from attendence where lid = '$id' ORDER BY date ASC";
			$result = $conn->query($sql);
			if($result->num_rows > 0)
			{
				while($rows = $result->fetch_assoc())
				{
					$dt = $rows['date'];
					$date = date("d-m-Y", strtotime($dt));
					$status = $rows['status'];
					$c++;
					echo "	<tr>
								<td>".$c."</td>
								<td>".$date."</td>
								<td>".$status."</td>
							</tr>
					";
					
				}

			}
		?>
	</table>
</div>

</body>
<script>
	function name()
	{
		if(document.getElementById('logout').style.display == 'none')
		{
			document.getElementById('logout').style.display = 'inline-block';
		}
		else
		{
			document.getElementById('logout').style.display = 'none';
		}
	}
	function add()
	{
		document.getElementById('view').style.display = 'none';
		document.getElementById('add').style.display = 'block';
	}
	function view()
	{
		document.getElementById('add').style.display = 'none';
		document.getElementById('view').style.display = 'block';
	}

</script>
</html>