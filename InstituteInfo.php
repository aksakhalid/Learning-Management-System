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
.style4 {font-size: 24px; font-weight: bold; }
.style5 {font-size: 18px}
-->
</style>
</head>
<body>

<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>


<p>
    <?php include 'Header.php'; ?>
</p>
<?php  
$icode=$iname=$address=$city=$otime=$ctime=$pno=$mno=$email="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	
	
	$search_Query="SELECT * FROM info ";
	$search_Result=mysqli_query($connect,$search_Query);
	
		if($search_Result)
		{
			while($row=mysqli_fetch_array($search_Result))
			{				
			$icode=$row['code'];
			$iname=$row['iname'];
			$address=$row['address'];
			$city=$row['city'];
			$otime=$row['otime'];
			$ctime=$row['ctime'];
			$pno=$row['pno'];
			$mno=$row['mno'];
			$email=$row['email'];
			
			}
	
	}
	
	
?>

<form action="instituteinfo.php" method="post" >
  <p align="center"><span class="style1">Institution Information </span></p>
  <table width="867" height="302" align="center">
    <tr>
      <td width="413" height="30"><div align="center"><span class="style4">Basic Info </span></div></td>
      <td width="442"><div align="center"><span class="style4">Contact</span></div></td>
    </tr>
    <tr>
      <td height="227"><table width="419" height="219" border="0" align="center">
          <tr>
            <td width="143"><span class="style5">Institution Code </span></td>
<td width="266"  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color:#000099;"> <?php echo $icode ?></td>
            
          </tr>
          <tr>
            <td><span class="style5">Institution  Name </span></td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color: #000099;"> <?php echo $iname ?></td>
          </tr>

          <tr>
            <td><span class="style5">City</span></td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color: #000099;"> <?php echo $city ?></td>
          </tr>
          <tr>
            <td><span class="style5">Opening time </span></td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color:#000099;"> <?php echo $otime ?></td>
          </tr>
          <tr>
            <td height="39"><span class="style5">Closing Time </span></td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color:#000099;"> <?php echo $ctime ?></td>
          </tr>
        </table>
      </td>
      <td><table width="425" height="187" border="0" align="center">
        <tr>
          <td width="168" height="39"><span class="style5">Phone No </span></td>
<td width="247"  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color:#000099;"> <?php echo $pno ?></td>
         
        </tr>
        <tr>
          <td><span class="style5">Mobile Number </span></td>
   <td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color:#000099;"> <?php echo $mno ?></td>
        </tr>
        <tr>
          <td height="46"><span class="style5">Email</span></td>
<td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color: #000099;"> <?php echo $email ?></td>
        </tr>
        <tr>
          <td height="39"><span class="style5">Address</span></td>
   <td  style="padding: 10px;
				border-top: 1px solid #fafafa;
				background-color: #FFFFFF;
				
				color: #000099;"> <?php echo $address ?></td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td height="28"><p align="center" class="style4">Programs Offered </p>
      </td>
      
    </tr>
    <tr>
      
    </tr>
  </table>
</form>



  
     <table width="1200px" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;' border = "10">
         <tr>
           <td bgcolor="#FFFFFF" style="background: #990033; color:#FFFFFF"><strong>Course ID </strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong>Course Name</strong></td>
           <td style="background: #990033; color:#FFFFFF"><strong>Subjects  </strong></td>
         </tr>
		  
		   <?php
			
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }



	$sql = "SELECT  cid,course,subj FROM prooffered ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
  	
    // output data of each row
  				  while($row = $result->fetch_assoc()) {
					echo "<tr>  <td>".$row['cid']."</td>  <td>".$row['course']."</td> <td>".$row['subj']."</td>   </tr>";
    }
               echo "</table>";
}
             else {
    echo "No records results";
} 

$con->close();

?>
   
  </table>


</body>
</html>
