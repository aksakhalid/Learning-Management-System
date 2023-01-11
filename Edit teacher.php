<?php
	
	$conn = new mysqli("localhost", "root", "", "lms");
?>
<html>
<head><link rel="stylesheet" href="CSS\\Style.css"><title>Edit Teachers Time Table</title>
<link href="CSS/Style.css" rel="stylesheet" type="text/css">
</head>
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
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300" /></p>

<p>
  <?php include 'Header.php'; ?>
<p>&nbsp;</p>
<center>
	<p class="style1">&nbsp;</p>
	<p class="style1"><u>Edit  Time table</u></p>
</center>
<div><br>


	<table width="1200px" height="44" border = "10" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;'>
		<tr><td style="background:  #990033; color:#FFFFFF"><b>Teacher ID</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Teacher Name</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Monday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Tuesday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Wednesday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Thursday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Friday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Saturday</b></td>
			<td style="background:  #990033; color:#FFFFFF"><b>Edit</b></td>
			
			
			
		</tr>
		
		<?php
			$sql = "Select *  from teachertimetable";
			$result = $conn->query($sql);
			if($result->num_rows >0)
			{
				while($row = $result->fetch_assoc())
				{
					$tid = $row['tid'];
					$tname = $row['tname'];
					$mon = $row['monday'];
					$tue = $row['tuesday'];
					$wed = $row['wednesday'];
					$thu = $row['thursday'];
					$fri = $row['friday'];
					$sat = $row['saturday'];
					$asql = "Select * from teachertimetable";
					$aresult = $conn->query($asql);
					
					$a= 'Edit';
					echo "	
							<tr>
							<td>".$tid."</td>
							<td>".$tname."</td>
							<td>".$mon."</td>
							<td>".$tue."</td>
							<td>".$wed."</td>
							<td>".$thu."</td>
							<td>".$fri."</td>
							<td>".$sat."</td>
							
							<td><a href ='update tecaher timetable.php?tid=".$tid."'>".$a."</a></td>
							

							</tr>
					";					
				}
			}
		?>
  </table>
</div>
</body>
</html>


