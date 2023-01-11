
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
<body >


<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>

<?php include 'Header.php'; ?>

<?php


					
if(isset($_POST['submit']))
 {

			 $sql="INSERT INTO employee
			  (empname,emplname,empdob,emppbirth,empcnic,gender,fid,fname,flname, fmob ,emppho,empmob,empemail,empaddress,regdate,qual, dep,desgn, exp ,salary  ,regno) 
VALUES ('$_POST[ename]','$_POST[elname]', '$_POST[dob]', '$_POST[pob]', '$_POST[cnic]','$_POST[gender]','$_POST[fid]','$_POST[fname]','$_POST[flname]', '$_POST[fmobno]','$_POST[phn]','$_POST[mobno]','$_POST[email]','$_POST[address]' ,'$_POST[regdate]','$_POST[qual]','$_POST[dep]', '$_POST[desgn]', '$_POST[exp]', '$_POST[salary]','$_POST[regno]')";
			
			
			if (!mysqli_query($con,$sql))
			  {
			  die('Error: ' . mysqli_error($con));
			  }
			
			echo "Successfully Register";
			
			mysqli_close($con);
}

?>
<p><span class="error">* required field</span></p>					
<p align="center">	<span class="style1">New Hired</span></p>

<form method="post">
<table width="867" height="293" align="center">
  <tr>
    <td width="413"><div align="center"><span class="style4">Basic Info </span></div></td>
    <td width="442"><div align="center"><span class="style4">Father Info</span></div></td>
  </tr>
  <tr>
    <td><table width="419" height="191" border="0" align="center">
      <tr>
        <td>Employee First Name </td>
        <td><label> </label>
            <div align="left">
              <input name="ename" type="text" id="ename" placeholder="First Name"  required/>
			  <span class="error">* </span>
          </div></td>
        <div id="loginerr" style="color:#FF0000 "></div>
        <div id="display" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Employee Last Name </td>
        <td><label> </label>
            <div align="left">
              <input name="elname" type="text" id="elname" placeholder="Last Name" required/>
			  <span class="error">* </span>
          </div></td>
      </tr>
      <tr>
        <td>Employee Date of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="dob" type="date" id="dob" placeholder="Date of Birth"/>
          </div></td>
      </tr>
      <tr>
        <td>Place of Birth </td>
        <td><label> </label>
            <div align="left">
              <input name="pob" type="text" id="pob" placeholder="Place of Birth" />
          </div></td>
      </tr>
      <tr>
        <td>Form-B/CNIC</td>
        <td><label> </label>
            <div align="left">
              <input name="cnic" type="text" id="cnic" placeholder="B Form/CNIC No"/>
          </div></td>
      </tr>
      <tr>
        <td><label for="gender">Gender:</label></td>
        <td><div align="left">
            <select name="gender" id="gender" placeholder="Gender">
              <option value ="">Please Select</option>
              <option value ="male">Male</option>
              <option value ="female" selected>Female</option>
              <option>others</option>
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
                <input type="number" name="fid" id="fid" placeholder="ID No" required/>
				<span class="error">* </span>
            </div></td>
          <div id="div5" style="color:#FF0000 "></div>
          <div id="div6" style="color:#FF0000 "> </div>
        </tr>
        <tr>
          <td>Father Name </td>
          <td><label> </label>
              <div align="left">
                <input name="fname" type="text" id="First Number" placeholder="First Name" required  />
				<span class="error">* </span>
            </div></td>
        </tr>
        <tr>
          <td>Father Last Name </td>
          <td><label> </label>
              <div align="left">
                <input name="flname" type="text" id="flname" placeholder="Last Number" />
            </div></td>
        </tr>
		<tr>
          <td>Father Mobile Number </td>
          <td><label> </label>
              <div align="left">
                <input name="fmobno" type="number" id="fmobno" placeholder="Mobile Number" />
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
              <input type="number" name="phn" id="phn" placeholder="Phone Number"/>
          </div></td>
        <div id="div" style="color:#FF0000 "></div>
        <div id="div2" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td>Mobile Number </td>
        <td><label> </label>
            <div align="left">
              <input name="mobno" type="number" id="mobno" placeholder="Mobile No" />
          </div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><label> </label>
            <div align="left">
              <input name="email" type="text" id="email" placeholder="Email Address" />
          </div></td>
      </tr>
      <tr>
        <td height="37">Address</td>
        <td><label> </label>
            <div align="left">
              <textarea name="address" id="address" placeholder="Address"></textarea>
          </div></td>
      </tr>
    </table></td>
    <td><table width="389" height="98" border="0" align="center">
      <tr>
        <td width="145">Registration Date </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="date" name="regdate" id="regdate" placeholder="Registration Date" required />
			  <span class="error">* </span>
          </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	  <tr>
        <td width="145">Qualification </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="text" name="qual" id="qual" placeholder="Qualification" />
          </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
      <tr>
        <td> Department </td>
        <td><label> </label>
            <div align="left">
              <select name="dep" id="dep" placeholder="Requested Department" required>
                <option value ="">Please Select</option>
                <option value="computer">computer</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Islamiyat">Islamiyat</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Biology">Biology</option>
                <option value="English">English</option>
                <option value="Urdu">Urdu</option>
                <option value="Psychology">Psychology</option>
              </select>
			  <span class="error">* </span>
          </div></td>
      </tr>
      <td width="145">Designation </td>
        <td width="234"><label> </label>
            <div align="left">
              <input type="text" name="desgn" id="desgn" placeholder="Designation" required/>
			  <span class="error">* </span>
          </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
	   <tr>
        <td height="24">Experience </td>
        <td><label> </label>
            <div align="left">
              <textarea name="exp" id="exp" placeholder="Experience"></textarea>
          </div></td>
      </tr>
	     <td width="145">Salary</td>
           <td width="234"><label> </label>
            <div align="left">
              <input type="number" name="salary" id="salary" placeholder="salary" required />
			  <span class="error">* </span>
          </div></td>
        <div id="div3" style="color:#FF0000 "></div>
        <div id="div4" style="color:#FF0000 "> </div>
      </tr>
    </table></td>
  </tr>
</table>
<p align="center"><span class="style4">Misc Info</span></p>
<table width="389" height="57" border="0" align="center">
  <tr>
    <td width="184">Reg No </td>
    <td width="195"><label> </label>
        <div align="left">
          <input name="regno" type="number" id="regno" placeholder="Reg No" required />
		  <span class="error">* </span>
      </div></td>
  </tr>
</table>
<p align="left" class="style2">&nbsp;	</p>
<table width="402" height="45" border="0" align="center">
  <tr>
    <td height="41"><label> </label>

      <div align="center">
        <input name="submit" type="submit" id="submit" class="button" value="Register" />
       <input name="cancel" type="reset" id="cancel" class = "button" value="Cancel" />
      </div></td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
<h3>&nbsp;</h3>
</body>
</html>
