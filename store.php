<?php

$store_name="value store by elite stores".PHP_EOL;
$currency='₹';
$tax_rate=0.10;
$global_coupon=0.05;

$total_bill=0;

$cart=[
    "mouse"=>[
        "price"=>23,
        "quantity"=>5,
        "coupon"=>0.07
    ],

    "keyboard"=>[
        "price"=>30,
        "quantity"=>12,
        "coupon"=>0.09
    ],

    "monitor"=>[
        "price"=>25,
        "quantity"=>9,
        "coupon"=>null
    ],

    "speaker"=>[
        "price"=>18,
        "quantity"=>28,
    ],
];

echo "welcome to {$store_name}";

$exit=false;
while (!$exit){
    $item_name=trim(strtolower(readline("Enter the name of the item : ")));
    if (!array_key_exists($item_name, $cart)){
        echo "the entered item does not exist : ".PHP_EOL;
        echo "the available items are ".implode(', ',array_keys($cart)).PHP_EOL;
        $end_or_continue=trim(strtolower(readline("to end shopping, enter 'end' : ")));
        if ($end_or_continue==='end'){
            $exit=true;
            break;
        }
        continue;
    }
    $quantity=readline("Enter the quantity of the required item : ");
    if (!is_numeric($quantity)){
        echo "The quantity entered is not numeric, enter the right quantity. ";
        continue;
    }
    $quantity=(int)$quantity;
    if ($quantity<0){
        echo "negative quantities cannot be purchased, please try again with correct values : ".PHP_EOL;
        continue;
    }
    
    $coupon=$cart[$item_name]['coupon'] ?? 0;
    $item_stock=$cart[$item_name]['quantity'];
    $price=$cart[$item_name]['price'];

    if ($global_coupon > $coupon){
        $coupon=$global_coupon;
    }
    if ($item_stock<$quantity){
        echo("The quantity of the item is less than what is required i.e. {$item_stock}, would you like to add this quantity or not, enter yes or no : ".PHP_EOL);
        $yes_no=trim(strtolower(readline("enter yes or no, yes to get the existing quantity, no to skip the item")));
        if ($yes_no =='no'){
            continue;
        }
        else{
            $quantity=$item_stock;
            $cart[$item_name]['quantity']=0;
        }
    }
    $cart[$item_name]['quantity']-=$quantity;
    $initial_price= $quantity*$price;
    $total_bill+= $initial_price *((1-$coupon)* (1+ $tax_rate));
    
    $end_or_continue=trim(strtolower(readline("to end shopping, enter 'end' : ")));
    if ($end_or_continue==='end'){
        $exit=true;
    }
}

echo "\n========================================\n";
echo "📦 RECEIPT - " . strtoupper($store_name) . "\n";
echo "========================================\n";
echo "GRAND TOTAL DUE: {$currency}" . number_format($total_bill, 2) . "\n";
echo "Thank you for shopping with us!\n";
echo "========================================\n";

?>