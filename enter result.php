<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
<style type="text/css">
<!--
.result {	background: #FFFFFF;

	border: 5px  #0000FF solid; 
	padding: 30px;
	padding-top: 10px;
	font-size: 25px;
}
.style7 {font-size: 20px}
.style8 {font-size: 22px}
-->
</style>
<link href="CSS/Style.css" rel="stylesheet" type="text/css">
</head>
<body>
<p><img src="Images/newhomepicture.png" alt="Image Not Found" width="1508" height="300"></p>


<p>
    <?php include 'Header.php'; ?> 


<?php
$rollno=$sname=$slname=$dob=$cnic=$gender=$fname=$flname=$cls=" ";


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
	
<?php


if(isset($_POST['submit2'])) {

	if ( $_POST['rollno']== "")
	{
	echo "Enter roll no";
	}
     else if ( $_POST['term']== "")
	 {
	 echo "Enter Term ";
	 }
	 else{


$connect=mysqli_connect("localhost","root","","LMS");

if(  $_POST['s2']!="" && $_POST['t2']!="" && $_POST['o2']!=""  )
{

 $asql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s2]', '$_POST[t2]', '$_POST[o2]' )
";
			
			
			if (!mysqli_query($connect,$asql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
			if(  $_POST['s1']!="" && $_POST['t1']!="" && $_POST['o1']!=""  )
{

 $sql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s1]', '$_POST[t1]', '$_POST[o1]' )
";
			
			
			if (!mysqli_query($connect,$sql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "Successfully Register";
			
			}}
						if(  $_POST['s3']!="" && $_POST['t3']!="" && $_POST['o3']!=""  )
{

 $bsql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s3]', '$_POST[t3]', '$_POST[o3]' )
";
			
			
			if (!mysqli_query($connect,$bsql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s4']!="" && $_POST['t4']!="" && $_POST['o4']!=""  )
{

 $csql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s4]', '$_POST[t4]', '$_POST[o4]' )
";
			
			
			if (!mysqli_query($connect,$csql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s5']!="" && $_POST['t5']!="" && $_POST['o5']!=""  )
{

 $isql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s5]', '$_POST[t5]', '$_POST[o5]' )
";
			
			
			if (!mysqli_query($connect,$isql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}						if(  $_POST['s6']!="" && $_POST['t6']!="" && $_POST['o6']!=""  )
{

 $dsql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s6]', '$_POST[t6]', '$_POST[o6]' )
";
			
			
			if (!mysqli_query($connect,$dsql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s7']!="" && $_POST['t7']!="" && $_POST['o7']!=""  )
{

 $esql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s7]', '$_POST[t7]', '$_POST[o7]' )
";
			
			
			if (!mysqli_query($connect,$esql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s8']!="" && $_POST['t8']!="" && $_POST['o8']!=""  )
{

 $fsql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s8]', '$_POST[t8]', '$_POST[o8]' )
";
			
			
			if (!mysqli_query($connect,$fsql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s9']!="" && $_POST['t9']!="" && $_POST['o9']!=""  )
{

 $gsql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s9]', '$_POST[t9]', '$_POST[o9]' )
";
			
			
			if (!mysqli_query($connect,$gsql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}
									if(  $_POST['s10']!="" && $_POST['t10']!="" && $_POST['o10']!=""  )
{

 $hsql="INSERT INTO result (sid,term,sub , total ,obtain) 
			VALUES ('$_POST[rollno]','$_POST[term]', '$_POST[s10]', '$_POST[t10]', '$_POST[o10]' )
";
			
			
			if (!mysqli_query($connect,$hsql))
			  {
			  die('Error: ' . mysqli_error($connect));
			  }
			else {
			echo "";
			
			}}

			}}

			
			

?>
<div id = "result" class="result"  style="float: center;">
<center>
    <h3 align="center" class="style1"><u>RESULT FORM </u></h3>
	<form  method="post" >
    <table width="540" height="34" border="0" align="center">
      <tr>
        <td width="242" height="30"><span class="style8">Enter Student RollNo </span></td>
        <td width="288"><label> </label>
            <div align="left">
              <input name="rollno"  type="text" id="rollno"   value="<?php echo $rollno;?> " required/>
              <input name="btnsearch" type="submit" id="btnsearch"  class="button" value="Search">
          </div></td>
      </tr>
    </table>
    <table width="971" height="187" align="center">
      <tr>
        <td width="500"><table width="489" height="169" border="0" align="center">
          <tr>
            <td width="222"><span class="style8">Student First Name </span></td>
            <td width="257"><label> </label>
                  <div align="left">
                    <input name="sname" type="text" id="sname" size="35" value="<?php echo $sname?>" />
                </div></td>
            <div id="loginerr" style="color:#FF0000 "></div>
            <div id="display" style="color:#FF0000 "> </div>
          </tr>
          <tr>
            <td><span class="style8">Student Last Name </span></td>
            <td><label> </label>
                  <div align="left">
                    <input name="slname" type="text" id="slname" size="35" value="<?php echo $slname?>"/>
                </div></td>
          </tr>
          <tr>
            <td><span class="style8">Student Date of Birth </span></td>
            <td><label> </label>
                  <div align="left">
                    <input name="dob" type="date" id="dob" size="35" value="<?php echo $dob;?>"/>
                </div></td>
          </tr>
          <tr>
            <td height="27"><span class="style8">
              <label for="gender">Gender:</label>
            </span></td>
            <td><div align="left">
              <input name="gender" type="text" id="gender" size="35" value="<?php echo $gender;?>"/>
            </div></td>
          </tr>
        </table>
        <td width="459"><table width="454" height="169" border="0" align="center">
          <tr>
            <td width="200"><span class="style8">Father Name </span></td>
            <td width="258"><label> </label>
                  <div align="left">
                  <div align="left">
                    <input name="fname" type="text" id="fname" size="35" value="<?php echo $fname;?>" />
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
            <td><span class="style8">Requested Class </span></td>
            <td><label> </label>
                  <input type="text" name="cls" id="cls"  value="<?php echo $cls;?>" size="35"/></td>
          </tr>
          <tr>
            <td height="27"><span class="style8">Form-B/CNIC</span></td>
            <td><label> </label>
                  <div align="left">
                    <input name="cnic" type="text" id="cnic" size="35" value="<?php echo $cnic;?>"/>
                </div></td>
          </tr>
        </table>
      </tr>
    </table>
        <form method="post">
      <td ><table  border="0" align="center">
        <tr>
          <td  ><label for="Term"><span class="style7">Select Term :</span></label></td>
          <td  ><div align="left">
            <select name="term" id="term" placeholder="term">
              <option value ="" selected>Please Select</option>
              <option value ="mid term">Mid Term</option>
              <option value ="final term">Final Term </option>
            </select>
          </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s1" type="text" id="s1" size="25" placeholder="Enter subject name "  />
                    <input name="t1" type="number" id="t1" size="15" placeholder="total marks"  />
                    <input name="o1" type="text" id="o1" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s2" type="text" id="s2" size="25" placeholder="Enter subject name "  />
                    <input name="t2" type="number" id="t2" size="15" placeholder="total marks"  />
                    <input name="o2" type="text" id="o2" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s3" type="text" id="s3" size="25" placeholder="Enter subject name "  />
                    <input name="t3" type="number" id="t3" size="15" placeholder="total marks"  />
                    <input name="o3" type="text" id="o3" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s4" type="text" id="s4" size="25" placeholder="Enter subject name "  />
                    <input name="t4" type="number" id="t4" size="15" placeholder="total marks"  />
                    <input name="o4" type="text" id="o4" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s5" type="text" id="s5" size="25" placeholder="Enter subject name "  />
                    <input name="t5" type="number" id="t5" size="15" placeholder="total marks"  />
                    <input name="o5" type="text" id="o5" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s6" type="text" id="s6" size="25" placeholder="Enter subject name "  />
                    <input name="t6" type="number" id="t6" size="15" placeholder="total marks"  />
                    <input name="o6" type="text" id="o6" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s7" type="text" id="s7" size="25" placeholder="Enter subject name "  />
                    <input name="t7" type="number" id="t7" size="15" placeholder="total marks"  />
                    <input name="o7" type="text" id="o7" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s8" type="text" id="s8" size="25" placeholder="Enter subject name "  />
                    <input name="t8" type="number" id="t8" size="15" placeholder="total marks"  />
                    <input name="o8" type="text" id="o8" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s9" type="text" id="s9" size="25" placeholder="Enter subject name "  />
                    <input name="t9" type="number" id="t9" size="15" placeholder="total marks"  />
                    <input name="o9" type="text" id="o9" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
        <tr>
          <td><span >Enter Subject </span></td>
          <td><label> </label>
                <div align="left">
                  <p>
                    <input name="s10" type="text" id="s10" size="25" placeholder="Enter subject name "  />
                    <input name="t10" type="number" id="t10" size="15" placeholder="total marks"  />
                    <input name="o10" type="text" id="o10" size="15" placeholder="obtain marks "  />
                  </p>
                </div></td>
        </tr>
      </table>
          <div align="center" class="button">
            <input name="submit2" type="submit" id="submit2" class="button" value="Enter" />
            <input name="cancel" type="submit" id="cancel" class="button" value="Cancel" />
          </div>
    </form>
    </form>
  </center>
</div>
</body>
</html>

