<?php
$names=['kousik','Karthikeya','Prasad','Narayana'];
$ages=[23,24,25,26];

$name_ages=[];

for ($i=0;$i<min(count($names),count($ages));$i++){
    $name_ages[$names[$i]]=$ages[$i];
    echo('Key : '.$names[$i]. PHP_EOL."Value : ".$ages[$i].PHP_EOL);
    echo(str_repeat('-',12).PHP_EOL);
}
?>