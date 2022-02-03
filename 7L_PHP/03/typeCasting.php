<?php
// Type Casting : تبدیل نوع متغیر ها
include '../common/common.php';
$a = 5;
$b = (string)$a;
$c = (bool)$a;
$d = (float)$a;
$e = (array)$a;

printVar($a);
echo '<br>';
printVar($b);
printVar($c);
printVar($d);
printVar($e);
