<?php
	
	$conn = new mysqli("localhost", "root", "", "lms");
?>
<html>
<head><link rel="stylesheet" href="CSS\\Style.css"><title>Welcome to Attendence System</title></head>
<style>
.header
{
	height: 90px; 
	background: #A9A9A9; 
	color: purple; 
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

</style>

<body >
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p> 
<p>
  <?php include 'Header.php'; ?>
</p>

<p>&nbsp;</p>
<center>
	<p class="style1">Welcome to Attendence System    </p>
</center>
<div><br>


	<table width="1200px" height="44" border = "10" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;'>
		<tr><td style="background:  #990033; color:#FFFFFF"><b>Student Name</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Roll No</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Class</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Phone Number</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b> Present Days</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Absent Days</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Leave</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Fine</b></td>
		</tr>
		
		<?php
			$sql = "Select grno, CONCAT(stdname ,' ', stdlname)AS sname , reqclass, stdmob   from student";
			$result = $conn->query($sql);
			if($result->num_rows >0)
			{
				while($rows = $result->fetch_assoc())
				{
					$id = $rows['grno'];
					$name = $rows['sname'];
					$sch = $rows['grno'];
					$cls = $rows['reqclass'];
					$phone = $rows['stdmob'];
					$c=0;
					$asql = "Select * from attendence where lid = '$id'";
					$aresult = $conn->query($asql);
					
					$psql = "Select status from attendence where status= 'PRESENT' AND lid = '$id'";
					$presult = $conn->query($psql);
					$c1 = $presult->num_rows;
					
					$absql = "Select status from attendence where status= 'ABSENT' AND lid = '$id'";
					$abresult = $conn->query($absql);
					$c2 = $abresult->num_rows;
					
					$lsql = "Select status from attendence where status= 'LEAVE' AND lid = '$id'";
					$lresult = $conn->query($lsql);
					$c3 = $lresult->num_rows;
					$f= $c2 * 100;
					echo "	
							<tr>
							<td><a href = 'view.php?id=".$id."'>".$name."</a></td>
							<td>".$sch."</td>
							<td>".$cls."</td>
							<td>".$phone."</td>
							<td>".$c1."</td>
							<td>".$c2."</td>
							<td>".$c3."</td>
							<td>".$f."</td>
							</tr>
					";
					
				}
			}
		?>
  </table>
</div>
</body>
</html>