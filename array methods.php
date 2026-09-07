<?php

$arr=['Kousik', 'Kavya'];

$names=implode(' ', $arr);
// converts the array into string

// $val=array_find($arr, fn($str)=>$str==='Kavya');
// echo $val;
// introduced in php 8.4, second arg is callable i.e. function;

$search="KaVya";
$found = in_array(strtolower($search), array_map('strtolower', $arr));
//in_array checks whether a value exists in the array or not.
if($found){
    echo "Found ". strtolower($search).PHP_EOL;
} 

$lowerarr=implode(', ', array_map('strtolower', $arr));

echo $lowerarr .PHP_EOL;

//array_map maps a method to all the values of an array

$arr[]='Amma';
echo implode(' ', $arr).PHP_EOL;
// adding new elements with array[]=value;

array_splice($arr, 3, 0, "Nanna");
echo implode(' ', $arr).PHP_EOL;
echo str_repeat('-',20).PHP_EOL;


$ordered_family=array_reverse($arr);
echo implode(', ', $ordered_family).PHP_EOL;

array_shift($ordered_family);

echo implode(' ',$ordered_family);
?>