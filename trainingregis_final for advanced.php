<?php
include ("include.php");
$che = $_POST['uName'];


$tableName = "advance_ta";


// Connects to the database.
mysql_connect($server,$user,$pass);
mysql_select_db("$database");
$query = "SELECT * FROM $tableName WHERE chap_name ='Module5' AND user_name ='$che' AND training_name ='Level 2 - Advanced'";
$result = mysql_query($query);
$numR = mysql_num_rows($result);
	if ($numR == 1) { 
	print "&status=ok";
	}
	else {
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module5')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module6')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module7')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module8')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module9')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module10')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module11')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module12')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module13')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module14')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module15')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module16')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module17')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module18')");
mysql_query("INSERT INTO advance_ta (user_name,training_name,chap_name) VALUES ('$che','Level 2 - Advanced','Module19')");

	}

?>