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
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}

-->
</style>
</head>

<body>

<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>

<p>
  <?php include 'Header.php'; ?>
</p>


<?php
$rollno=$sname=$slname=$dob=$pob=$cnic=$gender=$fid=$fname=$flname=$fmob=$fpro=$fincome=$fqua=$phn=$mobno=$email=$address=$regdate=$cls=$lschool=$fee=" ";


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
		}}
		else{
					echo 'No  Data For this ID';
			}
	}
	
	
}

	
?>
				
<p align="center">	<span class="style1">Student Info </span></p>

<form action="Student Info.php" method="post" >
<table width="474" height="57" border="0" align="center">
  <tr>
    <td width="184">Enter Student RollNo </td>
    <td width="280"><label> </label>
      <div align="left">
          <input name="rollno"  type="text" id="rollno"   value="<?php echo $rollno;?>" />
          <input name="btnsearch" type="submit" class = "button" id="btnsearch" value="Search">
        </div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>

<table width="867" height="293" align="center">
  <tr>
    <td width="413"><span class="style4">Basic Info </span></td>
    <td width="442"><span class="style4">Father Info</span></td>
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
              <input name="slname" type="text" id="slname" size="35" value="<?php echo $slname?>"/>
          </div></td>
      </tr>
      <tr>
        <td>Student Date of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="dob" type="date" id="dob" size="35" value="<?php echo $dob;?>"/>
          </div></td>
      </tr>
      <tr>
        <td>Place of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="pob" type="text" id="pob" size="35" value="<?php echo $pob;?>" />
          </div></td>
      </tr>
      <tr>
        <td>Form-B/CNIC</td>
        <td><label> </label>
            <div align="left">
              <input name="cnic" type="text" id="cnic" size="35" value="<?php echo $cnic;?>"/>
          </div></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td><div align="left">
          <input name="gender" type="text" id="gender" size="35" value="<?php echo $gender;?>"/>
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td><table width="406" height="136" border="0" align="center">
        <tr>
          <td>Father Id/Passport No</td>
          <td><label> </label>
              <div align="left">
                <input type="text" name="fid" id="fid" size="35" value="<?php echo $fid;?>" />
            </div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="fname" size="35" value="<?php echo $fname;?>" />
            </div></td>
        </tr>
        <tr>
          <td>Father Last Name </td>
          <td><label> </label>
              <div align="left">
                <input name="flname" type="text" id="flname" size="35" value="<?php echo $flname;?>" />
            </div></td>
        </tr>
        <tr>
          <td>Father Mobile Number </td>
          <td><label> </label>
              <div align="left">
                <input name="fmob" type="text" id="fmob" size="35" value="<?php echo $fmob;?>" />
            </div></td>
        </tr>

        <tr>
          <td>Father Profession</td>
          <td><label> </label>
              <div align="left">
                <input name="fpro" type="text" id="fpro" size="35" value="<?php echo $fpro;?>"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Annual Income </td>
          <td><label> </label>
              <div align="left">
                <input name="fincome" type="number" id="fincome" size="35" value="<?php echo $fincome;?>"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Qualification </td>
          <td><label> </label>
              <div align="left">
                <input name="fqua" type="text" id="fqua" size="35" value="<?php echo $fqua;?>"/>
            </div></td>
        </tr>
      </table>
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr>
    <td><span class="style4">Contact</span></td>
    <td><span class="style4">Registration Info</span></td>
  </tr>
  <tr>
    <td><table width="406" height="136" border="0" align="center">
      <tr>
        <td>Phone No </td>
        <td><label> </label>
            <div align="left">
              <input type="text" name="phn" id="phn" size="35" value="<?php echo $phn;?>"/>
          </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="text" id="mobno" size="35" value="<?php echo $mobno;?>" />
          </div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label> </label>
            <div align="left">
              <input name="email" type="text" id="email"  size="35" value="<?php echo $email;?>" />
          </div></td>
      </tr>
      <tr>
        <td height="37">Address</td>
        <td><label> </label>
            <div align="left">
              <textarea name="address" id="address"  size="35" ><?php echo $address;?></textarea>
          </div></td>
      </tr>
    </table></td>
    <td><table width="389" height="98" border="0" align="center">
      <tr>
        <td width="145">Registration Date </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" size="35" value="<?php echo $regdate;?>" />
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
              <textarea name="lschool" id="lschool" ><?php echo $lschool;?></textarea>
          </div></td>
      </tr>
	  <tr>
          <td>Student Fee </td>
          <td><label> </label>
              <div align="left">
                <input name="fee" type="number" id="fee" size="35" value="<?php echo $fee;?>" />
              </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="left" class="style2">&nbsp;	</p>
</form>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
</body>
</html>
