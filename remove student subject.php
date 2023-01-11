<?php
$rollno=$term=$sub=$total=$obtain='';
	session_start();
	$conn = new mysqli("localhost", "root", "", "lms");
	if(!isset($_SESSION['name']))
	{
		header("location : index.php");
	}
	else
	{
		if(isset($_SESSION['rollno']))
		{
			$rollno = $_SESSION['rollno'];

			

		}
	}
	if(isset($_GET['rollno']))
	{
		$rollno = $_GET['rollno'];
		$sub = $_GET['sub'];
		$term=$_GET['term'];


	}
	?>
	
	



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css">
<!--

.style2 {font-size: 24px}
.style4 {font-size: 24px; font-weight: bold; }
.style1 {font-size: 36px;
	color: #0066FF;
}
-->
</style>
<link href="CSS/Style.css" rel="stylesheet" type="text/css">
</head>

<body>

<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>


<p>
  <?php include 'Header.php'; ?>
</p>


<?php




mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}

	
	  $asql = "SELECT * FROM result WHERE sid  ='$rollno' AND sub='$sub' AND term='$term'";
					$aresult = $conn->query($asql);
					if($aresult->num_rows >0)
			{
				while($row = $aresult->fetch_assoc())
				{
				         $rollno=$row['sid'];
						 $total=$row['total'];
						 $sub=$row['sub'];
						 $obtain=$row['obtain'];
						
					}
					}
					  			
//mulupdate 
if(isset($_REQUEST["update"]))
{

$mulupdate_Query= "DELETE FROM  result  WHERE sid='$rollno' AND sub ='$sub' AND term='$term' ";
$mul_Result=mysqli_query($connect,$mulupdate_Query);
if($mul_Result)
{
			  echo " subject deleted successfully ";
		}
		
	else {
					echo 'Result Error';
		}
}

	


	
?>
				
<form method="post" >
<center>
  <u class="style1">Remove Subject </u> 



  <table width="420" height="73" >
<tr>
     <td width="130" height="67">Student ID </td>
        <td width="278"><label> </label>
         
                  <input name="rollno" type="text" id="rollno" value="<?php echo $rollno?>" size="35" /></td>
</tr>


</table>
</center>
	<center> 



  <table width="420" height="130" >
<tr>
     <td width="130" height="54">subject </td>
            <td width="278"><label> </label>
         
                  <input name="sub" type="text" id="sub"  value="<?php echo $sub?>" size="35" />
      </tr>
      </td>
	  <td width="130" height="54">Total marsks </td>
            <td width="278"><label> </label>
         
                  <input name="total" type="number" id="total"  value="<?php echo $total?>" size="35" />
      </td>
</tr>
<tr>
     <td width="130" height="54">obtain marsk </td>
            <td width="278"><label> </label>
         
                  <input name="obtain" type="number" id="obtain" value="<?php echo $obtain?>"  size="35" />
      </td>
	 
</table>
    </center>
			   
	<center>
<table width="130">
 <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="update" type="submit" id="update" class="button" value="Remove" />
      </div></td>
  </tr>
</table> 
</center>			  
</form>
</body>
</html>


