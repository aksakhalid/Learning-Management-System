
	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css"> 
.error {color: #FF0000;}
<!--

}
.style2 {font-size: 24px}
.style4 {font-size: 24px; font-weight: bold; }
-->
</style>
<link href="CSS/Style.css" rel="stylesheet" type="text/css">
</head>
<body >


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300" /></p>

<p>
  <?php include 'Header.php'; ?>
  <?php
  
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");
	if(!isset($_SESSION['name']))
	{
		header("location : index.php");
	}
	else
	{
		if(isset($_SESSION['period']))
		{
			$tid = $_SESSION['period'];
		}
	}
	if(isset($_GET['period']))
	{
		$tid = $_GET['period'];
	}

  $period=$stime=$etime="";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	$period=$_REQUEST["period"];
 
                  $asql = "SELECT  * FROM timetable WHERE period  = '$period'";
					$aresult = $conn->query($asql);
					if($aresult->num_rows >0)
			{
				while($row = $aresult->fetch_assoc())
				{
				         $period=$row['period'];
						 $stime=$row['stime'];
					$etime=$row['etime'];
						
					}
					}
					
					
  			
//mulupdate 
if(isset($_REQUEST["update"]))
{
$period=$_REQUEST["period"];
$stime=$_REQUEST["stime"];
$etime=$_REQUEST["etime"];


$mulupdate_Query= "UPDATE  timetable  SET period='$period' ,stime='$stime' ,etime='$etime'      WHERE period='$period' ";
$mul_Result=mysqli_query($connect,$mulupdate_Query);
if($mul_Result)
{
			  echo " Record Updated successfully ";
		}
		
	else {
					echo 'Result Error';
		}
}




?>
  
  
<form method="post" action="update timetable.php">
<center>
  <u class="style1">Edit </u> 



  <table width="420" height="130" >
<tr>
     <td width="130" height="54">Enter period </td>
        <td width="278"><label> </label>
         
                  <input name="period" type="text" id="period" value="<?php echo $period?>" size="35" /></td>
</tr>
<tr>
     <td width="130" height="54">Start Time </td>
            <td width="278"><label> </label>
         
                  <input name="stime" type="text" id="stime"  value="<?php echo $stime?>" size="35" />
	    </td>
      <tr>
				  <td width="130" height="54"><p>End Time</p>
	    </td>
		
            <td width="278"><label> </label>
         
                  <input name="etime" type="text" id="etime"  value="<?php echo $etime?>" size="35" />
      </td>
</tr>


</table>
</center>
	
</table> 
</center>
<center>
<table>

 <tr>
    <td height="41"><label> </label>      <input name="update" type="submit" id="update" class="button" value="Update" />    </td>
 </tr>
  
</table> 
</center>			  
</form>
  <p>&nbsp;</p>
</body>
</html>
