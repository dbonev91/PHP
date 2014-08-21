<?php
$integer=15;
var_dump($integer);
$string='hallo';
echo gettype($string).'<br />';
$double=1.34;
var_dump($double);
$array=array(0 => 0, 1 => 1, 2 => 2);
echo gettype($array).'<br />';
$object=(object)[2,34];
echo gettype($object).'<br />';
?>