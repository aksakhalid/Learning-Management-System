
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
<link href="CSS/Style.css" rel="stylesheet" type="text/css">
</head>
<body >


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>

<?php include 'Header.php'; ?>

<?php 
$con=mysqli_connect("localhost","root","","LMS");
$query = "SELECT DISTINCT course FROM prooffered ";
$result1 = mysqli_query($con ,$query) ;

?>
<?php
$rollno=$sname=$slname=$dob=$pob=$cnic=$gender=$fid=$fname=$flname=$fmob=$fpro=$fincome=$fqua=$phn=$mobno=$email=$address=$regdate=$reqcls=$lschool=$fee="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$conn=mysqli_connect("localhost","root","","LMS");
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
	$posts[19]=$_POST['reqcls'];
	$posts[20]=$_POST['lschool'];
	$posts[21]=$_POST['fee'];
	return $posts;
	}
	

	
	if(isset($_POST['btnsearch']))
	{
		if ( $_POST['rollno']== "")
	{
	echo "enter roll no";
	}
	else {
	$data=getPosts();
	
	$search_Query="SELECT * FROM student WHERE grno =$data[0]";
	
	$search_Result=mysqli_query($conn,$search_Query);
	
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
			$reqcls=$row['reqclass'];
			$lschool=$row['stdsch'];
			$fee=$row['fee'];

			}
			}
		}else{
					echo 'No  Data For this ID';
			}
}
}


