<?php

$host='localhost';
$user='root';
$db_name='user_db';
$password='';
$charset='utf8mb4';

$dsn="mysql:host=$host;dbname=$db_name;charset=$charset";

$pdo=new PDO($dsn, $user, $password,
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
]);

$email=trim(readline("enter the email to check with the database : "));
$mobile_no=trim(readline("enter the mobile no. of the users (only 10 digits) : "));


$statement=$pdo->prepare('SELECT * FROM users WHERE email = ? AND mobile_no = ?');

$statement->execute([$email, $mobile_no]);

$user=$statement->fetch();

if ($user){
    echo("the user has been found, displaying balance : ");
    $balance=$user['balance'];
    echo($balance.PHP_EOL);

    echo("since balance is less than 1000, adding in remaining amount, to make it 1000");

    $diff=1000-$user['balance'];
    $new_balance=$balance+$diff;

    $statement=$pdo->prepare('UPDATE users SET balance = ? WHERE email= ?');
    $statement->execute([$new_balance, $email]);

}

else{
    echo("the user has not been found, check the details or the user is missing");
}
?>