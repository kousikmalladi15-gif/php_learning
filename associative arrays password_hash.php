<?php
$student=[
    "name"=>"Kousik Malladi",
    "email"=>"kkmalladi450@gmail.com",
    "age"=>21,
    "password"=>"Kousik@15",
    "course"=>'M.Sc'
];

$hashed_password=password_hash($student["password"], PASSWORD_DEFAULT);

if (password_verify($student["password"], $hashed_password)){
    echo "The passwords match, authenticating to the database" ;
}
else{
    echo "The passwords do not match, please enter the correct username/email or password" ;
}

?>