<?php
$date=getdate();
//print_r($date);
$newYear=mktime(0, 0, 0, 1, 1, 2015);
$secondsUntil=intval($newYear-$date[0]);
$minutesUntil=intval(($newYear-$date[0])/60);
$hoursUntil=intval(($newYear-$date[0])/60/60);
$daysUntil=intval(($newYear-$date[0])/60/60/24);
echo 'Current date and time: '.date('d-m-Y G:i:s', $date[0]).'<br />';
echo 'Hours until new year: '.$hoursUntil.'<br />';
echo 'Minutes until new year: '.$minutesUntil.'<br />';
echo 'Seconds until new year: '.$secondsUntil.'<br />';
echo 'Days:Hours:Minutes:Seconds '.$daysUntil.':'.$hoursUntil.':'.$minutesUntil.':'.$secondsUntil;
?>