<?php
include ("include.php");
$che = $_POST['uName'];

$tableName = "basic_ta";


// Connects to the database.
mysql_connect($server,$user,$pass);
mysql_select_db("$database");
$query = "SELECT * FROM $tableName WHERE chap_name ='Module1' AND user_name ='$che' AND training_name ='Level 1 - Basic'";
$result = mysql_query($query);
$numR = mysql_num_rows($result);
	if ($numR == 1) { 
	print "&status=ok";
	}
	else {
mysql_query("INSERT INTO basic_ta (user_name,training_name,chap_name) VALUES ('$che','Level 1 - Basic','Module1')");
mysql_query("INSERT INTO basic_ta (user_name,training_name,chap_name) VALUES ('$che','Level 1 - Basic','Module2')");
mysql_query("INSERT INTO basic_ta (user_name,training_name,chap_name) VALUES ('$che','Level 1 - Basic','Module3')");
mysql_query("INSERT INTO basic_ta (user_name,training_name,chap_name) VALUES ('$che','Level 1 - Basic','Module4')");

	}

?>