<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Time</title>
</head>
<body>
<?php
$one = strtotime('1926-08-17 07:02:40');//��ʼʱ�� ʱ���
$tow = strtotime('Y-M-D H:M:S');//����ʱ�� ʱ���
$cle = $tow - $one; //�ó�ʱ�����ֵ
$d = floor($cle/3600/24);
$h = floor(($cle%(3600*24))/3600);  //%ȡ��
$m = floor(($cle%(3600*24))%3600/60);
$s = floor(($cle%(3600*24))%60);
echo "$m"
?>
</body>
</html>