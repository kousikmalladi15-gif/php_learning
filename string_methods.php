<?php

$name="kousik malladi";
$capital_name=ucwords(strtolower($name));
echo $capital_name.PHP_EOL;

//padding to add digits to a string;
$roll_no=25;
$padding_digit='0';
$padded_str=str_pad($roll_no, 5,$padding_digit, STR_PAD_LEFT );
echo $padded_str.PHP_EOL;

echo("your name has " .strlen(str_replace(' ','', $name)). " letters".PHP_EOL);
//strlen gets the length of string
//str_replace (to_replace, replace_with, string)

echo ucwords(substr($name, 7,7)).PHP_EOL;
//substr is useful for slicing;

echo strpos($name, 'sik').PHP_EOL;
//strpos $haystack, $needle finds the first char index that matches with the given needle 

$fruits="Apple-Banana-Mango";

$fruits=explode('-', $fruits);
//explode breaks a $string and adds individual pieces to an $array

foreach ($fruits as $fruit){
    echo $fruit . PHP_EOL;
}


?>