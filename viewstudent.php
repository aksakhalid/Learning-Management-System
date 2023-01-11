<?php
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
.style1 {	font-size: 36px;
	color: #000066;
}
.style2 {font-size: 24px}
.style4 {font-size: 24px; font-weight: bold; }
-->
</style>
</head>

<body>

<p><img src="Images/header-bg.jpg" alt="Image Not Found" width="100%" height="285"></p>


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

	
	$search_Query="SELECT * FROM student WHERE grno ='$rollno'";
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
	
	


	
?>
				
<p align="center">	<span class="style1">Student Info </span></p>

<form method="post" >
  <p align="center">&nbsp;</p>

<table width="867" height="293" align="center">
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
    <td><div align="center"><span class="style4">Contact</span></div></td>
    <td><div align="center"><span class="style4">Registration Info</span></div></td>
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

