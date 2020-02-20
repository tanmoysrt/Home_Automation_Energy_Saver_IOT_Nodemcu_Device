
<?php
	include 'Config.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
    			$result1 = $con->query("SELECT * FROM `switch` WHERE 1;");
					$row1= $result1->fetch_assoc();
					$s11=$row1["pump"];
					$s22=$row1["security_ss"];
				$result = $con->query("SELECT * FROM data_logger WHERE 1 and Updatedatetime = (select max(Updatedatetime) from data_logger where 1);");
				$row = $result->fetch_assoc();
				$s0=$row["Updatedatetime"];
					$s1=$row["level"];
					$s2=$row["count"];
					$s3=$row["entry"];
					$s4=$row["exitt"];
					$s5=$row["security_status"];
					$s6=$row["out_light"];
					$s7=$row["in_light"];
					$s8=$row["pump_status"];

												
}												
		echo("|");
echo("$s0");		
	echo ("|");
	echo ("$s1");
	echo ("|");
	echo ("$s2");
	echo ("|");
	echo ("$s3");	
	echo ("|");
	echo ("$s4");		
	echo ("|");
	echo ("$s5");		
	echo ("|");
	echo ("$s6");		
	echo ("|");
	echo ("$s7");	
	echo ("|");
	echo ("$s8");
	echo ("|");
	?>
