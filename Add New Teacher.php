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
  $tid=$tname=$dep="";
  
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	
	function getPosts()
	{
	$posts=array();
	$posts[0]=$_POST['tid'];
	$posts[1]=$_POST['tname'];
	$posts[3]=$_POST['dep'];

	return $posts;
	}

  
  if(isset($_POST['btnsearch']))
	{
		if ( $_POST['tid']== "")
	{
	echo "Enter ID";
	}
	else {
	
	$data=getposts();
	$search_Query="SELECT regno , CONCAT(empname, ' ' , emplname) AS ename , dep FROM employee WHERE regno = $data[0] ";
	$search_Result=mysqli_query($connect,$search_Query);
	
		if($search_Result)
		{
		if(mysqli_num_rows($search_Result)==0)
		{ echo "No record for this ID";}
		else{
			while($row=mysqli_fetch_array($search_Result))
			{						
			$tid=$row['regno'];
			$tname=$row['ename'];
			$dep=$row['dep'];
			
			}
		}
	}
	}

				mysqli_close($connect);

}
?>

  <?php			
if(isset($_POST['submit'])) {
$con=mysqli_connect("localhost","root","","LMS");
$tid=$_POST['tid'];

							if(empty($tid)   ){
								echo "<p> Not Exist ! </p> ";
								}
			
else{
			 $sqla="INSERT INTO teachertimetable (tid,tname,monday,tuesday,wednesday,thursday,friday,saturday) 
			VALUES ('$_POST[tid]','$_POST[tname]', '$_POST[mon]', '$_POST[tue]', '$_POST[wed]','$_POST[thu]','$_POST[fri]','$_POST[sat]')";
			
			
			if (!mysqli_query($con,$sqla))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			else
			echo "Successfully Saved";
			
			mysqli_close($con);}
		

}
?>
  
  
<form method="post" action="Add New Teacher.php">
<center> 



  <p><u class="style1">Add  Time table</u></p>
  <table width="509" height="130" >
<tr>
     <td width="130" height="54">Enter Teacher ID </td>
        <td width="278"><label> </label>
         
                  <input name="tid" type="text" id="tid" value="<?php echo $tid?>" size="35" required/>
                  <input name="btnsearch" type="submit" class="button" id="btnsearch" value="Search">      </td>
</tr>
<tr>
<td width="130" height="68">Teacher Name </td>
            <td width="278"><label> </label>
         
                  <input name="tname" type="text" id="tname" value="<?php echo $tname?>" size="35"  />
      </td>
</tr>
<tr>
<td width="130" height="68">Teacher Department </td>
            <td width="278"><label> </label>
         
                  <input name="dep" type="text" id="dep" value="<?php echo $dep?>" size="35"  />
      </td>
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
