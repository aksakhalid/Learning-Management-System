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
.style4 {font-size: 24px; font-weight: bold; }
.button
{
	
	font-size:15px; 
	border-radius: 5px;
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
$icode=$iname=$address=$city=$otime=$ctime=$pno=$mno=$email="";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$connect=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}

	
	
	
	$search_Query="SELECT * FROM info ";
	$search_Result=mysqli_query($connect,$search_Query);
	
		if($search_Result)
		{
			while($row=mysqli_fetch_array($search_Result))
			{				
			$icode=$row['code'];
			$iname=$row['iname'];
			$address=$row['address'];
			$city=$row['city'];
			$otime=$row['otime'];
			$ctime=$row['ctime'];
			$pno=$row['pno'];
			$mno=$row['mno'];
			$email=$row['email'];
			
			}
	
	}
	
	//updating code 
if(isset($_REQUEST["update"]))
{
$icode=$_REQUEST["icode"];
$icodeupdate_Query="UPDATE info SET code='$icode' ";
	$icode_Result=mysqli_query($connect,$icodeupdate_Query);
	
		if($icode_Result)
		{
			echo " code updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}	


//updating Name 
if(isset($_REQUEST["update2"]))
{
$iname=$_REQUEST["iname"];
$inameupdate_Query="UPDATE info SET iname='$iname' ";
	$iname_Result=mysqli_query($connect,$inameupdate_Query);
	
		if($iname_Result)
		{
			echo " Name updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//updating city
if(isset($_REQUEST["update3"]))
{
$city=$_REQUEST["city"];
$cityupdate_Query="UPDATE info SET city='$city' ";
	$city_Result=mysqli_query($connect,$cityupdate_Query);
	
		if($city_Result)
		{
			echo " City updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//updating Opening Time 
if(isset($_REQUEST["update4"]))
{
$otime=$_REQUEST["otime"];
$otimeupdate_Query="UPDATE info SET otime='$otime' ";
	$otime_Result=mysqli_query($connect,$otimeupdate_Query);
	
		if($otime_Result)
		{
			echo " Opening Time updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//updating Closing Time 
if(isset($_REQUEST["update5"]))
{
$ctime=$_REQUEST["ctime"];
$ctimeupdate_Query="UPDATE info SET ctime
='$ctime' ";
	$ctime_Result=mysqli_query($connect,$ctimeupdate_Query);
	
		if($ctime_Result)
		{
			echo " Closing Time updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//updating Phone No
if(isset($_REQUEST["update6"]))
{
$pno=$_REQUEST["pno"];
$pnoupdate_Query="UPDATE info SET pno='$pno' ";
	$pno_Result=mysqli_query($connect,$pnoupdate_Query);
	
		if($pno_Result)
		{
			echo " Phone No updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}	

//updating Mobile No 
if(isset($_REQUEST["update7"]))
{
$mno=$_REQUEST["mno"];
$mnoupdate_Query="UPDATE info SET mno='$mno' ";
	$mno_Result=mysqli_query($connect,$mnoupdate_Query);
	
		if($mno_Result)
		{
			echo " Mobile No updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}

//updating Email
if(isset($_REQUEST["update8"]))
{
$email=$_REQUEST["email"];
$emailupdate_Query="UPDATE info SET email='$email' ";
	$email_Result=mysqli_query($connect,$emailupdate_Query);
	
		if($email_Result)
		{
			echo " Email updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}								
						

//updating Address 
if(isset($_REQUEST["update9"]))
{
$address=$_REQUEST["address"];
$addressupdate_Query="UPDATE info SET address='$address' ";
	$address_Result=mysqli_query($connect,$addressupdate_Query);
	
		if($address_Result)
		{
			echo " Address updated successfully";
		}
		
	else {
					echo 'Result Error';
		}
}	

//add new course
if(isset($_REQUEST["update10"]))
{
$cid=$_REQUEST["cid"];
$course=$_REQUEST["course"];
$subj=$_REQUEST["subj"];
$courseupdate_Query="INSERT INTO prooffered (cid, course,subj) VALUES ('$_POST[cid]', '$_POST[course]','$_POST[subj]')";
	$course_Result=mysqli_query($connect,$courseupdate_Query);
	
		if($course_Result)
		{
			echo " Course added successfully";
		}
		
	else {
					echo 'Result Error';
		}
}	

//delete couse
if(isset($_REQUEST["update11"]))
{
$cid2=$_REQUEST["cid2"];
$del_Query="DELETE FROM prooffered WHERE cid = '$cid2'";
	$del_Result=mysqli_query($connect,$del_Query);
	
		if($del_Result)
		{
			echo 'Course Deleted Successfully';
		}
		
	else {
					echo 'Result Error';
		}
	

}
	
?>

<form action="Edit Institution Info.php" method="post" >
  <p align="center"><span class="style1">Institution Information </span></p>
  <p align="center">&nbsp;</p>
  <table width="978" height="602" align="center">
    <tr>
      <td width="483" height="30"><div align="center"><span class="style4">Basic Info </span></div></td>
      <td width="483"><div align="center"><span class="style4">Contact</span></div></td>
    </tr>
    <tr>
      <td height="262"><table width="462" height="261" border="0" align="center">
          <tr>
            <td width="123">Institution Code </td>
            <td width="304"><label> </label>
              <div align="left">
                  <input name="icode" type="text" id="icode" size="35" value="<?php echo $icode?>" />
                  <input name="update" type="submit" id="update" class="button" value="Update" />
            </div></td>
            <div id="loginerr" style="color:#FF0000 "></div>
            <div id="display" style="color:#FF0000 "> </div>
          </tr>
          <tr>
            <td>Institution  Name </td>
            <td><label> </label>
              <div align="left">
                  <input name="iname" type="text" id="iname" size="35" value="<?php echo $iname?>"/>
                  <input name="update2" type="submit" id="update2" class="button" value="Update" />
              </div></td>
          </tr>

          <tr>
            <td>City</td>
            <td><label> </label>
              <div align="left">
                  <input name="city" type="text" id="city" size="35" value="<?php echo $city;?>" />
                  <input name="update3" type="submit" id="update3" class="button" value="Update" />
              </div></td>
          </tr>
          <tr>
            <td>Opening time </td>
            <td><label> </label>
              <div align="left">
                  <input name="otime" type="text" id="otime" size="35" value="<?php echo $otime;?>"/>
                  <input name="update4" type="submit" id="update4" class="button" value="Update" />
              </div></td>
          </tr>
          <tr>
            <td>Closing Time </td>
            <td><label> </label>  <div align="left">
              <input name="ctime" type="text" id="ctime" size="35" value="<?php echo $ctime;?>"/>
              <input name="update5" type="submit" id="update5" class="button" value="Update" />
            </div></td>
          </tr>
        </table>
      </td>
      <td><table width="464" height="248" border="0" align="center">
        <tr>
          <td width="115">Phone No </td>
          <td width="339"><label> </label>
              <div align="left">
                <input  name="pno" type="text" id="pno"  size="35" value="<?php echo $pno;?>"/>
                <input name="update6" type="submit" id="update6" class="button" value="Update" />
            </div></td>
          <div id="div" style="color:#FF0000 "></div>
          <div id="div2" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Mobile Number </td>
          <td><label> </label>
              <div align="left">
                <input name="mno" type="text" id="mno" size="35" value="<?php echo $mno;?>" />
                <input name="update7" type="submit" id="update7" class="button" value="Update" />
              </div></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><label> </label>
              <div align="left">
                <input name="email" type="text" id="email" size="35" value="<?php echo $email;?>" />
                <input name="update8" type="submit" id="update8" class="button" value="Update" />
              </div></td>
        </tr>
        <tr>
          <td height="37">Address</td>
          <td><div align="left">
            <textarea name="address" cols="35" id="address"><?php echo $address;?></textarea>
            <input name="update9" type="submit" id="update9" class="button" value="Update" />
          </div>          <label> </label></td>
        </tr>
      </table>
      </td>
    </tr>
    <tr>
      <td height="34"><div align="center">
        <p class="style4">Programs Offered </p>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><table width="530" height="190" border="0" align="center">
        <tr>
          <td width="165" height="152">Add a program </td>
          <td width="355"><label> </label>
              <div align="left">
                <p>
                  <input name="cid" type="text" id="cid" placeholder="Enter course id" size="35" />
                </p>
                <p>
                  <input name="course" type="text" id="course"placeholder="Enter course name " size="35" />
                </p>
                <p>
                  <input name="subj" type="text" id="subj" placeholder="Enter subjects" size="35" />
                </p>
                <p>                 
                  <input name="update10" type="submit" class="button" id="update10" value="Add" />
                </p>
            </div></td>
          <div id="div3" style="color:#FF0000 "></div>
          <div id="div4" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Remove a Program </td>
          <td><label> </label>
              <div align="left">
                <input name="cid2" type="text" id="cid2" placeholder="Enter course id" size="35"/>
                <input name="update11" type="submit" class="button" id="update11" value="Remove" />
            </div></td>
        </tr>

      </table></td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
  <p>&nbsp;</p>
  <p>&nbsp;  </p>
</body>
</html>
