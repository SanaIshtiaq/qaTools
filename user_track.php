<?php

//include("include.php");
$che = $_POST['uName'];



$server = "192.168.0.89";

$user = "";  

$pass = "";

$database = "registration";

$tableName = "user_track";




$conn = mysql_connect($server,$user,$pass);


$database = mysql_select_db($database,$conn);


$che = ereg_replace("[^A-Za-z0-9 ]", "", $che); 


// This line converts name to uppercase so the login is not case sensitive.
$che = strtoupper ($che);


$result = mysql_query("SELECT * FROM $tableName Where User_name='$che'");


$total_rows = mysql_num_rows($result);


$counter = 0;

while($row = mysql_fetch_array($result))

{


//$Trainingid = $row["Trainingid"];


//$userName = $row["user_name"];

$Trainingname = $row["training_name"];

//$Trainintime = $row["Trainintime"];

//$Recommendedtime = $row["Recommendedtime"];

$Exercise = $row["exercise"];

$lastaccessed = $row["last_accessed"];

//$gr = $row["Grade"];

$pr = $row["progress"];

$institutename=$row["institute_name"];

$studentid=$row["Student_id"];


//print "&user_data$counter=$Trainingid|$userName|$Trainingname|$Trainintime|$Recommendedtime|$Exercise|$lastaccessed|$gr|$pr";

print "&user_data$counter=$Trainingname|$Exercise|$lastaccessed|$pr|$institutename|$studentid";


//print "&Trainingid$rows=$row[Trainingid]&userName$rows=$row[userName]&Trainingname$rows=$row[Trainingname]&lastaccessed$rows=$row[lastaccessed]&Slide$rows=$row[Slide]&";



//print "&test$rows=$row[id]&Name$rows=$row[Name]&lastaccessed$rows=$row[lastAccessed]&Slide$rows=$row[Slide]";

//print "&test=$row[lastAccessed]";

print "&slideno=$row[Slide]";
$counter++;

}

print "&total=$total_rows";




/*
if($query){

 print "&writing=Ok"; 
}
*/

//$result1 = mysql_query("SELECT Progress FROM mswordtr Where Progress='70'");

//$count = mysql_num_rows($result1);






//print "&cssnt=$count";

?>
