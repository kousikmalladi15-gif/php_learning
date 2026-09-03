<?php
$age=readline("Please enter your age numbers (no decimals) : ");
$name=readline("Please enter your name : ");

$age=(int)$age;
$name=(string)$name;

function age($age, $name){
    if ((int)$age and (string)$name){
        echo("$name you are $age years old");
    }
    else{
        echo("Invalid data types for the files");
    }
}
age($age, $name)
?>