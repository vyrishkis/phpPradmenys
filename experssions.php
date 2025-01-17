<?php
 
 echo"velcometo php\n";

 $dd = 2;

 echo"labas".$dd."\n";

 $isHungry = false;

 echo $isHungry ? "yes" : "no"; // Šis kodas patikrina, ar kintamasis $isHungry yra tiesa (true).
                                // Jei $isHungry yra true, spausdinama "yes". Jei false, spausdinama "no".



 
 echo "\n";



 echo "Practical data types\n";

 echo str_repeat("\n",3);



 $isSudent = "";
 var_dump($isSudent,true,$isSudent === true);

 // === trigubas lygu tikrina ar duomenų tipas yra tas pats
 // == dvigubas jei imanoma kintamojo turini interpretuos 
 // kaip loginį (skaičiuose kas ne nulis tas true)
 // var_dump yra PHP funkcija, naudojama kintamojo turiniui išvesti.
 // Ji pateikia išsamią informaciją apie kintamąjį, įskaitant:
 //Duomenų tipą (pvz., string, int, array).
 //  Reikšmę.
 // Ilgį, jei kintamasis yra tekstas arba masyvas.


 $scores =[30, (int)"90,6"]; //galima castinti arba liepti stringa interpretuoti kaip

 var_dump($scores);


$total = $scores[0] + $scores[1]; //sudėdamas saraše integer kintamaji su string
//php bando interpretuoti kas turima omenyje ir autoatiškai antra stringa verčia integeriu.
//apvalina i mažaja pusę.

 echo $scores[1] . "\n";

 echo "Atsakymas bus $total \n";

 var_dump($total,$scores[1]);



 

// IF satmentai

echo "\n IF IF IF \n";


$x = 1;

if ($x > 5){
    echo "x yra aukščiau už 5 \n";
} else echo "x yra mažiau už 5\n";


// WHILE loopas

echo"\n \n \n


