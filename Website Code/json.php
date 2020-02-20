
<?php
	include 'Config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
				$result = $con->query("SELECT * FROM data_logger WHERE 1 and Updatedatetime = (select max(Updatedatetime) from data_logger where 1);");
				$row = $result->fetch_assoc();
				$s3=$row["Updatedatetime"];
				$s4=$row["level"];
				$s5=$row["count"];
				$s6=$row["entry"];
				$s7=$row["exitt"];
				$s8=$row["security_status"];
				$s9=$row["out_light"];
				$s10=$row["in_light"];
				$s11=$row["pump_status"];
$date = date_create($s3, timezone_open('MST'));
date_timezone_set($date, timezone_open('Asia/Kolkata'));
$join=new \stdClass();
$join->update=$date->format('H:i:s a d-m-Y');
$join->level=$s4;
$join->count=$s5;
$join->entry=$s6;
$join->exit=$s7;
$join->security_status=$s8;
$join->out_light=$s9;
$join->in_light=$s10;
$join->pump_status=$s11;
$data=json_encode($join);
echo $data;}
												
							?>
