<?php
// Constants in php Language
define('COURSE_TITLE', "7Learn PHP Course");
echo COURSE_TITLE . '<br><br><br>';

// Important Predefined Constants In PHP
// http://php.net/manual/en/reserved.constants.php
// magic Constants (started with __ : __FILE__)
echo 'php version : ' . PHP_VERSION . '<br>';
echo 'php OS : ' . PHP_OS . '<br>';
echo 'max Integer Number : ' . PHP_INT_MAX . '<br>';
echo "salam" . PHP_EOL; // (\r\n in windows , \n in linux)
echo "salam"; // (\r\n in windows , \n in linux)
echo "salam" . PHP_EOL . '<br>' . '<br>'; // (\r\n in windows , \n in linux)
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';
echo __FUNCTION__ . '<br>';

