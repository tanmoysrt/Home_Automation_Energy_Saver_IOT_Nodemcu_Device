<?php
include "Config.php";
$valueset = 0;
$verified_key="b4f00cc3dafa41003fcf18ad9de1cbcc6ddcbf4862928cf4179f2550e905630c";
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
	if(isset($_GET["status"]))
	{
		$status = $_GET["status"];
		$valueset++;
	}
	if(isset($_GET["key"]))
	{
		$key = $_GET["key"];
		$valueset++;
	}

	if($valueset ==2)
	{   $eneterd_key=hash(sha256,$key);
        if($eneterd_key==$verified_key){
		$sql1 = "UPDATE `switch` SET `doorlockstatus`=$status WHERE 1";
		if (!mysqli_query($con,$sql1))
		{
					die('Error: ' . mysqli_error($con));
					$mainerror = "Error In addition";
					$message="dberror";
		}					
		else
		{
			$message="OK";
        }	
    }else {$message="Entered Key Is Incorrect";}

	}
else {$message="Internal Code Error";}
}
echo ("$message");
?>