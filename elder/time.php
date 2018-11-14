<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time</title>
</head>
<body>
<?php
$one = strtotime('1926-08-17 07:02:40');//开始时间 时间戳
$tow = strtotime('Y-M-D H:M:S');//结束时间 时间戳
$cle = $tow - $one; //得出时间戳差值
$d = floor($cle/3600/24);
$h = floor(($cle%(3600*24))/3600);  //%取余
$m = floor(($cle%(3600*24))%3600/60);
$s = floor(($cle%(3600*24))%60);
echo "$m"
?>
</body>
</html>