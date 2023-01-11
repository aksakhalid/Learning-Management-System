<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="CSS//Style.css">
<style type="text/css">
<!--

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
//updating name 	
	if(isset($_REQUEST["update"])) 
	
{
$data=getPosts();
$ename=$_REQUEST["ename"];

$sql = "UPDATE employee SET empname='$ename' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo "Name updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating last name 	
	if(isset($_REQUEST["update2"]))
{
$data=getPosts();
$elname=$_REQUEST["elname"];

$sql = "UPDATE employee SET empname='$ename' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Last Name updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Date Of Birth 	
	if(isset($_REQUEST["update3"]))
{
$data=getPosts();
$dob=$_REQUEST["dob"];

$sql = "UPDATE employee SET empdob='$dob' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Date Of Birth updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Place Of Birth 	
	if(isset($_REQUEST["update4"]))
{
$data=getPosts();
$pob=$_REQUEST["pob"];

$sql = "UPDATE employee SET emppbirth='$pob' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Place Of Birth updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee CNIC/B_Form 	
	if(isset($_REQUEST["update5"]))
{
$data=getPosts();
$cnic=$_REQUEST["cnic"];

$sql = "UPDATE employee SET empcnic='$cnic' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " CNIC updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Gender	
	if(isset($_REQUEST["update6"]))
{
$data=getPosts();
$gender=$_REQUEST["gender"];

$sql = "UPDATE employee SET gender='$gender' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Gender updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Father ID	
	if(isset($_REQUEST["update7"]))
{
$data=getPosts();
$fid=$_REQUEST["fid"];

$sql = "UPDATE employee SET fid='$fid' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Father ID updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Father Name	
	if(isset($_REQUEST["update8"]))
{
$data=getPosts();
$fname=$_REQUEST["fname"];

$sql = "UPDATE employee SET fname='$fname' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Father Name updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Father Last Name	
	if(isset($_REQUEST["update9"]))
{
$data=getPosts();
$flname=$_REQUEST["flname"];

$sql = "UPDATE employee SET flname='$flname' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Father Last Name updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Father mobile No	
	if(isset($_REQUEST["update10"]))
{
$data=getPosts();
$fmobno=$_REQUEST["fmobno"];

$sql = "UPDATE employee SET fmob='$fmobno' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Father Mobile No updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Phone No	
	if(isset($_REQUEST["update11"]))
{
$data=getPosts();
$phn=$_REQUEST["phn"];

$sql = "UPDATE employee SET emppho='$phn' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Employee Phone No updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Mobile No	
	if(isset($_REQUEST["update12"]))
{
$data=getPosts();
$mobno=$_REQUEST["mobno"];

$sql = "UPDATE employee SET empmob='$mobno' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Mobile No updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Email	
	if(isset($_REQUEST["update13"]))
{
$data=getPosts();
$email=$_REQUEST["email"];

$sql = "UPDATE employee SET empemail='$email' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Email updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Address	
	if(isset($_REQUEST["update14"]))
{
$data=getPosts();
$address=$_REQUEST["address"];

$sql = "UPDATE employee SET empaddress='$address' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Address updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Registration Date	
	if(isset($_REQUEST["update15"]))
{
$data=getPosts();
$regdate=$_REQUEST["regdate"];

$sql = "UPDATE employee SET regdate='$regdate' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Registration Date updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Qualification	
	if(isset($_REQUEST["update16"]))
{
$data=getPosts();
$qual=$_REQUEST["qual"];

$sql = "UPDATE employee SET qual='$qual' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo "Qualification updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Department	
	if(isset($_REQUEST["update17"]))
{
$data=getPosts();
$dep=$_REQUEST["dep"];

$sql = "UPDATE employee SET dep='$dep' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Department updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating Employee Designation	
	if(isset($_REQUEST["update18"]))
{
$data=getPosts();
$desgn=$_REQUEST["desgn"];

$sql = "UPDATE employee SET dsegn='$desgn' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Designation updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}
//updating EmployeeExperience	
	if(isset($_REQUEST["update19"]))
{
$data=getPosts();
$exp=$_REQUEST["exp"];

$sql = "UPDATE employee SET exp='$exp' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Experience updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}

//updating Employee Salary	
	if(isset($_REQUEST["update20"]))
{
$data=getPosts();
$salary=$_REQUEST["salary"];

$sql = "UPDATE employee SET salary='$salary' WHERE regno=$data[0] ";

if($connect->query($sql)) {

    echo " Salary updated successfully";
} else {
    echo "Error updating record: " . $connect->error;
}

}



//mulupdate 
if (isset($_REQUEST["submit"]))
{
echo "entered";
$data=getPosts();
$ename=$_REQUEST["ename"];
$elname=$_REQUEST["elname"];
$dob=$_REQUEST["dob"];
$pob=$_REQUEST["pob"];
$cnic=$_REQUEST["cnic"];
$gender=$_REQUEST["gender"];
$fid=$_REQUEST["fid"];
$fname=$_REQUEST["fname"];
$flname =$_REQUEST["flname"];
$fmobno=$_REQUEST["fmobno"];
$phn =$_REQUEST["phn"];
$mobno =$_REQUEST["mobno"];
$email =$_REQUEST["email"];
$address =$_REQUEST["address"];
$regdate =$_REQUEST["regdate"];
$qual =$_REQUEST["qual"];
$dep =$_REQUEST["dep"];
$desgn =$_REQUEST["desgn"];
$exp =$_REQUEST["exp"];
$salary =$_REQUEST["salary"];


$mulupdate_Query= "UPDATE  employee  SET empname='$ename' , emplname='$elname' , empdob='$dob' , emppbirth='$pob' , empcnic='$cnic' , fid='$fid' , fname ='$fname'   , flname ='$flname'    , fmob='$fmobno'    , gender='$gender'   ,  emppho ='$phn'   , empmob='$mobno'   , empemail ='$email'   , empaddress ='$address'   , regdate='$regdate'   ,  qual='$qual'  , dep='$dep' , desgn='desgn' , exp='$exp'  , salary='$salary'    WHERE regno =$data[0] ";
$mul_Result=mysqli_query($connect,$mulupdate_Query);
if($mul_Result)
{
			  echo " Record Updated successfully ";
		}
		
	else {
					echo 'Result Error';
		}
}




$connect->close()

?>
				
<p align="center">	<span class="style1">  Edit Employee Info </span></p>
<form action="  Edit Employee Info.php" method="post" >
<table width="498" height="57" border="0" align="center">
  <tr>
    <td width="184" class="style3"> Reg No </td>
    <td width="280"><label> </label>
      <div align="left">
          <input name="regno" type="number" id="regno" value="<?php echo $regno;?>" required />
          <input name="btnsearch" type="submit" class="button" id="btnsearch" value="Search">
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
      <p align="center" class="style3"><strong>Father Info</strong></p>
      </div></td>
  </tr>
  <tr>
    <td><table width="465" height="217" border="0" align="center">
      <tr>
        <td width="144">Employee First Name </td>
        <td><label> </label>
            <div align="left">
              <input name="ename" type="text" id="ename" value="<?php echo $ename?>" size="35" />
              <input name="update" type="submit" id="update" value="Update" class="button1" />
            </div></td>
        <div id="loginerr" style="color:#FF0000 "></div>
        <div id="display" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Employee Last Name </td>
        <td><label> </label>
            <div align="left">
              <input name="elname" type="text" id="elname" value="<?php echo $elname?>" size="35"/>
              <input name="update2" type="submit" id="update2" value="Update" class="button1" />
            </div></td>
      </tr>
      <tr>
        <td>Employee Date of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="dob" type="date" id="dob" value="<?php echo $dob;?>" size="35"/>
              <input name="update3" type="submit" id="update3" value="Update" class="button1" />
            </div></td>
      </tr>
      <tr>
        <td>Place of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="pob" type="text" id="pob" value="<?php echo $pob;?>" size="35"/>
              <input name="update4" type="submit" id="update4" value="Update" class="button1" />
            </div></td>
      </tr>
      <tr>
        <td>Form-B/CNIC</td>
        <td><label> </label>
            <div align="left">
              <input name="cnic" type="number" id="cnic" value="<?php echo $cnic;?>" size="35"/>
              <input name="update5" type="submit" id="update5" value="Update" class="button1" />
            </div></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td><div align="left">
          			<select name="gender" id="gender" placeholder="Gender">
              <option value ="<?php echo $gender;?>" selected><?php echo $gender;?></option>
              <option value ="male">Male</option>
              <option value ="female">Female</option>
			  <option value ="others">others</option>
			  </select>
          <input name="update6" type="submit" id="update6" value="Update" class="button1" />
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td><table width="501" height="192" border="0" align="center">
        <tr>
          <td>Father Id/Passport No</td>
          <td><label> </label>
              <div align="left">
                <input type="number" name="fid" id="fid" value="<?php echo $fid;?>" size="35"/>
                <input name="update7" type="submit" id="update7" value="Update" class="button1"/>
              </div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="fname" value="<?php echo $fname;?>"size="35" />
                <input name="update8" type="submit" id="update8" value="Update" class="button1"/>
              </div></td>
        </tr>
        <tr>
          <td>Father Last Name </td>
          <td><label> </label>
              <div align="left">
                <input name="flname" type="text" id="flname" value="<?php echo $flname;?>" size="35"/>
                <input name="update9" type="submit" id="update9" value="Update" class="button1"/>
              </div></td>
        </tr>
         <tr>
        <td height="64"> Father Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="fmobno" type="numer" id="fmobno" value="<?php echo $fmobno;?>" size="35"/>
              <input name="update10" type="submit" id="update10" value="Update" class="button1"/>
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
      <p align="center" class="style3">Registration Info</p>
      </div></td>
  </tr>
  <tr>
    <td><table width="469" height="170" border="0" align="center">
      <tr>
        <td width="124">Phone No </td>
        <td><label> </label>
            <div align="left">
              <input type="number" name="phn" id="phn" value="<?php echo $phn;?>" size="35"/>
              <input name="update11" type="submit" id="update11" class="button1" value="Update" />
            </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="number" id="mobno" value="<?php echo $mobno;?>" size="35"/>
              <input name="update12" type="submit" id="update12" class="button1" value="Update" />
            </div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label> </label>
            <div align="left">
              <input name="email" type="text" id="email" value="<?php echo $email;?>" size="35"/>
              <input name="update13" type="submit" id="update13" value="Update" class="button1"/>
            </div></td>
      </tr>
      <tr>
        <td height="37">Address</td>
        <td><label> </label>
            <div align="left">
              <textarea name="address" id="address" value="<?php echo $address;?>"><?php echo $address;?></textarea>
              <input name="update14" type="submit" id="update14" value="Update" class="button1" />
            </div></td>
      </tr>
    </table></td>
    <td><table width="520" height="98" border="0" align="center">
      <tr>
        <td width="159">Registration Date </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" value="<?php echo $regdate;?>" size="35"/>
              <input name="update15" type="submit" id="update15" value="Update" class="button1" />
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	  <tr>
        <td width="159">Qualification </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="qual" id="qual" value="<?php echo $qual;?>" size="35"/>
              <input name="update16" type="submit" id="update16" value="Update" class="button1"/>
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Requested Department </td>
        <td><label> </label>
            <div align="left">
              <select name="dep" id="dep" placeholder="Requested Department">
                <option value ="<?php echo $dep;?>" selected><?php echo $dep;?></option>
                <option value="computer">computer</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Islamiyat">Islamiyat</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Biology">Biology</option>
                <option value="English">English</option>
                <option value="Urdu">Urdu</option>
                <option value="Psychology">Psychology</option>
              </select>
              <input name="update17" type="submit" id="update17" value="Update" class="button1" />
            </div></td>
      </tr>
      <tr>
        <td width="159">Designation </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="desgn" id="desgn" value="<?php echo $desgn;?>" size="35"/>
              <input name="update18" type="submit" id="update18" value="Update" class="button1" />
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	  <tr>
        <td height="24">Experience </td>
        <td><label> </label>
            <div align="left">
              <textarea name="exp" id="exp" value="<?php echo $exp;?>l"><?php echo $exp;?></textarea>
              <input name="update19" type="submit" id="update19" value="Update" class="button1" />
            </div></td>
      </tr>
	  <tr>
        <td width="159">Salary </td>
        <td width="317"><label> </label>
            <div align="left">
              <input type="text" name="salary" id="salary" value="<?php echo $salary;?>" size="35"/>
              <input name="update20" type="submit" id="update20" value="Update" class="button1" />
            </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
    </table></td>
  </tr>
  
</table>
<p align="left" class="style2">&nbsp;	</p>

<table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label></label>
      <div align="center">
        <label></label>
        <input name="submit" type="submit" id="submit" class="button" value="Multiple Updates" />
        <input name="cancel" type="submit" id="cancel" class="button" value="Cancel" />
      </div></td>
  </tr>
</table>
</form>

<p>&nbsp;</p>
<h3>&nbsp;</h3>
</body>
</html>
