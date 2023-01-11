<?php
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");

		if(isset($_SESSION['month']))
		{
			$month = $_SESSION['month'];
				
		}

	if(isset($_GET['month']))
	{
		$month = $_GET['month'];
		
	}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css"> 

<!--
.style1 {
	font-size: 45px;
	color: #000033;
	font-style: italic;
	font-family: Georgia, "Times New Roman", Times, serif;
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

<table id="t03" style="border:5px double black;">

  <tr >
   <td height="397"> 
    <table width="682" height="122" id="t01" >

             <caption>
             <p align="center">	<span class="style1">Expense Report </span></p>
             </caption>

			<tr>

			
<?php


$con=mysqli_connect("localhost","root","","LMS");
// Check connection
$date = date('d-m-y', time());
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		  

?>

<td width="175" height="53"  > Date : </td>
<td width="485"  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $date; ?></td>
	  </tr>
				<tr>

<td height="61" > Report Month:  </td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #f4f4f4;
				
				color: #333333;"> <?php echo $month  ; ?></td>
</tr>



</table>
<p></td>
    
  </tr>

    <tr>
    <td >  
	
	<table id="t02" width="671"  ;  border = "10" bordercolor="#000033">
         <tr><td width="169"  ><strong>date</strong></td>
           <td width="169"  ><strong>Expenses</strong></td>
           <td width="167" ><strong>Revinues</strong></td>
         </tr>
		 	   <?php
		   
			
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
$orderdate=$month;
$orderdate = explode('-', $orderdate);
$year  = $orderdate[0];
$month = $orderdate[1];

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $rollno="1";
  $term="mid term";
    $sql = "SELECT  *
	 FROM expenses
	 	  WHERE    MONTH(date) = '$month' AND YEAR(date) = '$year' ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	
	$o=0;
	$t=0;

    // output data of each row 
  				  while($row = $result->fetch_assoc()) {
				  $fine=$row['fine'];
				   $fee=$row['fee'];
				   $pay=$row['pay'];
				   $b=$fine + $fee;
		

						echo "<tr>    
						 <td style='font-style:italic'>".$row['date']."</td> 
						  <td>".$row['pay']."</td> 
						  
						   <td>".$b."</td> 
						     </tr>";
							 $o=$o+$b;
							 $t=$t+$pay;
							 
    }
	$m="total";
		echo "<tr>    
						 <td style='font-weight:bold'>".$m."</td> 
						  <td style='font-weight:bold'>".$t."</td>
						  <td style='font-weight:bold'>".$o."</td>
						  
						 </tr>";

}
else echo "<script>alert('NO record for this Month');</script>";
            


$con->close();

?>

   

  </table>
	<div align="center"></div></td>
    </tr>
</table>
</center>



</body>
</html>
