
	
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css"> 
.error {color: #FF0000;}
<!--
.style1 {	font-size: 36px;
	color: #0066FF;
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
		if(isset($_SESSION['tid']))
		{
			$tid = $_SESSION['tid'];
		}
	}
	if(isset($_GET['tid']))
	{
		$tid = $_GET['tid'];
	}
$mon=$tue=$wed=$thu=$fri=$sat="";
  
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	$tid=$_REQUEST["tid"];
 
                  $asql = "SELECT  * FROM teachertimetable WHERE tid  = '$tid'";
					$aresult = $conn->query($asql);
					if($aresult->num_rows >0)
			{
				while($row = $aresult->fetch_assoc())
				{
				         $tid=$row['tid'];
						 $mon=$row['monday'];
					$tue=$row['tuesday'];
						$wed=$row['wednesday'];
						$thu=$row['thursday'];
					$fri=$row['friday'];
						$sat=$row['saturday'];
					}
					}
					
					
  			
//mulupdate 
if(isset($_REQUEST["update"]))
{
$tid=$_REQUEST["tid"];
$mon=$_REQUEST["mon"];
$tue=$_REQUEST["tue"];
$wed=$_REQUEST["wed"];
$thu=$_REQUEST["thu"];
$fri=$_REQUEST["fri"];
$sat=$_REQUEST["sat"];


$mulupdate_Query= "UPDATE  teachertimetable  SET monday='$mon' ,tuesday='$tue' ,wednesday='$wed' , thursday='$thu' ,friday='$fri' , saturday='$sat'     WHERE tid='$tid' ";
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
  
  
<form method="post" action="update tecaher timetable.php">
<center>
  <u class="style1">Edit  Time table</u> 



  <table width="420" height="130" >
<tr>
     <td width="130" height="54">Enter Teacher ID </td>
        <td width="278"><label> </label>
         
                  <input name="tid" type="text" id="tid" value="<?php echo $tid?>" size="35" /></td>
</tr>


</table>
</center>
	<center> 



  <table width="420" height="130" >
<tr>
     <td width="130" height="54">Monday </td>
            <td width="278"><label> </label>
         
                  <input name="mon" type="text" id="mon"  value="<?php echo $mon?>" size="35" />
      </td>
	  <td width="130" height="54">Tuesday </td>
            <td width="278"><label> </label>
         
                  <input name="tue" type="text" id="tue"  value="<?php echo $tue?>" size="35" />
      </td>
</tr>
<tr>
     <td width="130" height="54">Wednesday </td>
            <td width="278"><label> </label>
         
                  <input name="wed" type="text" id="wed" value="<?php echo $wed?>"  size="35" />
      </td>
	  <td width="130" height="54">Thursday </td>
            <td width="278"><label> </label>
         
                  <input name="thu" type="text" id="thu" value="<?php echo $thu?>"  size="35" />
      </td>
</tr>
<tr>
     <td width="130" height="54">Friday </td>
            <td width="278"><label> </label>
         
                  <input name="fri" type="text" id="fri" value="<?php echo $fri?>"  size="35" />
      </td>
	  <td width="130" height="54">Saturday </td>
            <td width="278"><label> </label>
         <input name="sat" type="text" id="sat" value="<?php echo $sat?>"  size="35" />
                  
				  
      </td>
</tr>




</table>
    </center>
			   
	<center>
<table>
 <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="update" type="submit" class="button" id="update" value="Update" />
       
        </div></td>
  </tr>
</table> 
</center>			  
</form>
  <p>&nbsp;</p>
</body>
</html>
