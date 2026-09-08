<?php

function binary_search(array $array, int $value){
    $low=0;
    $high=count($array)-1;
    while ($low<=$high){
        $mid=(int)floor(($low+$high)/2);
        if ($array[$mid]===$value){
            return $mid;
        }
        elseif($value <$array[$mid]){
            $high=$mid-1;
        }
        else{
            $low=$mid+1;
        }
    }
    return -1;
}
echo binary_search([1,2,3,4,5,7,8], 7);
?>