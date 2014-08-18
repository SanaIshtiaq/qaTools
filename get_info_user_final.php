<?php

include ("include.php");

$che = $_POST['uName'];


$tableName = "basic_ta";



$conn = mysql_connect($server,$user,$pass);


$database = mysql_select_db($database,$conn);


$che = ereg_replace("[^A-Za-z0-9 ]", "", $che); 


// This line converts name to uppercase so the login is not case sensitive.
$che = strtoupper ($che);


$result = mysql_query("SELECT * FROM $tableName Where user_name = '$che' AND training_name ='Level 1 - Basic'");
//$result = mysql_query("SELECT * FROM $tableName Where user_name='ajay123'");


$total_rows = mysql_num_rows($result);


$counter = 0;

while($row = mysql_fetch_array($result))

{

$chap_name = $row["chap_name"];

$Exercise = $row["exercise"];

$lastaccessed = $row["last_accessed"];

$Slide = $row["slide_no"];

$gr = $row["grade"];

$pr = $row["progress"];


print "&user_data$counter=$chap_name|$Exercise|$lastaccessed|$gr|$pr";


$counter++;

}

print "&total=$total_rows";




/*
if($query){

 print "&writing=Ok"; 
}
*/

?>
