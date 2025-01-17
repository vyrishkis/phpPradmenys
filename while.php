<?php

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;



while($attempts < $maxAttempts){
    echo"Guess the password -- ";
    $guess = trim(fgets(STDIN)); 
//fgets priema inputa iš komandinės ir panaikina tarpus
//trim nukerpa tarpus
    $attempts++; // plius vienas

    if($guess == $secret){
        echo "Teisingai -- Tu atrakinai lobi \n \n";
        break;
    } elseif ($attempts == $maxAttempts) {
        echo "Baigėsi bandymai -- Lobis užrakintas \n \n";
    } else  {"Blogai -- Tau liko bandymų:" . ($maxAttempts - $attempts) . "n n";}

}