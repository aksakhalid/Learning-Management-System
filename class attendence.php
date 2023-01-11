
	<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");

		if(isset($_SESSION['cls']))
		{
			$cls = $_SESSION['cls'];
				
		}

	if(isset($_GET['cls']))
	{
		$cls = $_GET['cls'];
		
	}?>
	
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

.style1 {
	font-size: 36px;
	color: #0000FF;
}
.style4 {
	font-size: 25px;
	font-weight: bold;
	
}
</style>

<body >
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p> 
<p>
  <?php include 'Header.php'; ?> </p>

<center>
	<p class="style1">Welcome to Attendence System    </p>
</center>
<div>
  <table width="1157"  border = "10" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;'>
		<tr><td width="303" style="background: #990033; color:#FFFFFF"><span class="style4">Student Name</span></span></td>
			<td width="191" style="background:#990033; color:#FFFFFF"><span class="style4">Roll No</span></td>
			<td width="461" style="background:  #990033; color:#FFFFFF"><span class="style4">Attendence</span></td>
			
		</tr>
	

		<?php
			$sql = "Select grno, CONCAT(stdname ,' ', stdlname)AS sname   from student WHERE reqclass ='$cls' ";
			$result = $conn->query($sql);
			if($result->num_rows >0)
			{	
			while($rows = $result->fetch_assoc())
				{
				$id = $rows['grno'];
					$name = $rows['sname'];
					$sch = $rows['grno'];
					$asql = "Select * from attendence where lid = '$id'";
					$aresult = $conn->query($asql);
					$a= 'add';
					$b= 'Present';
					$c= 'Absent';
					$d= 'Leave';
					echo "
							<tr>
							<td><a href = 'view.php?id=".$id."'>".$name."</a></td>
							<td>".$sch."</td>
							 <td><form method='post' action='class attendence.php'>
							 <input type='hidden' name='row_id' value='" . $id . "'/>
							 <input type='radio' name='att' value='PRESENT' />".$b."
							 <input type='radio' name='att' value='ABSENT' />".$c." 
							 <input type='radio' name='att' value='LEAVE' />".$d." 
							<input name='submit' type='submit' id='submit' value='Enter' /></a>	
				             </form>   </td>";
					
					
				}
				 if (isset($_POST['submit']))
        {
		$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

            $att=$_POST['att'];
			$id=$_POST['row_id'];
            $date = date('Y-m-d', time());
            $ssql = "Select * from attendence where date = '$date' and lid = '$id'";
            $sresult = $conn->query($ssql);
            if($sresult->num_rows > 0)
            {
                echo "<script>alert('Today`s attendence already inserted.');</script>";
            }
            else
            {
                $insql = "Insert into attendence(lid, date, status) values('$id', '$date', '$att')";
                if ($conn->query($insql) === TRUE) {
                    echo "<script>alert('Attendence record Inserted');</script>";
                } else {
                    echo "<script>alert('Error Occurred');</script>";
                }
            }
        }
    }
?>

  </table>
  
</div>

						 
</body>
</html>


