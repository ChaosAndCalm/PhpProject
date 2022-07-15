<?php

$age = 20;
$salary = 300000;
/*
// Sample if

if($age === 20){
    echo '1'.'<br>';
}

// Without circle braces

if($age === 20) echo "1".'<br>';

// Sample if-else

if($age > 20){
    echo '1'.'<br>';
}else{
    echo '2'.'<br>';
}
*/

// Difference between == and ===

$age == 20;  // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false


// if AND
if($age >20 && $salary == 300000){
    echo 'Do something';
}

// if OR

if($age > 20 || $salary == 300000){
    echo 'Do something'.'<br>';
}

// Ternary if

echo ($age < 22) ? 'Young'.'<br>' : 'Old';

// Short ternary

$myAge = $age ?: '18';

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch

$userRole = 'trex';

switch($userRole){

    case 'admin':
        echo 'admin';
        break; 
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}