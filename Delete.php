
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
.style2 {font-size: 24px}
.style4 {font-size: 24px; font-weight: bold; }
.style5 {
	font-size: 18px;
	font-style: italic;
	font-weight: bold;
}
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}

-->
</style>
</head>
<body >


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>

<p>
  <?php include 'Header.php'; ?>
</p>

<?php
$rollno=$sname=$slname=$dob=$pob=$cnic=$gender=$fid=$fname=$flname=$fmob=$fpro=$fincome=$fqua=$phn=$mobno=$email=$address=$regdate=$cls=$lschool=$fee="";


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
	$posts[3]=$_POST['dob'];
	$posts[4]=$_POST['pob'];
	$posts[5]=$_POST['cnic'];
	$posts[6]=$_POST['gender'];
	$posts[7]=$_POST['fid'];
	$posts[8]=$_POST['fname'];
	$posts[9]=$_POST['flname'];
	$posts[10]=$_POST['fmob'];
	$posts[11]=$_POST['fpro'];
	$posts[12]=$_POST['fincome'];
	$posts[13]=$_POST['fqua'];
	$posts[14]=$_POST['phn'];
	$posts[15]=$_POST['mobno'];
	$posts[16]=$_POST['email'];
	$posts[17]=$_POST['address'];
	$posts[18]=$_POST['regdate'];
	$posts[19]=$_POST['cls'];
	$posts[20]=$_POST['lschool'];
	$posts[21]=$_POST['fee'];
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
	
	$search_Query="SELECT * FROM student WHERE grno =$data[0]";
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
			$dob=$row['stddob'];
			$pob=$row['stdpbirth'];
			$cnic=$row['stdcnic'];
			$gender=$row['gender'];
			$fid=$row['fid'];
			$fname=$row['fname'];
			$flname=$row['flname'];
			$fmob=$row['fmob'];
			$fpro=$row['fpro'];
			$fincome=$row['fincome'];
			$fqua=$row['fqua'];
			$phn=$row['stdpho'];
			$mobno=$row['stdmob'];
			$email=$row['stdemail'];
			$address=$row['stdaddress'];
			$regdate=$row['regdate'];
			$cls=$row['reqclass'];
			$lschool=$row['stdsch'];
			$fee=$row['fee'];

			}
			}
		} 
			else echo"NO data";
		
	}		

	
}

	if(isset($_POST['btndel']))
	
{
	if ( $_POST['rollno']== "")
	{
	echo "Enter Roll No.";
	}
	else {
	$data=getPosts();
	
	$del_Query="DELETE FROM student WHERE grno =$data[0]";
	$del_Result=mysqli_query($connect,$del_Query);
	
		if($del_Result)
		{
			echo 'Record Deleted Successfully';
		}
		
	else {
					echo 'Result Error'; }
		
}	
	
}

?>
				
<p align="center">	<span class="style1">Delete Student Info </span></p>

<form action="Delete.php" method="post" >
<table width="474" height="57" border="0" align="center">
  <tr>
    <td width="184"> <div align="center" class="style5">Enter Student RollNo </div></td>
    <td width="280"><label> </label>
      <div align="left">
          <input name="rollno" type="text" id="rollno" value="<?php echo $rollno;?>" required />
          <input name="btnsearch" type="submit" class="button" value="Search">
        </div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>

