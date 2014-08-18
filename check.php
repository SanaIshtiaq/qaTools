<?php
/*
$server = "192.168.0.91";
$user = "";
$pass = "";
$database = "registration";
*/

include ("include.php");

$Name = $_POST['Name'];
//$Name = strtoupper ($Name);

$newpass=$_POST['pass'];

//$categ=$_POST['list'];

// This is just a simple way to take out unwanted characters.

//$TrainN = ereg_replace("[^A-Za-z0-9 ]", "", $TrainN); 

// This line converts name to uppercase so the login is not case sensitive.
$Name = ereg_replace("[^A-Za-z0-9 ]", "", $Name);

//$TrainN = $_POST['Tr'];

//$TrainN = strtoupper ($TrainN);

// This connects to your database.
mysql_connect($server,$user,$pass);
mysql_select_db("$database");

$query = "SELECT * FROM Student_details WHERE User_name = '$Name' AND password ='$newpass'";
$result = mysql_query($query);

/* This just gets the number of rows in the Query - It's just a check to see if the Name exists - If not it prints out an error statement. */
$numR = mysql_num_rows($result);

// If the number of rows is not equal to one then it prints out an error statement - Name not in Database.
    
	if ($numR == 1) { 

	//session_register("Name"); // Craete session username.
	//header("location:main.php"); // Re-direct to main.php

	//exit;
	print "&status=Success Login Complete&CheckLog=1";
print "&status=&CheckLog=1";

	//print "&remark=Success Login Complete";
	}
	else {
	print "&status=You Have Not Authorized To View Our Training!"; 
	}







//$query1 = "INSERT INTO userinfo (UserName,Trainingname,lastaccessed) VALUES ('$Name','$TrainN',NOW())";
//$result1 = mysql_query($query1);


// This prints out the success command to a text field in the movie if it's successful.


    

?>