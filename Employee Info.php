<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS//Style.css">
<style type="text/css">
<!--
.style1 {	font-size: 36px;
	color: #0066FF;
}
.style2 {font-size: 24px}
.style3 {font-size: 24px; font-weight: bold; }
-->
</style>
</head>
<body >


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>

<?php include 'Header.php'; ?>
	

<?php
$regno=$ename=$elname=$dob=$pob=$cnic=$gender=$fid=$fname=$flname=$fmobno=$phn=$mobno=$email=$address=$regdate=$qual=$dep=$desgn=$exp=$salary="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	
	function getPosts()
	{
	$posts=array();
	$posts[0]=$_POST['regno'];
	$posts[1]=$_POST['ename'];
	$posts[2]=$_POST['elname'];
	$posts[3]=$_POST['dob'];
	$posts[4]=$_POST['pob'];
	$posts[5]=$_POST['cnic'];
	$posts[6]=$_POST['gender'];
	$posts[7]=$_POST['fid'];
	$posts[8]=$_POST['fname'];
	$posts[9]=$_POST['flname'];
	$posts[10]=$_POST['fmobno'];
	$posts[11]=$_POST['phn'];
	$posts[12]=$_POST['mobno'];
	$posts[13]=$_POST['email'];
	$posts[14]=$_POST['address'];
	$posts[15]=$_POST['regdate'];
	$posts[16]=$_POST['qual'];
	$posts[17]=$_POST['dep'];
	$posts[18]=$_POST['desgn'];
	$posts[19]=$_POST['exp'];
	$posts[20]=$_POST['salary'];
	return $posts;
	}
	
	if(isset($_POST['btnsearch']))
	{
	{
		if ( $_POST['regno']== "")
	{
	echo "Enter ID";
	}
	else {
	$data=getPosts();
	
	$search_Query="SELECT * FROM employee WHERE regno =$data[0]";
	$search_Result=mysqli_query($connect,$search_Query);
	
		if($search_Result)
		{
				if (mysqli_num_rows($search_Result) == 0)
		{echo "<script>alert('No record found for this ID');</script>";}
		else {
			while($row=mysqli_fetch_array($search_Result))
			{						
			$regno=$row['regno'];
			$ename=$row['empname'];
			$elname=$row['emplname'];
			$dob=$row['empdob'];
			$pob=$row['emppbirth'];
			$cnic=$row['empcnic'];
			$gender=$row['gender'];
			$fid=$row['fid'];
			$fname=$row['fname'];
            $flname=$row['flname'];
			$fmobno=$row['fmob'];
			$phn=$row['emppho'];
			$mobno=$row['empmob'];
			$email=$row['empemail'];
			$address=$row['empaddress'];
			$regdate=$row['regdate'];
			$qual=$row['qual'];
			$dep=$row['dep'];
			$desgn=$row['desgn'];
			$exp=$row['exp'];
			$salary=$row['salary'];

			}
		}
		}else{
					echo 'No  Data For this ID';
			}
	}
	}

	
}


?>
				
<p align="center">	<span class="style1"> Employee Info </span></p>
<form action=" Employee Info.php" method="post" >
<table width="498" height="57" border="0" align="center">
  <tr>
    <td width="184" class="style3"> Reg No </td>
    <td width="280"><label> </label>
      <div align="left">
          <input name="regno" type="number" id="regno" value="<?php echo $regno;?>" required/>
          <input name="btnsearch" type="submit" id="btnsearch" class="button" value="Search">
        </div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>

<table width="1059" height="293" align="center">
  <tr>
    <td width="432"><div align="center">
      <p align="center" class="style3">Basic Info </p>
      </div></td>
    <td width="423"><div align="center">
      <p align="center" class="style3">Father Info</p>
      </div></td>
  </tr>
  <tr>
    <td><table width="465" height="217" border="0" align="center">
      <tr>
        <td width="144">Employee First Name </td>
        <td><label> </label>
            <div align="left">
              <input name="ename" type="text" id="ename" value="<?php echo $ename?>" size="35" />
            </div></td>
        <div id="loginerr" style="color:#FF0000 "></div>
        <div id="display" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Employee Last Name </td>
        <td><label> </label>
            <div align="left">
              <input name="elname" type="text" id="elname" value="<?php echo $elname?>" size="35"/>
            </div></td>
      </tr>
      <tr>
        <td>Employee Date of Birth </td>
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
              <input name="cnic" type="number" id="cnic" value="<?php echo $cnic;?>" size="35"/>
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
    <td><table width="451" height="192" border="0" align="center">
        <tr>
          <td>Father Id/Passport No</td>
          <td><label> </label>
              <div align="left">
                <input type="number" name="fid" id="fid" value="<?php echo $fid;?>" size="35"/>
              </div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="fname" value="<?php echo $fname;?>"size="35" />
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
        <td height="64"> Father Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="fmobno" type="numer" id="fmobno" value="<?php echo $fmobno;?>" size="35"/>
            </div></td>
      </tr>
          
      </table>
      <p>&nbsp;</p>
    </td>
  </tr>
  <tr>
    <td><div align="center">
      <p align="center" class="style3">Contact</p>
      </div></td>
    <td><div align="center">
      <p align="center" class="style3"><strong>Registration Info</strong></p>
      </div></td>
  </tr>
  <tr>
    <td><table width="469" height="170" border="0" align="center">
      <tr>
        <td width="124">Phone No </td>
        <td><label> </label>
            <div align="left">
              <input type="number" name="phn" id="phn" value="<?php echo $phn;?>" size="35"/>
            </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="number" id="mobno" value="<?php echo $mobno;?>" size="35"/>
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
              <textarea name="address" id="address" value="<?php echo $address;?>"><?php echo $address;?></textarea>
            </div></td>
      </tr>
    </table></td>
    <td><table width="486" height="98" border="0" align="center">
      <tr>
        <td width="159">Registration Date </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" value="<?php echo $regdate;?>" size="35"/>
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	  <tr>
        <td width="159">Qualification </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="qual" id="qual" value="<?php echo $qual;?>" size="35"/>
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Requested Department </td>
        <td><label> </label>
            <div align="left">
              <input type="text" name="dep" id="dep" value="<?php echo $dep;?>"size="35" />
            </div></td>
      </tr>
      <tr>
        <td width="159">Designation </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="desgn" id="desgn" value="<?php echo $desgn;?>" size="35"/>
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	  <tr>
        <td height="24">Experience </td>
        <td><label> </label>
            <div align="left">
              <textarea name="exp" id="exp" value="<?php echo $exp;?>l"><?php echo $exp;?></textarea>
            </div></td>
      </tr>
	  <tr>
        <td width="159">Salary </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="salary" id="salary" value="<?php echo $salary;?>" size="35"/>
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
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
