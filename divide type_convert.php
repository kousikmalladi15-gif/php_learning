<?php
$total_savings=readline("Please enter your total savings : ");
$monthly_spending=readline("Enter your monthly spending: ");

$total_savings=(float)$total_savings;
$monthly_spending=(float)$monthly_spending;

echo("You will survive for ".($total_savings/$monthly_spending) ." with $total_savings of total savings and $monthly_spending of monthly spending");

?>