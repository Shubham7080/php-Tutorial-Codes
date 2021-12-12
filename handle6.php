<?php

$len = $_REQUEST['len'];
$br = $_REQUEST['br'];
$area = $len*$br;
$pr = 2*($len+$br);
echo "Area of rectangle is: ".$area." M <br>";
echo "Perimeter of rectangle is: ".$pr." M <br>";
?>