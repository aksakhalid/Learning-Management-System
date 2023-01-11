<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$conn=mysqli_connect("localhost","root","","LMS");
	} catch(Exception $ex){
	echo 'Error';
	}
	?>