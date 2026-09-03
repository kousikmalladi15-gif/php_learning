<?php
$age=rand(1,100);
$guess_count=0;
$not_guess=true;
while ($not_guess){
    $guess_count=$guess_count+1;
    $guessed_age=readline("Enter the guessed age : ");
    $guessed_age=(int)$guessed_age;
    if ($guessed_age>$age){
        echo("You have guessed a higher value, guess lower".PHP_EOL);
    }
    elseif($guessed_age<$age){
        echo("You have guessed a lower value, guess higher".PHP_EOL);
    }
    elseif($guessed_age===$age){
        echo("You have guessed the correct value, congratulations".PHP_EOL);
        $not_guess = false;
        echo("It took you $guess_count guesses".PHP_EOL);
    }
}
?>