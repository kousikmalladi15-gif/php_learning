<?php

$students=[
    "RN26-001"=>[
        "Name"=>"Kousik",
        "Age"=>22,
        "password"=>"Kousik@15",
        "status"=>"Active"
    ],
    "RN26-002"=>[
        "Name"=>"Koushik",
        "Age"=>22,
        "password"=>"Kousik@15",
        "status"=>"Active"
    ],
    "RN26-003"=>[
        "Name"=>"Krishna",
        "Age"=>22,
        'password'=>"Kousik@15",
        "status"=>"Active"
    ]

];

$id_mail=readline("Enter the uID or email of the user : ");
$password=readline("Please enter the Password : ");

$user=$students[$id_mail] ?? null;

$auth=$user && ($user["password"]?? null)===$password;
if($auth){
    echo("User verified, authenticating to the admin page");
}
else{
    echo "username or password is incorrect, please check again";
}
?>