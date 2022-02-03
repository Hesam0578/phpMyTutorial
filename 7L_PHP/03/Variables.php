<?php
// int number;  // explicit deceleration  (Faster)  java, C , ...
// number;      // implicit deceleration  (Simpler) php, python

// $x , $name , $u_code , $userName , $var5 , $u23a     // Correct Variable Names
// $7Learn , $my-name , myName , $52 , $user.name       // Incorrect Variable Names

// assign Value to Variables
$variableName = 'variableValue';

// String (Texts)
$stringVar = "7Learn.com";

// Integer numbers
$intVar = 7;

// Float numbers
$floatVar = 7.53;

// true Or false
$boolVar0 = false;
$boolVar1 = true;

// multiple values
$arrayVar = array(7, 5, 3, 1, 55);

// null (empty) value !
$nullVar = null;

// pointer Variable
$pointer = & $intVar;

include '../common/common.php';
printVar($stringVar);
printVar($intVar);
printVar($floatVar);
printVar($boolVar1);
printVar($arrayVar);
printVar($nullVar);
printVar($pointer);

echo 'unset($stringVar):';
unset($stringVar);
printVar($stringVar);

echo 'unset($arrayVar[2]):';
unset($arrayVar[2]);
printVar($arrayVar);

echo 'unset($arrayVar):';
unset($arrayVar);
printVar($arrayVar);

echo gettype($boolVar1).'<br>';
echo gettype($nullVar).'<br>';
echo gettype($intVar).'<br>';
echo gettype($stringVar).'<br>';

settype($intVar,'string');
echo gettype($intVar).'<br>';
printVar($intVar);

// check types
echo 'is_bool($boolVar1) : '.is_bool($boolVar1).'<br>';
echo 'is_bool($floatVar) : '.is_bool($floatVar).'<br>';
//is_string();
//is_int();
//is_double(); is_float();
//is_array();
//is_null();empty($stringVar);

