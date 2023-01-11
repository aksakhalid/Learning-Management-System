<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css">
<!--

.style4 {font-size: 24px; font-weight: bold; }
-->
</style>
<link href="CSS/Style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300" /></p>


<p>
    <?php include 'Header.php'; ?>
</p>

<form action="  Time table.php" method="post" >
  <p align="center"><span class="style1"> Time Table </span></p>
  <p align="center">&nbsp;</p>
  
      

<center>

     <table width="1217" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;' border = "10">
         <tr>
           <td bgcolor="#FFFFFF" style="background: #990033; color:#FFFFFF"><strong>Period </strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong>Start Time</strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong> End Time </strong></td>
       </tr>
		   <?php
			$cls="";
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



	$sql = "SELECT period , stime , etime FROM timetable ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
  	
    // output data of each row
  				  while($row = $result->fetch_assoc()) {
					echo "<tr>  <td>".$row['period']."</td>  <td>".$row['stime']."</td> <td>".$row['etime']."</td>   </tr>";
    }
               echo "</table>";
}
          

$con->close();

?>
   
</table>

</center>
<?php
 if(isset($_POST['btnadd'])){
 header('location: Add New Timetable.php');
  } 
 ?>
 <?php
 if(isset($_POST['btnedit'])){
 header('location: Edit Timetable.php');
  } 
 ?>
  </table>
  
  <form method="post">
  <table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="btnadd" type="submit" class="button"  id="btnadd" value="ADD" />
        <input name="btnedit" type="submit" id="btnedit" class="button" value="EDIT"  />
        </div></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>



</body>
</html>
