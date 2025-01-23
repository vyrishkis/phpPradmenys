<?php

$basket = [
    "Apple" => 3,
    "Bannana" => 4
];

$total = 0;

foreach($basket as $item => $quantity){
    echo "$item == $quantity\n";
   
    $total += $quantity; // $total = $total + $quantity; sutrumpintas atitikmuo
}

echo "Total items: $total\n";