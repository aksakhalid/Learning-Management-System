<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS\\Style.css">
<style type="text/css">
<!--


.style4 {font-size: 24px; font-weight: bold; }
.style8 {font-size: 22px}
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
$rollno=$sname=$slname=$dob=$cnic=$gender=$fname=$flname=$cls= $term=$s1=$t1=$o1=$s2=$o2=$t2=$s3=$t3=$o3=$s4=$t4=$o4=$s5=$t5=$o5=$s6=$t6=$o6=$s7=$t7=$o7=$s8=$t8=$o8=$s9=$t9=$o9=$s10=$t10=$o10=" ";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	
	function getPosts()
	{
	$posts=array();
	$posts[0]=$_POST['rollno'];
	$posts[1]=$_POST['sname'];
	$posts[2]=$_POST['slname'];
	$posts[4]=$_POST['cnic'];
	$posts[5]=$_POST['gender'];
	$posts[6]=$_POST['fname'];
	$posts[7]=$_POST['flname'];
	$posts[8]=$_POST['cls'];
    $posts[9]=$_POST['dob'];

	
	return $posts;
	}
	
	if(isset($_POST['btnsearch']))
	{
		if ( $_POST['rollno']== "")
	{
	echo "Enter Roll No.";
	}
	else {
	$data=getPosts();
	
	$search_Query="SELECT * FROM student, result  WHERE grno =$data[0]  ";
	$search_Result=mysqli_query($connect,$search_Query);
	
		if($search_Result)
		{
				if (mysqli_num_rows($search_Result) == 0)
		{echo "<script>alert('No record found for this ID');</script>";}
		else {
			while($row=mysqli_fetch_array($search_Result))
			{						
			$rollno=$row['grno'];
			$sname=$row['stdname'];
			$slname=$row['stdlname'];			
			$cnic=$row['stdcnic'];
			$gender=$row['gender'];
			$fname=$row['fname'];
			$flname=$row['flname'];
			$cls=$row['reqclass'];
 			 $dob=$row['stddob'];
			}
		}}
		else{
					echo 'No  Data For this ID';
			}
	}
	
	
}
?>

	
<form  method="post" >
         <p align="center" class="style1"><u>RESULT FORM </u></p>
	     <table   border="0" align="center">
           <tr>
             <td ><span class="style8">Enter Student RollNo </span></td>
             <td ><label> </label>
                 <div align="left">
                   <input name="rollno"  type="text" id="rollno"  size="25"  value="<?php echo $rollno;?>" />
                 
               </div></td>
           </tr>
		    <tr>
             <td ><span class="style8">Select Term  </span></td>
             <td ><label> </label>
                 <div align="left">
                   <p>
                     <select name="term" id="term" placeholder="term">
                       <option value ="">please select</option>
                       <option value ="mid term">Mid Term</option>
                       <option value ="final term">Final Term </option>
                     </select>
                     <input name="btnsearch" type="submit" class="button" id="btnsearch" value="Search">
                   </p>
               </div></td>
           </tr>
		     
  </table>
	     <table width="971" height="156" align="center">
           <tr>
             <td width="500"><table width="489" height="125" border="0" align="center">
                 <tr>
                   <td width="222" height="27"><span class="style8">Student First Name </span></td>
                   <td width="257"><label> </label>
                       <div align="left">
                         <input name="sname" type="text" id="sname" size="35" value="<?php echo $sname?>" />
                     </div></td>
                   <div id="loginerr" style="color:#FF0000 "></div>
                   <div id="display" style="color:#FF0000 "> </div>
                 </tr>
                 <tr>
                   <td height="27"><span class="style8">Student Last Name </span></td>
                   <td><label> </label>
                       <div align="left">
                         <input name="slname" type="text" id="slname" size="35" value="<?php echo $slname?>"/>
                     </div></td>
                 </tr>
                 <tr>
                   <td height="34"><span class="style8">Student Date of Birth </span></td>
                   <td><label> </label>
                       <div align="left">
                         <input name="dob" type="date" id="dob" size="35" value="<?php echo $dob;?>"/>
                     </div></td>
                 </tr>
                 <tr>
                   <td><span class="style8">
                     <label for="gender">Gender:</label>
                   </span></td>
                   <td><div align="left">
                       <input name="gender" type="text" id="gender" size="35" value="<?php echo $gender;?>"/>
                   </div></td>
                 </tr>
               </table>
             <td width="459"><table width="454" height="137" border="0" align="center">
                 <tr>
                   <td width="200" height="27"><span class="style8">Father Name </span></td>
                   <td width="258"><label> </label>
                       <div align="left">
                         <div align="left">
                           <input name="fname" type="text" id="fname" size="35" value="<?php echo $fname;?>" />
                         </div>
                       </div></td>
                 </tr>
                 <tr>
                   <td><span class="style8">Father Last Name </span></td>
                   <td><label> </label>
                       <div align="left">
                         <input name="flname" type="text" id="flname" size="35" value="<?php echo $flname;?>" />
                     </div></td>
                 </tr>
                 <tr>
                   <td height="29"><span class="style8">Requested Class </span></td>
                   <td><label> </label>
                       <input type="text" name="cls" id="cls"  value="<?php echo $cls;?>" size="35"/></td>
                 </tr>
                 <tr>
                   <td height="32"><span class="style8">Form-B/CNIC</span></td>
                   <td><label> </label>
                       <div align="left">
                         <input name="cnic" type="text" id="cnic" size="35" value="<?php echo $cnic;?>"/>
                     </div></td>
                 </tr>
               </table>
           </tr>
         </table>
	     </form>
	   <table width="1200px" style = 'margin-left:100px; margin-top: 30px; border-color: #000033; text-align:center;' border = "10">
       <tr>
         <td bgcolor="#FFFFFF" style="background: #990033; color:#FFFFFF"><strong>Subject </strong></td>
		 <td style="background: #990033; color:#FFFFFF"><strong>Term</strong></td>
         <td style="background: #990033; color:#FFFFFF"><strong>Total Marks</strong></td>
         <td style="background: #990033; color:#FFFFFF"><strong>Obtain Marks</strong></td>
         <td style="background: #990033; color:#FFFFFF"><strong>Edit</strong></td>
		 <td style="background: #990033; color:#FFFFFF"><strong>Remove</strong></td>
       </tr>
       <?php
		   
	if (isset($_POST['btnsearch']))	{	
$con=mysqli_connect("localhost","root","","LMS");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$term=$_REQUEST['term'];


	$sql = "SELECT  * 
	 FROM result
	 	  WHERE sid = '$rollno' AND term ='$term' ";
   	$result = $con->query($sql);
	if ($result->num_rows > 0) {
	$a="Edit";
	$b="Remove";
  	
    // output data of each row 
  				  while($row = $result->fetch_assoc()) {
				  $rollno = $row['sid'];
				  $sub=$row['sub'];
				  $term=$row['term'];
						echo "<tr>  
						 <td>".$row['sub']."</td> 
						  <td>".$row['term']."</td> 
						  <td>".$row['total']."</td> 
						   <td>".$row['obtain']."</td> 


						    <td><a href = 'update single result.php?rollno=".$rollno."&amp; sub=".$sub."&amp; term=".$term."'>".$a."</td> 
							<td> <a href = 'remove student subject.php?rollno=".$rollno."&amp; sub=".$sub."&amp; term=".$term."'>".$b."</td>
					 </tr>";
    }
               echo "</table>";
}
             else if ($result->num_rows==  0)  {
  echo "<script>alert('No record found for this ID');</script>";
} 
else {
echo"";}
$con->close();
}



?>
     </table>
