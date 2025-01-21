<?php

do {
    $diceRoll = rand(1,6);
    echo "you rolled a --- $diceRoll\n";
    if (6 == $diceRoll){
        echo "Sveikinimai tu laimėjai \n";
        break;

    }
    echo" Ridenk iš naujo --  y/n";
    //loop body
    $rollAgain = trim(fgets(STDIN));
    
} while($rollAgain == "y");