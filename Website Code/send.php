<?php
include "Config.php";
$valueset = 0;
date_default_timezone_set("Asia/Kolkata");
$date=date("Y-d-m H:i:s");
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
	if(isset($_GET["d1"]))
	{
		$level = $_GET["d1"];
		$valueset++;
	}
	if(isset($_GET["d2"]))
	{
		$count = $_GET["d2"];
		$valueset++;
	}
	if(isset($_GET["d3"]))
	{
		$entry = $_GET["d3"];
		$valueset++;
	}
	if(isset($_GET["d4"]))
	{
		$exit = $_GET["d4"];
		$valueset++;
	}
		if(isset($_GET["d5"]))
	{
		$securitystatus = $_GET["d5"];
		$valueset++;
	}
		if(isset($_GET["d6"]))
	{
		$outlight = $_GET["d6"];
		$valueset++;
	}
		if(isset($_GET["d7"]))
	{
		$inlight = $_GET["d7"];
		$valueset++;
	}
		if(isset($_GET["d8"]))
	{
		$pumpstatus = $_GET["d8"];
		$valueset++;
	}
	if($valueset == 8)
	{
		$sql1 = "INSERT INTO `data_logger`(`level`, `count`, `entry`, `exitt`, `security_status`, `out_light`, `in_light`, `pump_status`) VALUES ($level,$count,$entry,$exit,$securitystatus,$outlight,$inlight,$pumpstatus);";
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