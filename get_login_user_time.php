<?php

include ("include.php");

$che = $_POST['Name'];
//$chap_name = $_POST['Chap_Name'];
$tableName = "student_details";
$conn = mysql_connect($server,$user,$pass);
$database = mysql_select_db($database,$conn);
$che = ereg_replace("[^A-Za-z0-9 ]", "", $che);
// This line converts name to uppercase so the login is not case sensitive.
$che = strtoupper ($che);
// This is the SQL statement that will get your settings from the Database.
$result = mysql_query("SELECT * FROM $tableName WHERE user_name = '$che'");     
     $lastaccessed = mysql_result($result,0,"last_accessed");
     //$Progress = mysql_result($result,0,"progress");   
//print "&slideno=$slide_no";

print "&logintime=$lastaccessed";

?>

?>
