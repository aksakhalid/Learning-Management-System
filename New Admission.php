
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
	color: #000066;
}
.button
{
	
	font-size:20px; 
	border-radius: 10px;
}
.style2 {font-size: 24px}
.style4 {font-size: 24px; font-weight: bold; }
-->
</style>
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
				
if(isset($_POST['submit'])) {

			


			 $sql="INSERT INTO student (stdname,stdlname,stddob,stdpbirth,stdcnic,gender,fid,fname,flname,fmob,fpro,fincome,fqua,stdpho,stdmob,stdemail,stdaddress,regdate,reqclass,stdsch,fee,grno) 
			VALUES ('$_POST[sname]','$_POST[slname]', '$_POST[dob]', '$_POST[pob]', '$_POST[cnic]','$_POST[gender]','$_POST[fid]','$_POST[fname]','$_POST[flname]','$_POST[fmob]' ,'$_POST[fpro]' ,'$_POST[fincome]','$_POST[fqua]','$_POST[phn]','$_POST[mobno]','$_POST[email]','$_POST[address]' ,'$_POST[regdate]','$_POST[cls]','$_POST[lschool]' ,'$_POST[fee]','$_POST[rollno]')";
			
			
			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			
			echo "Successfully Register";
			
			mysqli_close($con);
			}


?>
<p align="left"><span class="error">* required field </span></p>
<p align="center"><span class="style1">New Admission</span></p>
<form method="post">
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
              <input name="sname" type="text" id="sname" size="35" placeholder="First Name" required="enter name"  />
			  <span class="error">* </span>
          </div></td>
        <div id="loginerr" style="color:#FF0000 "></div>
        <div id="display" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Student Last Name </td>
        <td><label> </label>
            <div align="left">
              <input name="slname" type="text" id="slname" size="35" placeholder="Last Name" required="enter last name"/>
			  <span class="error">*</span>
          </div></td>
      </tr>
      <tr>
        <td>Student Date of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="dob" type="date" id="dob" size="35" placeholder="Date of Birth"/>
          </div></td>
      </tr>
      <tr>
        <td>Place of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="pob" type="text" id="pob"  size="35" placeholder="Place of Birth" />
          </div></td>
      </tr>
      <tr>
        <td>Form-B/CNIC</td>
        <td><label> </label>
            <div align="left">
              <input name="cnic" type="text" id="cnic" size="35" placeholder="B Form/CNIC No"/>
          </div></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td><div align="left">
            <select name="gender" id="gender" placeholder="Gender">
              <option value ="" selected>Please Select</option>
              <option value ="male">Male</option>
              <option value ="female">Female</option>
			  <option value ="others">others</option>
            </select> 
        </div></td>
      </tr>
    </table>
    <p>&nbsp;</p></td>
    <td><table width="406" height="136" border="0" align="center">
        <tr>
          <td>Father Id/Passport No</td>
          <td><label> </label>
              <div align="left">
                <input type="number" name="fid" id="fid" size="35" placeholder="ID No" required />
				<span class="error">* </span></div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="fname" size="35" placeholder="First Name"  required="enter name"/>
				<span class="error">* </span></div></td>
        </tr>
        <tr>
          <td>Father Last Name </td>
          <td><label> </label>
              <div align="left">
                <input name="flname" type="text" id="flname" size="35" placeholder="Last Number" />
            </div></td>
        </tr>
        <tr>
          <td>Father Mobile Number </td>
          <td><label> </label>
              <div align="left">
                <input name="fmob" type="number" id="fmob" size="35" placeholder="Mobile Number" />
            </div></td>
        </tr>

        <tr>
          <td>Father Profession</td>
          <td><label> </label>
              <div align="left">
                <input name="fpro" type="text" id="fpro" size="35" placeholder="Profession"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Annual Income </td>
          <td><label> </label>
              <div align="left">
                <input name="fincome" type="number" id="fincome"  size="35" placeholder="Income"/>
            </div></td>
        </tr>
        <tr>
          <td>Father Qualification </td>
          <td><label> </label>
              <div align="left">
                <input name="fqua" type="text" id="fqua" size="35" placeholder="Qualification"/>
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
              <input type="number" name="phn" id="phn" size="35" placeholder="Phone Number"/>
          </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="number" id="mobno"  size="35" placeholder="Mobile No" />
          </div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label> </label>
            <div align="left">
              <input name="email" type="text" id="email" size="35" placeholder="Email Address" />
          </div></td>
      </tr>
      <tr>
        <td height="37">Address</td>
        <td><label> </label>
            <div align="left">
              <textarea name="address" id="address" size="35" placeholder="Address"></textarea>
          </div></td>
      </tr>
    </table></td>
    <td><table width="403" height="98" border="0" align="center">
      <tr>
        <td width="145">Registration Date </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" size="35" placeholder="Registration Date" required />
			  <span class="error">* </span></div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Requested Class </td>
        <td><label> </label>
            <div align="left">
			
              <select name="cls" id="cls" required>
			  <option value ="" selected>Please Select</option>
			  <?php while ($row1 = mysqli_fetch_array($result1)):;?>
			  <option value ="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
			  
			  <?php endwhile ;?>
			  </select>
              <span class="error">* </span>
			  </div></td>
      </tr>
      <tr>
        <td height="24">Last School Attended </td>
        <td><label> </label>
            <div align="left">
              <textarea name="lschool" id="lschool" size="35" placeholder="Last School"></textarea>
          </div></td>
      </tr>
	   <tr>
          <td>Student Fee </td>
          <td><label> </label>
              <div align="left">
                <input name="fee" type="number" size="35" id="fee" placeholder="Fee"/>
            </div></td>
        </tr>
    </table></td>
  </tr>
</table>
<p align="center"><span class="style4">Misc Info</span></p>
<table width="484" height="57" border="0" align="center">
  <tr>
    <td width="184">GR No </td>
    <td><label> </label>
        <div align="left">
          <input name="rollno" type="text" id="rollno" size="35" placeholder="Roll No" required="enter Rollno."/>
	  <span class="error">*</span>      </div></td>
  </tr>
</table>
<p align="left" class="style2">&nbsp;	</p>
<table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="submit" type="submit" id="submit" class = "button" value="Register" />
        <input name="cancel" type="reset" id="cancel" class = "button" value="Cancel" />
      </div></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
</body>
</html>
