<?php
	include 'Config.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
					$result = $con->query("SELECT * FROM `switch` WHERE 1;");
					$row= $result->fetch_assoc();
					$s1=$row["doorlockstatus"];
}

	echo ("$s1");
