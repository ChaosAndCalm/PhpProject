<?php

// What is a variable

// Variable types
/*
String 
Integer
Float
Boolean 
Null
Array
Object
Resource
*/
// Declare variables

$name = 'Zura';
$age = 28;
$isMale = true;
$height = 1.85;
$salary = null;



// Print the variables. Explain what is concatenation

echo $name . '</br>';
echo $age . '</br>';
echo $isMale . '</br>';
echo $height . '</br>';
echo $salary . '</br>';

// Print types of the variables

echo gettype($name).'</br>';
echo gettype($age).'</br>';
echo gettype($isMale).'</br>';
echo gettype($height).'</br>';
echo gettype($salary).'</br>';


// Print the whole variable

var_dump($name, $age, $isMale, $height, $salary);

// Change the value of the variable
$name = 'Keti';
// Print type of the variable
echo '</br>';


// Variable checking functions

echo is_string($name); // true -> 1 false -> blank screen
echo is_int($age); // true
echo is_float($height); // true
echo is_bool($isMale); // true

// Check if variable is defined

echo '</br>';
$bool1 = isset($name); // true
$bool2 = isset($address); // false

// Constants
define('PI',3.14);
echo PI.'</br>';

// Using PHP built-in constants

echo SORT_ASC.'</br>';

// sorting functions in php 

$a = ["Sanjay","Aman","Rehman","Karan"];   



