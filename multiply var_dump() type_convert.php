<?php
$age=readline("Please enter your age : ");

echo("your age is $age"." and type is : \n");
var_dump($age);


//since readline takes in a string always, convert it to float
//type conversion
$age=(float)$age;
var_dump($age);
?>