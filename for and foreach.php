<?php

$names=['Padmavathi', 'Kavya','Kousik'];

foreach ($names as $name){
    echo("Malladi $name".PHP_EOL);
}
echo(str_repeat('-',20).PHP_EOL);

for ($i=0; $i<3; $i++){
    echo("Malladi $names[$i]".PHP_EOL);
}

?>