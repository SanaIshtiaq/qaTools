<?php
include ("include.php");
$che = $_POST['Name'];
/*
$chapterID = $_POST['Chap_Name'];
$Slide= $_POST['slideno'];
$Pro= $_POST['sliderper'];
*/
$che = ereg_replace("[^A-Za-z0-9 ]", "", $che);



$tableName = "student_details";
$conn = mysql_connect($server,$user,$pass);
$databaseselect = mysql_select_db($database,$conn);



mysql_query("UPDATE $tableName SET last_accessed=NOW()  WHERE user_name ='$che'");
	

?>