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
 
  
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	
	

  
  
?>

  <?php	
  $cls="";
  		
if(isset($_POST['submit'])) {
$con=mysqli_connect("localhost","root","","LMS");
$cls=$_POST['cls'];


			

			 $sqla="INSERT INTO classtimetable ( class ,monday,tuesday,wednesday,thursday,friday,saturday) 
			VALUES (   '$_POST[cls]','$_POST[mon]', '$_POST[tue]', '$_POST[wed]','$_POST[thu]','$_POST[fri]','$_POST[sat]')";
			
			
			if (!mysqli_query($con,$sqla))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			else
			echo "Successfully Saved";
			
			mysqli_close($con);}
		


?>
<?php 
$con=mysqli_connect("localhost","root","","LMS");
$query = "SELECT DISTINCT course FROM prooffered ";
$result1 = mysqli_query($con ,$query) ;

?>
  
  
<form method="post" action="Add New Classwise Timetable.php">
<center>
  <u class="style1">Add Class </u> 



  <table width="365" height="130" >
<tr>
        <td width="112"> Select Class </td>
        <td width="241"><label> </label>
            <div align="left">
			
              <select name="cls" id="cls" required>
			  <option value ="" selected>Please Select</option>
			  <?php while ($row1 = mysqli_fetch_array($result1)):;?>
			  <option value ="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
			  
			  <?php endwhile ;?>
			  </select>
            </div></td>
      </tr>

</table>
</center>
	<center> 



  <table width="420" height="130" >
<tr>
     <td width="130" height="54">Monday </td>
            <td width="278"><label> </label>
         
                  <input name="mon" type="text" id="mon" size="35" />
      </td>
	  <td width="130" height="54">Tuesday </td>
            <td width="278"><label> </label>
         
                  <input name="tue" type="text" id="tue" size="35" />
      </td>
</tr>
<tr>
     <td width="130" height="54">Wednesday </td>
            <td width="278"><label> </label>
         
                  <input name="wed" type="text" id="wed" size="35" />
      </td>
	  <td width="130" height="54">Thursday </td>
            <td width="278"><label> </label>
         
                  <input name="thu" type="text" id="thu" size="35" />
      </td>
</tr>
<tr>
     <td width="130" height="54">Friday </td>
            <td width="278"><label> </label>
         
                  <input name="fri" type="text" id="fri" size="35" />
      </td>
	  <td width="130" height="54">Saturday </td>
            <td width="278"><label> </label>
         <input name="sat" type="text" id="sat" size="35" />
                  
				  
      </td>
</tr>




</table>
    </center>
			   
	<center>
<table>
 <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="submit" type="submit" class="button" id="submit" value="Save" />
       
        </div></td>
  </tr>
</table> 
</center>			  
</form>
  <p>&nbsp;</p>
</body>
</html>
