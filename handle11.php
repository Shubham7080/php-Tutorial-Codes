<?php
$hn = $_REQUEST['hn'];
$eng = $_REQUEST['eng'];
$mth = $_REQUEST['mth'];
$ss = $_REQUEST['ss'];
$cs = $_REQUEST['cs'];

$res = ($hn+$eng+$mth+$ss+$cs);
$per = ($res*100)/500;



echo "Hindi Marks ".$hn."<br>";
echo "English Marks ".$eng."<br>";
echo "Math Marks ".$mth."<br>";
echo "SS Marks ".$ss."<br>";
echo "CS Marks ".$cs."<br>";
echo "CS Marks ".$cs."<br><br>";
echo "Total Marks ".$res."<br><br>";

echo "Total Percentage is: ".$per."%";
?>