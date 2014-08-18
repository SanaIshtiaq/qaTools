<?php
include ("include.php");
$che = $_POST['Name'];
$chapterID = $_POST['Chap_Name'];
$Slide= $_POST['slideno'];
$Pro= $_POST['sliderper'];

$che = ereg_replace("[^A-Za-z0-9 ]", "", $che);



$tableName = "basic_ta";
$conn = mysql_connect($server,$user,$pass);
$databaseselect = mysql_select_db($database,$conn);



mysql_query("UPDATE $tableName SET last_accessed=NOW() , slide_no ='$Slide', progress= '$Pro' WHERE user_name ='$che' AND chap_name ='$chapterID' AND training_name ='Level 1 - Basic'");
	

?>