<table width="954" height="456" align="center">
  <tr>
    <td width="413"><div align="center"><span class="style4">Basic Info </span></div></td>
    <td width="442"><div align="center"><span class="style4">Father Info</span></div></td>
  </tr>
  <tr>
    <td><table width="419" height="191" border="0" align="center">
      <tr>
        <td>Student First Name </td>
        <td><label> </label>
            <div align="left">
              <input name="sname" type="text" id="sname" size="35" value="<?php echo $sname?>" />
          </div></td>
        <div id="loginerr" style="color:#FF0000 "></div>
        <div id="display" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Student Last Name </td>
        <td><label> </label>
            <div align="left">
              <input name="slname" type="text" id="slname"  size="35" value="<?php echo $slname?>"/>
          </div></td>
      </tr>
      <tr>
        <td>Student Date of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="dob" type="date" id="dob" value="<?php echo $dob;?>" size="35"/>
          </div></td>
      </tr>
      <tr>
        <td>Place of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="pob" type="text" id="pob" value="<?php echo $pob;?>" size="35"/>
          </div></td>
      </tr>
      <tr>
        <td>Form-B/CNIC</td>
        <td><label> </label>
            <div align="left">
              <input name="cnic" type="text" id="cnic" value="<?php echo $cnic;?>"size="35"/>
          </div></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td><div align="left">
          <input name="gender" type="text" id="gender" value="<?php echo $gender;?>" size="35"/>
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td><table width="406" height="136" border="0" align="center">
        <tr>
          <td>Father Id/Passport No</td>
          <td><label> </label>
              <div align="left">
                <input type="text" name="fid" id="fid" value="<?php echo $fid;?>" size="35"/>
            </div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="First Number" value="<?php echo $fname;?>" size="35"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Last Name </td>
          <td><label> </label>
              <div align="left">
                <input name="flname" type="text" id="flname" value="<?php echo $flname;?>" size="35"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Mobile Number </td>
          <td><label> </label>
              <div align="left">
                <input name="fmob" type="text" id="fmob" value="<?php echo $fmob;?>" size="35"/>
            </div></td>
        </tr>

        <tr>
          <td>Father Profession</td>
          <td><label> </label>
              <div align="left">
                <input name="fpro" type="text" id="fpro" value="<?php echo $fpro;?>" size="35"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Annual Income </td>
          <td><label> </label>
              <div align="left">
                <input name="fincome" type="number" id="fincome" value="<?php echo $fincome;?>" size="35"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Qualification </td>
          <td><label> </label>
              <div align="left">
                <input name="fqua" type="text" id="fqua" value="<?php echo $fqua;?>"  size="35"/>
            </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr>
    <td><div align="center"><span class="style4">Contact</span></div></td>
    <td><span class="style4">Registration Info</span></td>
  </tr>
  <tr>
    <td><table width="425" height="136" border="0" align="center">
      <tr>
        <td width="139">Phone No </td>
        <td width="276"><label> </label>
            <div align="left">
              <input type="text" name="phn" id="phn" value="<?php echo $phn;?>" size="35"/>
          </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="text" id="mobno" value="<?php echo $mobno;?>" size="35"/>
          </div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label> </label>
            <div align="left">
              <input name="email" type="text" id="email" value="<?php echo $email;?>" size="35"/>
          </div></td>
      </tr>
      <tr>
        <td height="37">Address</td>
        <td><label> </label>
            <div align="left">
              <textarea name="address" cols="35" size="50" id="address"><?php echo $address;?></textarea>
            </div></td>
      </tr>
    </table></td>
    <td><table width="446" height="98" border="0" align="center">
      <tr>
        <td width="145">Registration Date </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" value="<?php echo $regdate;?>" size="35" />
          </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Requested Class </td>
        <td><label> </label>
          <input type="text" name="cls" id="cls"  value="<?php echo $cls;?>" size="35"/></td>
      </tr>
      <tr>
        <td height="24">Last School Attended </td>
        <td><label> </label>
            <div align="left">
              <textarea name="lschool" cols="35" id="lschool"><?php echo $lschool;?></textarea>
            </div></td>
      </tr>
	  <tr>
          <td>Student Fee </td>
          <td><label> </label>
              <div align="left">
                <input name="fee" type="number" id="fee" value="<?php echo $fee;?>" size="35"/>
              </div></td>
        </tr>
	  
    </table></td>
  </tr>
</table>
<p align="left" class="style2">&nbsp;	</p>
<table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="btndel" type="submit" id="btndel" class="button" value="Delete" />
        <input name="cancel" type="submit" id="cancel" class="button"value="Cancel" />
      </div></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
</body>
</html>
