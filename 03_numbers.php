<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b).'</br>';
echo ($a - $b) . '</br>';
echo ($a * $b) . '</br>';
echo ($a / $b) . '</br>';
echo ($a % $b) . '</br>';

// Assignment with math operators
echo 'break'.'</br>';
$a += $b;
echo $a.'</br>';
// Increment operator

$a = 5;
echo $a ++.'</br>';
echo ++$a.'</br>';

// Decrement operator
echo $a --.'</br>';
echo --$a.'</br>';
// Number checking functions

is_float($c); // true
is_double($c); // true
is_int(5); //  true
is_numeric("3.45"); // true
is_numeric("string"); // false


// Conversion
$strNumber = '12.34';
$number = (int)$strNumber;
var_dump($number);
echo '<br>';

// Number functions
echo 'abs(-15) '.abs(-15).'</br>';
echo 'pow(2,3) ' . pow(2,3) . '</br>';
echo 'max(2,3,5,6) ' .max(2,3,5,6) . '</br>';
echo 'min(2,3,4) ' . min(2,3,4) . '</br>';
echo 'round(2.6) ' . round(2.6) . '</br>';
echo 'floor(2.6) ' . floor(2.6) . '</br>';
echo 'ceil(2.6) ' . ceil(2.6) . '</br>';

// Formatting numbers
echo '</br>';

$number = 123456789.1234;

// https://www.php.net/manual/en/ref.math.php