//updating name 	
	if(isset($_REQUEST["update"]) )
{
$data=getPosts();
$sname=$_REQUEST["sname"];

$sql = "UPDATE student SET stdname='$sname' WHERE grno=$data[0] ";

if($conn->query($sql) === TRUE) {

    echo "Name updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

}



//update lastname 
 if(isset($_REQUEST["update2"]) )
{
$data=getPosts();

$slname=$_REQUEST["slname"];


	
	$lstnupdate_Query="UPDATE student SET stdlname='$slname' WHERE grno=$data[0] ";
	$lstn_Result=mysqli_query($conn,$lstnupdate_Query);
	
		if($lstn_Result)
		{
			echo " Last Name updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}	


//update Date of Birth  
if(isset($_REQUEST["update3"]) )
{
$data=getPosts();

$dob=$_REQUEST["dob"];

	$dobupdate_Query="UPDATE student SET stddob='$dob' WHERE grno=$data[0] ";
	$dob_Result=mysqli_query($conn,$dobupdate_Query);
	
		if($dob_Result)
		{
			echo " Date of birth  updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}


//update Place of birth 
if(isset($_REQUEST["update4"]))
{	
$data=getPosts();

$pob=$_REQUEST["pob"];

$pobupdate_Query="UPDATE student SET stdpbirth='$pob' WHERE grno=$data[0] ";
	$pob_Result=mysqli_query($conn,$pobupdate_Query);
	
		if($pob_Result)
		{
			 echo " place of birth updated successfully";
		}
		
	else {
					echo 'Result Error';

		}
}


//update CNIC or Bform 
if(isset($_REQUEST["update5"]))
{
$data=getPosts();

$cnic=$_REQUEST["cnic"];

$cnicupdate_Query="UPDATE student SET stdcnic='$cnic' WHERE grno=$data[0] ";
$cnic_Result=mysqli_query($conn,$cnicupdate_Query);
	
		if($cnic_Result)
		{
			  echo "CNIC updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}


//update Gender
if(isset($_REQUEST["update6"]))
{
$data=getPosts();

$gender=$_REQUEST["gender"];



$genderupdate_Query= "UPDATE student SET gender='$gender' WHERE grno=$data[0] ";
$gender_Result=mysqli_query($conn,$genderupdate_Query);
	
		if($gender_Result)
		{
			  echo "gender updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}




//update father id
if(isset($_REQUEST["update7"]))
{
$data=getPosts();

$fid=$_REQUEST["fid"];
$fatheridupdate_Query= "UPDATE student SET fid='$fid' WHERE grno=$data[0] ";
$fatherid_Result=mysqli_query($conn,$fatheridupdate_Query);
	
		if($fatherid_Result)
		{
			  echo "father id updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update father first  name 
if(isset($_REQUEST["update8"]))
{
$data=getPosts();
$fname=$_REQUEST["fname"];
$fnameupdate_Query= "UPDATE  student  SET fname ='$fname'   WHERE grno=$data[0] ";
$fname_Result=mysqli_query($conn,$fnameupdate_Query);
if($fname_Result)
{
			  echo "  father first name updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}


//update father last name 
if(isset($_REQUEST["update9"]))
{
$data=getPosts();
$flname =$_REQUEST["flname"];
$flnameupdate_Query= "UPDATE  student  SET flname ='$flname'   WHERE grno=$data[0] ";
$flname_Result=mysqli_query($conn,$flnameupdate_Query);
if($flname_Result)
{
			  echo " father last name updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update father mobile 
if(isset($_REQUEST["update10"]))
{
$data=getPosts();
$fmob=$_REQUEST["fmob"];
$fmobupdate_Query= "UPDATE  student  SET fmob='$fmob'   WHERE grno=$data[0] ";
$fmob_Result=mysqli_query($conn,$fmobupdate_Query);
if($fmob_Result)
{
			  echo "father mobile updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update profession 
if(isset($_REQUEST["update11"]))
{
$data=getPosts();
$fpro =$_REQUEST["fpro"];
$fproupdate_Query= "UPDATE  student  SET fpro ='$fpro'   WHERE grno=$data[0] ";
$fpro_Result=mysqli_query($conn,$fproupdate_Query);
if($fpro_Result)
{
			  echo "  profession updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update income
if(isset($_REQUEST["update12"]))
{
$data=getPosts();
$fincome =$_REQUEST["fincome"];
$fincomeupdate_Query= "UPDATE  student  SET fincome='$fincome'   WHERE grno=$data[0] ";
$fincome_Result=mysqli_query($conn,$fincomeupdate_Query);
if($fincome_Result)
{
			  echo "  income updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}


//update qualifation 
if(isset($_REQUEST["update13"]))
{
$data=getPosts();
$fqua =$_REQUEST["fqua"];
$fquaupdate_Query= "UPDATE  student  SET fqua ='$fqua'   WHERE grno=$data[0] ";
$fqua_Result=mysqli_query($conn,$fquaupdate_Query);
if($fqua_Result)
{
			  echo " qualifation  updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update phone number
if(isset($_REQUEST["update14"]))
{
$data=getPosts();
$phn =$_REQUEST["phn"];
$phnupdate_Query= "UPDATE  student  SET stdpho ='$phn'   WHERE grno=$data[0] ";
$phn_Result=mysqli_query($conn,$phnupdate_Query);
if($phn_Result)
{
			  echo "phone number updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update mobile numbaer
if(isset($_REQUEST["update15"]))
{
$data=getPosts();
$mobno =$_REQUEST["mobno"];
$mobnoupdate_Query= "UPDATE  student  SET stdmob='$mobno'   WHERE grno=$data[0] ";
$mobno_Result=mysqli_query($conn,$mobnoupdate_Query);
if($mobno_Result)
{
			  echo "mobile numbaer updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update email
if(isset($_REQUEST["update16"]))
{
$data=getPosts();
$email =$_REQUEST["email"];
$emailupdate_Query= "UPDATE  student  SET stdemail ='$email'   WHERE grno=$data[0] ";
$email_Result=mysqli_query($conn,$emailupdate_Query);
if($email_Result)
{
			  echo "email updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update address 
if(isset($_REQUEST["update17"]))
{
$data=getPosts();
$address =$_REQUEST["address"];
$addressupdate_Query= "UPDATE  student  SET stdaddress ='$address'   WHERE grno=$data[0] ";
$address_Result=mysqli_query($conn,$addressupdate_Query);
if($address_Result)
{
			  echo "address updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update regestration date
if(isset($_REQUEST["update18"]))
{
$data=getPosts();
$regdate =$_REQUEST["regdate"];
$regdateupdate_Query= "UPDATE  student  SET regdate='$regdate'   WHERE grno=$data[0] ";
$regdate_Result=mysqli_query($conn,$regdateupdate_Query);
if($regdate_Result)
{
			  echo "regestration date updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//update class
if(isset($_REQUEST["update19"]))
{
$data=getPosts();
$reqcls =$_REQUEST["reqcls"];
$reqclsupdate_Query= "UPDATE  student  SET reqclass='$reqcls'   WHERE grno=$data[0] ";
$reqcls_Result=mysqli_query($conn,$reqclsupdate_Query);
if($reqcls_Result)
{
			  echo "class updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}


//update last school
if(isset($_REQUEST["update20"]))
{
$data=getPosts();
$lschool =$_REQUEST["lschool"];
$lschoolupdate_Query= "UPDATE  student  SET stdsch ='$lschool'   WHERE grno=$data[0] ";
$lschool_Result=mysqli_query($conn,$lschoolupdate_Query);
if($lschool_Result)
{
			  echo " last school updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}
//update Fe
if(isset($_REQUEST["update202"]))
{
$data=getPosts();
$fee =$_REQUEST["fee"];
$feeupdate_Query= "UPDATE  student  SET fee ='$fee'   WHERE grno=$data[0] ";
$fee_Result=mysqli_query($conn,$feeupdate_Query);
if($fee_Result)
{
			  echo " Fee updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//mulupdate 
if(isset($_REQUEST["mulupdate"]))
{
$data=getPosts();
$sname=$_REQUEST["sname"];
$slname=$_REQUEST["slname"];
$dob=$_REQUEST["dob"];
$pob=$_REQUEST["pob"];
$cnic=$_REQUEST["cnic"];
$gender=$_REQUEST["gender"];
$fid=$_REQUEST["fid"];
$fname=$_REQUEST["fname"];
$flname =$_REQUEST["flname"];
$fmob=$_REQUEST["fmob"];
$fpro =$_REQUEST["fpro"];
$fincome =$_REQUEST["fincome"];
$fqua =$_REQUEST["fqua"];
$phn =$_REQUEST["phn"];
$mobno =$_REQUEST["mobno"];
$email =$_REQUEST["email"];
$address =$_REQUEST["address"];
$regdate =$_REQUEST["regdate"];
$reqcls =$_REQUEST["reqcls"];
$lschool =$_REQUEST["lschool"];
$fee =$_REQUEST["fee"];

$mulupdate_Query= "UPDATE  student  SET stdname='$sname' , stdlname='$slname' , stddob='$dob' , stdpbirth='$pob' , stdcnic='$cnic' , fid='$fid' , fname ='$fname'   , flname ='$flname'    , fmob='$fmob'    , fpro ='$fpro'   , fincome='$fincome'  , gender='$gender'   , fqua ='$fqua'   , stdpho ='$phn'   , stdmob='$mobno'   , stdemail ='$email'   , stdaddress ='$address'   , regdate='$regdate'   , reqclass='$reqcls' ,   stdsch ='$lschool'  ,   fee ='$fee'    WHERE grno=$data[0] ";
$mul_Result=mysqli_query($conn,$mulupdate_Query);
if($mul_Result)
{
			  echo " Record Updated successfully ";
		}
		
	else {
					echo 'Result Error';
		}
}


$conn->close();


?>
				



<p align="center">	<span class="style1">Update Student Info </span></p>

<form action="Update.php" method="post" >
<div align="center">
  <table width="474" height="57" border="0" align="center">
    <tr>
      <td width="184"> <span class="style5">Enter Student RollNo </span></td>
        <td width="280"><label> </label>
          <div align="left">
            <input name="rollno" type="number" id="rollno" value="<?php echo $rollno;?>" required />
            <input name="btnsearch" type="submit" class="button" value="Search">
          </div></td>
      </tr>
  </table>
</div>
<p align="center">&nbsp;</p>

<div align="center">
  <table width="1153" height="553" align="center">
    <tr>
      <td width="570"><div align="center"><span class="style4">Basic Info </span></div></td>
        <td width="571"><div align="center"><span class="style4">Father Info</span></div></td>
      </tr>
    <tr>
      <td height="255"><table width="534" height="210" border="0" align="center">
          <tr>
            <td width="129">Student First Name </td>
            <td width="395" nowrap><label> </label>

                <div align="left">
                  <input name="sname" type="text" id="sname" value="<?php echo $sname?>" size="35" />
                  <input name="update" type="submit" class="button1" id="update" value="Update" />
                </div></td>
            <div id="loginerr" style="color:#FF0000 "></div>
            <div id="display" style="color:#FF0000 "> </div>
          </tr>
          <tr>
            <td>Student Last Name </td>
            <td nowrap><label> </label>
                
                <div align="left">
                  <input name="slname" type="text" id="slname" value="<?php echo $slname?>" size="35"/>
                  <input name="update2" type="submit" class="button1" id="update2" value="update" />
                </div></td>
          </tr>
          <tr>
            <td>Student Date of Birth </td>
            <td nowrap><label> </label>
                <div align="left">
                  <input name="dob" type="date" id="dob" value="<?php echo $dob?>" size="35"/>
                  <input name="update3" type="submit" class="button1" id="update3" value="Update" />
                </div></td>
          </tr>
          <tr>
            <td>Place of Birth </td>
            <td nowrap><label> </label>
                <div align="left">
                  <input name="pob" type="text" id="pob" value="<?php echo $pob;?>" size="35" />
                  <input name="update4" type="submit" class="button1" id="update4" value="Update" />
                </div></td>
          </tr>
          <tr>
            <td>Form-B/CNIC</td>
            <td nowrap><label> </label>
                <div align="left">
                  <input name="cnic" type="text" id="cnic" value="<?php echo $cnic;?>" size="35"/>
                  <input name="update5" type="submit" class="button1" id="update5" value="Update" />
                </div></td>
          </tr>
          <tr>
		  
            <td><label for="gender">Gender:</label></td>
            <td nowrap><div align="left">
			<select name="gender" id="gender" placeholder="Gender">
              <option value ="<?php echo $gender;?>" selected><?php echo $gender;?></option>
              <option value ="male">Male</option>
              <option value ="female">Female</option>
			  <option value ="others">others</option>
            </select> 
                <input name="update6" type="submit" class="button1" id="update6" value="Update" />
            </div></td>
          </tr>
        </table>        </td>
        <td><table width="531" height="215" border="0" align="center">
          <tr>
            <td width="168">Father CNIC/Passport No</td>
              <td width="353"><label> </label>
                <div align="left">
                  <input name="fid" type="text" id="fid" value="<?php echo $fid;?>" size="35" />
                  <input name="update7" type="submit" class="button1" id="update7" value="Update" />
              </div></td>
              <div id="div5" style="color:#FF0000 "></div>
              <div id="div6" style="color:#FF0000 "> </div>
            </tr>
          <tr>
            <td>Father Name </td>
              <td><label> </label>
                <div align="left">
                  <input name="fname" type="text" id="First Number" value="<?php echo $fname;?>" size="35" />
                  <input name="update8" type="submit" class="button1" id="update8" value="Update" />
                </div></td>
            </tr>
          <tr>
            <td>Father Last Name </td>
              <td><label> </label>
                <div align="left">
                  <input name="flname" type="text" id="flname" value="<?php echo $flname;?>" size="35" />
                  <input name="update9" type="submit" class="button1" id="update9" value="Update" />
                </div></td>
            </tr>
          <tr>
            <td>Father Mobile Number </td>
              <td><label> </label>
                <div align="left">
                  <input name="fmob" type="text" id="fmob" value="<?php echo $fmob;?>" size="35" />
                  <input name="update10" type="submit" class="button1" id="update10" value="Update" />
                </div></td>
            </tr>
          
          <tr>
            <td>Father Profession</td>
              <td><label> </label>
                <div align="left">
                  <input name="fpro" type="text" id="fpro" value="<?php echo $fpro;?>" size="35"/>
                  <input name="update11" type="submit" class="button1" id="update11" value="Update" />
                </div></td>
            </tr>
          <tr>
            <td>Father Annual Income </td>
              <td><label> </label>
                <div align="left">
                  <input name="fincome" type="number" id="fincome" value="<?php echo $fincome;?>" size="35"/>
                  <input name="update12" type="submit" class="button1" id="update12" value="Update" />
                </div></td>
            </tr>
          <tr>
            <td>Father Qualification </td>
              <td><label> </label>
                <div align="left">
                  <input name="fqua" type="text" id="fqua" value="<?php echo $fqua;?>" size="35"/>
                  <input name="update13" type="submit" class="button1" id="update13" value="Update" />
                </div></td>
            </tr>
          </table>        </td>
      </tr>
    <tr>
      <td height="42"><div align="center"><span class="style4">Contact</span></div></td>
        <td><div align="center"><span class="style4">Registration Info</span></div></td>
      </tr>
    <tr>
      <td><table width="528" height="155" border="0" align="center">
          <tr>
            <td width="152" nowrap>Phone No </td>
            <td width="366" nowrap><label> </label>
                <div align="left">
                  <input type="text" name="phn" id="phn" value="<?php echo $phn;?>" size="35"/>
                  <input name="update14" type="submit" class="button1" id="update14" value="Update" />
                </div></td>
            <div id="div" style="color:#FF0000 "></div>
            <div id="div2" style="color:#FF0000 "> </div>
          </tr>
          <tr>
            <td nowrap>Mobile Number </td>
            <td nowrap><label> </label>
                <div align="left">
                  <input name="mobno" type="text" id="mobno" value="<?php echo $mobno;?> " size="35" />
                  <input name="update15" type="submit" class="button1" id="update15" value="Update" />
                </div></td>
          </tr>
          <tr>
            <td>Email</td>
            <td nowrap><label> </label>
                <div align="left">
                  <input name="email" type="text" id="email" value="<?php echo $email;?>" size="35">
                  <input name="update16" type="submit" class="button1" id="update16" value="Update" />
                </div></td>
          </tr>
          <tr>
            <td>Address</td>
            <td nowrap><label> </label>
                <div align="left">
                  <textarea name="address" cols="35" size="50" id="address"><?php echo $address;?></textarea>
                  <input name="update17" type="submit" class="button1" id="update17" value="Update" />
                </div></td>
          </tr>
        </table></td>
        <td><table width="538" height="125" border="0" align="center">
          <tr>
            <td width="137" nowrap>Registration Date </td>
            <td width="381" nowrap><label> </label>
              <div align="left">
                <input name="regdate" type="date" id="regdate" value="<?php echo $regdate;?>" size="35"/>
                <input name="update18" type="submit" class="button1" id="update18" value="Update" />
              </div></td>
            <div id="div3" style="color:#FF0000 "></div>
            <div id="div4" style="color:#FF0000 "> </div>
          </tr>
          <tr>
            <td nowrap>Requested Class </td>
            <td nowrap><label> </label>
              <div align="left">
			    <select name="reqcls" id="reqcls">
			  <option value ="<?php echo $reqcls;?>" selected><?php echo $reqcls;?></option>
			  <?php while ($row1 = mysqli_fetch_array($result1)):;?>
			  <option value ="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
			  
			  <?php endwhile ;?>
			  </select>
              
                <input name="update19" type="submit" class="button1" id="update19" value="Update" />
              </div></td>
          </tr>
          <tr>
            <td nowrap>Last School Attended </td>
            <td><label> </label>
              <div align="left">
                <textarea name="lschool" cols="35" id="lschool"><?php echo $lschool;?></textarea>
                <input name="update20" type="submit" class="button1" id="update20" value="Update" />
              </div></td>
          </tr>
		   <tr>
            <td nowrap>Student Fee </td>
            <td nowrap><label> </label>
              <div align="left">
                <input type="number" name="fee" id="fee" size="35" value="<?php echo $fee;?>" />
                
                <input name="update202" type="submit" class="button1" id="update202" value="Update" />
              </div></td>
          </tr>
        </table></td>
      </tr>
  </table>
</div>
<p align="left" class="style2">&nbsp;	</p>
<table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="mulupdate" type="submit" class="button" id="mulupdate" value="Multiple Updates" />
        <input name="cancel" type="submit" class="button" id="cancel" value="Cancel" />
      </div></td>
  </tr>
</table>
</form>

<h3>&nbsp;</h3>
</body>
</html>
