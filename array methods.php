<?php

$arrayh=[1,5,2];
echo(count($arrayh).PHP_EOL);
array_shift($arrayh);
//array_shift(array)
echo(implode(', ',$arrayh).PHP_EOL);
//implode(str_in_between, array)
//array_unshift(array, values)
array_unshift($arrayh, 1,5);
echo(implode(", ",$arrayh).PHP_EOL);
?>