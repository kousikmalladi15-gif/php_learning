<?php

$usernames=["Kousik"];
$passwords=["Kousik@15"];

// function remove_user(string $username, string $password){
//     if ($username=='Kousik' && $password == 'Kousik@15'){
//         $reply= "you have been authorised, removing the user";
//     }
//     else{
//         $reply= "You are not authorised, as username or password is incorrect, please try again";
//     }
//     return $reply;
// }

function remove_user(string $username,string $password){
    global $usernames, $passwords ;
    if (in_array($username, $usernames)){
        if (array_search($username, $usernames)===array_search($password, $passwords)){
            $reply= "You have been authorised, removing the user";
        }
        else{
            $reply= "You are not authorised, as username or password is incorrect, please try again";
        }
    }
    else{
        $reply= "User not found, check the username and password and try again later";
    }
    return $reply;
}


?>