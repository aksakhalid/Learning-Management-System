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
  $period=$stime=$etime="";
  if(isset($_POST['submit'])) {
$con=mysqli_connect("localhost","root","","LMS");
			

			 $sql="INSERT INTO timetable (period,stime,etime) 
			VALUES ('$_POST[period]','$_POST[stime]', '$_POST[etime]')";
			
			
			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			else
			echo "Successfully Register";
			
			mysqli_close($con);
		

}
?>
  
  
  
<form method ="post" action="Add New Timetable.php">
  <center>
    <u class="style1">Add Period </u>
    <table width="509" height="130" >
<tr>
     <td width="130" height="54">Enter Period </td>
        <td width="278"><label> </label>
         
                  <input name="period" type="text" id="period"  required />
              
</tr>
<tr>
<td width="130" height="68">Enter Start Time </td>
            <td width="278"><label> </label>
         
                  <input name="stime" type="text" id="stime"  required  />
      </td>
</tr>
<tr>
<td width="130" height="68">Enter End Time </td>
            <td width="278"><label> </label>
         
                  <input name="etime" type="text" id="etime" required/>
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