<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css">
<!--
.style1 {	font-size: 36px;
	color: #000066;
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
.
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}
.style4 {
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}

-->
</style>
</head>
<body>

<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>


<p>
    <?php include 'Header.php'; ?>
</p>
<?php  


$con=mysqli_connect("localhost","root","","LMS");
$query = "SELECT DISTINCT course FROM prooffered ";
$result1 = mysqli_query($con ,$query) ;

?>
<a href="reportcardcheck.php"></a>
<form action="show class info.php" method="post" >
  <table width="389" height="98" border="0" align="center">
	          <td><span class="style4">Requested Class:</span></td>
                <td><label> </label>
          <div align="left">
		  
			
              <select name="cls" id="cls" >
			  <option value ="" selected>Please Select</option>
			  <?php while ($row1 = mysqli_fetch_array($result1)):;?>
			  <option value ="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
			  
			  <?php endwhile ;?>
			  </select>
     
		    <input name="btnsearch" type="submit" class="button"  value="Search"  />
          </div></td>
      </tr>
      <tr>
  </table>
</form>
	</tr>  
  <center>
     <p class="style1">Class Information </p>
</center>
   <div>
     <center>
   </center>
     <table width="1200px" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;' border = "10">
         <tr>
           <td bgcolor="#FFFFFF" style="background: #990033; color:#FFFFFF"><strong>Roll No </strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong>Student  Name</strong></td>
		     <td style="background: #990033; color:#FFFFFF"><strong>class</strong></td>
           <td style="background: #990033; color:#FFFFFF"><b>CNIC</b></td>
           <td style="background: #990033; color:#FFFFFF"><strong>Address</strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong> Mobile </strong></td>
         </tr>
         <?php
	
		$cls="";
		   
			
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


if(isset($_POST['btnsearch'])){
	$cls=$_POST['cls'];
	$grno=$sname='';


	$sql = "SELECT  grno, CONCAT(stdname ,' ', stdlname) AS sname , reqclass , stdcnic , stdaddress, stdmob
	 FROM student 
	 	  WHERE reqclass = '$cls'  ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
  	
    // output data of each row 
  				  while($row = $result->fetch_assoc()) {
				  $rollno = $row['grno'];
						echo "<tr>  <td>".$row['grno']."</td>  
						<td><a href = 'viewstudent.php?rollno=".$rollno."'>".$row['sname']."</a></td> 
						 <td>".$row['reqclass']."</td> 
						  <td>".$row['stdcnic']."</td> 
						   <td>".$row['stdaddress']."</td> 
						    <td>".$row['stdmob']."</td>   </tr>";
    }
               echo "</table>";
}
             else {
  echo "<script>alert('No record found for this ID');</script>";
} 
}

$con->close();

?>
   
  </table>
