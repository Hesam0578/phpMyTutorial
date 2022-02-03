<?php
// Single quotation (') vs double quotation (")
$num = 27;
echo 'Hello " \' \r\n User $num<br>';
echo "Hello ' \" \r\n User $num {$num}<br><br><br><br>";


// echo text and variables
$website = 'www.7Learn.com';
$brTag = '<br>';

echo 'url : ';
echo 'www.7Learn.com';
echo '<br>';

echo $brTag . $brTag;

echo 'url : www.7Learn.com <br>';

echo 'url : ' . 'www.7Learn.com' . $brTag;

echo "url : {$website}" . $brTag . $brTag . $brTag . $brTag;
