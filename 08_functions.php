<?php

// Function which prints "Hello I am Zura"

// function hello(){
//     echo 'Hello I am Zura'.'</br>';
// }




// // Function with argument

// function hello ($name){
//      return "Hello I am $name".'<br>';
// }

// echo hello("Zara");
// echo hello("Brad");
// // Create sum of two functions

// function sum($num1,$num2){
//     return $num1 + $num2;
// }

// echo sum(2,3).'<br>';

// Create function to sum all numbers using ...$nums

// function sum(...$nums){

//     $sum = 0;
//     echo count($nums).'<br>';

//     for($i =0; $i < count($nums); $i++){
//         $sum += $nums[$i];
//     }

//     return $sum;
    
// }

// echo sum(1,2,3,4,5,6) . '</br>';
// Arrow functions

function sum(...$nums){
    return array_reduce($nums, fn ($carry, $n) => $carry + $n); 
}
    
echo sum(1,2,3,4,5,6);
?>