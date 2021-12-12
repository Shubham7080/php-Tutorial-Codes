<?php
$p = $_REQUEST['pa'];
$r = $_REQUEST['ra'];
$t = $_REQUEST['tm'];
$si  = ($p*$r*$t)/100;

echo "Total Simple Interest is :".$si;


?>