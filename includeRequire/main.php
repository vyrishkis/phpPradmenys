<?php

require("data.php");

//require jei neranda failo meta erorra ir neexecutina kodo
// include stengsis toliau vykdyti koda padal galimybes.
//jei faile kritinė info naudojam require
//jei pareikalausim to paities failo du kartus
//jis bus du kartus paleistas ir gali buti klaidu
// tam naudojam //  include_once //  require_once


$DuClone = $Du+$Du;

echo "$DuClone\n";



