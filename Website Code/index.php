<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nodemcu Data Updates</title>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#999;color:#444;background-color:#F7FDFA;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-top-width:1px;border-bottom-width:1px;border-color:#999;color:#fff;background-color:#26ADE4;}
.tg .tg-j1wq{background-color:#D2E4FC;font-size:20px;font-family:Arial, Helvetica, sans-serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-2z59{font-family:"Comic Sans MS", cursive, sans-serif !important;;background-color:#ffc702;border-color:#000000;text-align:left;vertical-align:top}
.tg .tg-fgo3{font-size:16px;font-family:Arial, Helvetica, sans-serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-5ajl{font-family:"Comic Sans MS", cursive, sans-serif !important;;border-color:#000000;text-align:left}
.tg .tg-5ajo{font-family:"Comic Sans MS", cursive, sans-serif !important;;border-color:#000000;background-color:#26ade4;text-align:left}
.tg .tg-8kgm{font-size:20px;font-family:Arial, Helvetica, sans-serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-y201{background-color:#D2E4FC;font-family:"Comic Sans MS", cursive, sans-serif !important;;border-color:#000000;text-align:left}
.tg .tg-okus{background-color:#ffc702;font-family:"Comic Sans MS", cursive, sans-serif !important;;border-color:#000000;text-align:left;vertical-align:top}
.tg .tg-gcyi{background-color:#ffc702;font-size:20px;font-family:Arial, Helvetica, sans-serif !important;;border-color:#000000;text-align:center;vertical-align:top}
.tg .tg-ypkh{font-size:20px;font-family:Arial, Helvetica, sans-serif !important;;background-color:#ffc702;border-color:#000000;text-align:center;vertical-align:top}
@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;}}</style></head>
<body>
<?php
	include 'Config.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" ) {
			$result1 = $con->query("SELECT * FROM `switch` WHERE 1;");
					$row1= $result1->fetch_assoc();
					$s1=$row1["pump"];
					$s2=$row1["security_ss"];
			$result2 = $con->query("SELECT * FROM data_logger WHERE 1 and Updatedatetime = (select max(Updatedatetime) from data_logger where 1);");
				$row2 = $result2->fetch_assoc();
					$s3=$row2["Updatedatetime"];
					$s4=$row2["level"];
					$s5=$row2["count"];
					$s6=$row2["entry"];
					$s7=$row2["exitt"];
					$s8=$row2["security_status"];
					$s9=$row2["out_light"];
					$s10=$row2["in_light"];
					$s11=$row2["pump_status"];}
?>
<div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 406px">
<colgroup>
<col style="width: 153px">
<col style="width: 180px">
</colgroup>
  <tr>
    <td class="tg-5ajo">Last Update date &amp; time --</td>
    <td class="tg-5ajo"><?php $date = date_create($s3, timezone_open('MST')); date_timezone_set($date, timezone_open('Asia/Kolkata'));echo $date->format('H:i:s a d/m/Y')?></td>
  </tr>
  <tr>
    <td class="tg-y201">Water Level --</td>
    <td class="tg-j1wq"><?php echo ("$s4"); echo ("%")?></td>
  </tr>
  <tr>
    <td class="tg-5ajl">PumpStatus --</td>
    <td class="tg-8kgm"><?php if($s11 == '0'){echo ("OFF");}else if($s11 == '1') {echo ("ON");}?></td>
  </tr>
  <tr>
    <td class="tg-y201">Count --</td>
    <td class="tg-j1wq"><?php echo ("$s5")?></td>
  </tr>
  <tr>
    <td class="tg-5ajl">Entry --</td>
    <td class="tg-8kgm"><?php echo ("$s6")?></td>
  </tr>
  <tr>
    <td class="tg-y201">Exit --</td>
    <td class="tg-j1wq"><?php echo ("$s7")?></td>
  </tr>
  <tr>
    <td class="tg-5ajl">Security Status --</td>
    <td class="tg-8kgm"><?php if($s8 == '0'){echo ("OFF");}else if($s8 == '1') {echo ("ON & SAFE");} else if($s8 == '2'){echo ("DANGER");}?></td>
  </tr>
  <tr>
    <td class="tg-y201">Outdoor Light --</td>
    <td class="tg-j1wq"><?php if($s9 == '0'){echo ("OFF");}else if($s9 == '1') {echo ("ON");}?></td>
  </tr>
  <tr>
    <td class="tg-5ajl">Indoor Light --</td>
    <td class="tg-8kgm"><?php if($s10 == '0'){echo ("OFF");}else if($s10 == '1') {echo ("ON");}?></td>
  </tr>
  <tr>
    <td class="tg-okus">Pump Switch --</td>
    <td class="tg-gcyi"><?php if($s1 == '0'){echo ("OFF");}else if($s1 == '1') {echo ("ON");}?></td>
  </tr>
  <tr>
    <td class="tg-2z59">Security Switch --</td>
    <td class="tg-ypkh"><?php if($s2 == '0'){echo ("OFF");}else if($s2 == '1') {echo ("ON");}?></td>
  </tr>
</table></div>
</body>


</html>