<?php
$item_prices=["pappu"=>30,"koora"=>35,"chaaru"=>25, "perugu"=>20];

$accounts=[
    "username"=>'Kousik',
    "amount"=>1000,
    "discount_rate" => 10
];

echo("we have a list of items in the hotel, please view it and add in the quantity you need, and we have your deposit of ".$accounts["amount"].PHP_EOL);
echo('At the end of ordering, type in end');

$item_name='';
$quantity='';
$bill=0;
while ($quantity !=0 || empty($item_name)){
    try{
        $item_name=readline('Enter the name of the item : ');
        $quantity=readline('Enter the count of the items : ');
        $item_name=trim($item_name);
        $quantity=(int)$quantity;

        if($item_name=='end'){
            break;
        }
    }
    catch (Exception $E){
        echo("you might have entered different options : ".$E);
    }
    $bill+=$item_prices[$item_name]* $quantity;
    echo($bill.PHP_EOL);
    echo(str_repeat(' ', 26).PHP_EOL);
}

$accounts['amount']-=$bill;

echo('After all the transactions, the total bill was '. $bill.' And the account balance for you is '.$accounts['amount']);

?>
