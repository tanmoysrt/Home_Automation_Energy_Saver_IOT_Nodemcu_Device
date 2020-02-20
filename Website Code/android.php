<?php
include "Config.php";
$valueset = 0;
	if(isset($_GET["row"]))
	{
		$row = $_GET["row"];
		$valueset++;
	}
	if(isset($_GET["data"]))
	{
		$data = $_GET["data"];
		$valueset++;
	}
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
	if($valueset == 2)
	{
		$sql1 = "UPDATE `switch` SET `$row`='$data' WHERE 1";
		if (!mysqli_query($con,$sql1))
		{
					die('Error: ' . mysqli_error());
					$mainerror = "Error In addition";
					$message="dberror";
		}					
		else
		{
			$message="OK";
		}
	}
	else {$message="dberror";}
}
echo ("$message");
?>
