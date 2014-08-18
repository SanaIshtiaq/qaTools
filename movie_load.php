<?php

include ("include.php");
$che = $_POST['Name'];
$chap_name = $_POST['Chap_Name'];
$tableName = "basic_ta";
$conn = mysql_connect($server,$user,$pass);
$database = mysql_select_db($database,$conn);
$che = ereg_replace("[^A-Za-z0-9 ]", "", $che);
// This line converts name to uppercase so the login is not case sensitive.
$che = strtoupper ($che);
// This is the SQL statement that will get your settings from the Database.
$result = mysql_query("SELECT * FROM $tableName WHERE user_name = '$che' AND chap_name = '$chap_name'");     
     $slide_no = mysql_result($result,0,"slide_no");
     $Progress = mysql_result($result,0,"progress");   
print "&slideno=$slide_no";

print "&sliderper=$Progress";

?>