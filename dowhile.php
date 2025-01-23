<?php

do {
    $diceRoll = rand(1,6); //rand funkcija sugeneruoja vienax skaiciu uzxduotame intervale.
    echo "you rolled a --- $diceRoll\n";
    if (6 == $diceRoll){
        echo "Sveikinimai tu laimėjai \n";
        break;

    }
    echo" Ridenk iš naujo --  y/n";
    //loop body
    $rollAgain = trim(fgets(STDIN)); //trim isxkerpa tarpo simbolius. fget paprasho ivesties...
    
} while($rollAgain == "y");