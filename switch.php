<?php

// $n1=readline("enter num1 : ");
// $n2=readline("enter num2 : ");
// $operator=trim(readline("enter the operator '+', '-' : "));

// switch($operator){
//     case '+':
//         echo(($n1+$n2));
//         break;
//     case'-':
//         if($n1>=$n2){
//             echo(($n1-$n2));
//             break;
//         }
//         else{
//             echo(($n2-$n1));
//             break;
//         }
// }


$operation=readline("Enter the operation to perform, 'create', 'read', 'update', 'delete' : ");

switch(trim(strtolower($operation))){
    case 'create':
        echo("PDO statement is going to create the database");
        break;
    case 'update':
        $ID=readline("Enter the id of the row to update : ");
        echo("PDO statement is going to update the value of database with ID $ID");
        break;
    case 'read':
        echo("PDO statement is going to retrieve the data from the database");
        break;
    case 'delete':
        $ID=readline("Enter the id of the row to delete : ");
        echo("PDO statement is going to delete the value of database with ID $ID");
        break;
}

?>