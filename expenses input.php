<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.style1 {
	font-size: 36px;
	color: #FFFFFF;
}

.frame
{
	margin: 80px  350px;
}
.login
{
background-image: url(Images/12f63e6db657c11a53cdba4b706816cb.jpg);
	border: 5px  #000033 solid; 
	width: 750px; 
	height: 330px; 
	padding: 30px;
	padding-top: 10px;
	border-radius:40px;
	font-size: 30px;
	align-items: center;
}
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}
td
{
	width: 200px;
	font-size: 30px;
}
.textbox
{
	width: 250px; 
	font-size:20px; 
	border-radius: 10px;
}
.style2 {color: #FFFFFF}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #000033}
</style>
</head>
<link rel="stylesheet" href="CSS\\Style.css">

<body >
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="325"></p>
<p>
  <?php include 'Header.php'; ?>
  <?php
  if(isset($_POST['login']))
	{
	$con=mysqli_connect("localhost","root","","LMS");
	
			 $sql="INSERT INTO expenses (date,fee,pay,fine) 
			VALUES ('$_POST[date]','$_POST[rno]', '$_POST[rno2]', '$_POST[rno3]')";
			
			
			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			
			echo "Data Entered ";
			
			mysqli_close($con);
			

}
  ?>
  
<center>
<p><a href="exrense report.php">hina</a></p>
<div id = "login" class="login" >
    <center>
      <h3 class="style1 style4"><u>Expense and revenus </u></h3>
      <p class="style1 style2">&nbsp;</p>
    </center>
	<center>
	<form method ="post" >
	<table width="681">
					<tr>
					<td width="156"><span class="style3">Date </span></td>
					<td width="156"><input name = "date" type = "date" class="textbox" id="date" required ></td>
				</tr>
				<tr>
					<td width="156"><span class="style3">Fee collected </span></td>
					<td width="156"><input name = "rno" type = "text" class="textbox" id="rno"  ></td>
				</tr>
					
					<td width="156"><span class="style3">Fine collected </span></td>
					<td width="156"><input name = "rno3" type = "text" class="textbox" id="rno3"  ></td>
				</tr>
										<tr>
					<td><span class="style3">today's expense </span></td>
					<td><input name = "rno2" type = "text" class="textbox" id="rno2" ></td>
					<tr>
				<tr>
					<td colspan = "2">
						<center>
						  <p>
						    <input type = "submit" name = "login" class = "button" value="Enter" />
				          </p>
					    </center>					</td>
				</tr>
	  </table>
  </form>
  </center>
</div>
</center>
</body>
</html>
