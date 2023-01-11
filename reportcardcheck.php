<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");

		if(isset($_SESSION['rollno']))
		{
			$rollno = $_SESSION['rollno'];
				$term= $_SESSION['term'];
		}

	if(isset($_GET['rollno']))
	{
		$rollno = $_GET['rollno'];
		
		$term= $_GET['term'];
	}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css"> 

<!--
.style1 {	font-size: 36px;
	color: #000033;
}
html {
  font-family:arial;
  font-size: 18px;
}



thead{
  font-weight:bold;
  text-align:center;
  background: #625D5D;
  color:white;
}

#t03 {
padding: 25px;
background: #e6e6e6;
border:#333366;
}

.footer {
  text-align:right;
  font-weight:bold;
}



}
body {
	background-color: #FFFFFF;
}
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
-->
</style>
</head>

<body>

 <span  onclick="myFunction()" class="close" title="Close Modal">&times;</span>
<center>
<?php
	$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	    $sql = "SELECT iname
	 FROM info  ";
   	$aresult = $con->query($sql);
while($row = $aresult->fetch_assoc()) {
				 
				  ?>
				  
<table id="t03" style="border:5px double black;">

  <tr >
   <td height="397"> 
    <table id="t01" width="692" >

             <caption><p align="center">	<span class="style1">Report Card</span></p>
             </caption>

			<tr>
				<td width="186" height="109">
					<img src='Images/images.png' width=168 height=98>				</td>
			  <td  width="429" ><div align="left"> <b><font size='5' color="#000066"> <?php echo $row['iname']; ?></font></b></div></td>
			</tr>
			<tr>
			<?php
			}
			?>
			
<?php


$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		  
	$query = "SELECT * FROM student WHERE grno='$rollno' ";
$result = mysqli_query($con ,$query) ;

	for($i=0; $row=mysqli_fetch_array($result); $i++){
?>

<td  > Student ID. : </td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $row['grno']; ?></td>
	  </tr>
				<tr>

<td > Student Name :  </td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $row['stdname']; ?> <?php echo $row['stdlname']; ?></td>
</tr>
<tr>
<td >Father Name :  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $row['fname']; ?> <?php echo $row['flname']; ?></td>
				
</tr>
<tr>
<td height="39" > D.O.B:  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $row['stddob']; ?></td>
</tr>
<tr>
<td height="39" > Term:  </td>
<td style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				 
				color: #333333;"> <?php echo $term ?> </td>
</tr>

</table>
<p>
  <?php
}
?>
   </td>
    
  </tr>

    <tr>
    <td >  
	
	<table id="t02" width="671"  ;  border = "10" bordercolor="#000033">
         <tr>
           <td width="169"  ><strong>subject </strong></td>
           <td width="167" ><strong>total marks </strong></td>
		     <td width="166" ><strong>obtain marks </strong></td>
           <td width="123" ><b>grades </b></td>
         </tr>
	   <?php
		   
			
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    $sql = "SELECT  *
	 FROM result
	 	  WHERE  sid  ='$rollno'  AND term='$term'  ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$o=0;
	$t=0;
	$c=0;
  	
    // output data of each row 
  				  while($row = $result->fetch_assoc()) {
				  $obtain=$row['obtain'];
				   $total=$row['total'];
				 
	if($obtain>80){
		$a="<font color='green'>A+</font>";
	}
	else if($obtain>70){
		$a="<font color='green'>A</font>";
	}
	else if($obtain>60){
		$a="<font color='green'>B</font>";
	}
	else if($obtain>50){
		$a="<font color='green'>C</font>";
	}
	else if($obtain>40){
		$a="<font color='green'>D</font>";
	}
	else if($obtain>33){
		$a="<font color='green'>E</font>";
	}
	 else if($obtain<33){
		$a="<font color='red'>*</font>";
		$c=$c+1;
	}
	else{
		$a="";
		}
		
		
		$b="total";
		

						echo "<tr>    
						 <td style='font-style:italic'>".$row['sub']."</td> 
						  <td>".$row['total']."</td> 
						  
						   <td>".$row['obtain']."</td> 
						   <td>".$a."</td>
						     </tr>";
							 $o=$o+$obtain;
							 $t=$t+$total;
							 
    }
	if ($c>=3)
	{
	$status="Fail";}
	else {
	$status="Pass";}
	echo "<tr>    
						 <td style='font-weight:bold'>".$b."</td> 
						  <td style='font-weight:bold'>".$t."</td>
						  <td style='font-weight:bold'>".$o."</td>
						  <td style='font-style:italic'>".$status."</td>
						 </tr>";

}
            


$con->close();

?>
   

  </table>
	<div align="center"></div></td>
    </tr>
</table>
</center>


<script>
function myFunction() {
 header('location: Home.php');
}
</script>
</body>
</html>