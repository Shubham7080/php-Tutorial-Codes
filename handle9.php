<?php

$num1 = $_REQUEST['num1'];
$num2 = $_REQUEST['num2'];
$t1 = (float)($num1/$num2);
$t2 = (int)$t1*$num2;
$res = (int)$num1-$t2;
//$num = $num1-($num/$num2)*$num2=L&L;
printf("Remainder of %d",$res);

?>