<?php
	include 'Config.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
					$result = $con->query("SELECT * FROM `switch` WHERE 1;");
					$row= $result->fetch_assoc();
					$s1=$row["pump"];
					$s2=$row["security_ss"];
					$json=json_encode($row,true);}

												
	echo ("$json")					
	//echo ("|");
	//echo ("$s1");
	//echo ("|");
	//echo ("$s2");
	//echo ("|");	?>
