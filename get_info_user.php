<?php
include ("include.php");
$che = $_POST['uName'];

//$che	= $HTTP_POST_VARS['uName'];
/*
$server = "192.168.0.89";

$user = "";  

$pass = "";

$database = "registration";
*/
$tableName = "t_group";




$conn = mysql_connect($server,$user,$pass);


$database = mysql_select_db($database,$conn);


$che = ereg_replace("[^A-Za-z0-9 ]", "", $che); 


// This line converts name to uppercase so the login is not case sensitive.
$che = strtoupper ($che);


//$result = mysql_query("SELECT * FROM $tableName WHERE userName ='$che'");
$result = mysql_query("SELECT * FROM $tableName");


$total_rows = mysql_num_rows($result);


$counter = 0;

while($row = mysql_fetch_array($result))

{

$Trainingname = $row["group_name"];


$trainingtime  = $row["training_time"];

$recommendedtime  = $row["recommended_time"];


//print "&user_data$counter=$chap_name|$Exercise|$lastaccessed|$gr|$pr";

print "&user_data$counter=$Trainingname|$trainingtime|$recommendedtime";


$counter++;

}

print "&total=$total_rows";




/*
if($query){

 print "&writing=Ok"; 
}
*/

?>
