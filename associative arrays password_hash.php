<?php
$student=[
    "name"=>"Kousik Malladi",
    "email"=>"kkmalladi450@gmail.com",
    "age"=>21,
    "password"=>"Kousik@15",
    "course"=>'M.Sc'
];
echo("Mr. ".$student["name"].PHP_EOL);

$hashed_password=password_hash($student['password'], PASSWORD_DEFAULT);
echo($student['name']."'s" . " encrypted password is " . $hashed_password. PHP_EOL);


if (password_verify("Kousik@15", $hashed_password)){
    echo("the password's matched, redirecting to admin page");
}
else{
    echo("the password might be mismatched, we are not authorizing");
}
?>