<?php

$size = "S";

switch ($size){
    case "S";
    case "M";
    echo "Small size or Medium size\n";
    case "L";
    case "XL";
    echo "Large size or Extra Large size\n";
default:
    echo "Unknown size]\n";

}


echo "------------------\n";

if ("M" == $size || "S" == $size) {
    echo "Small or MEdium size\n";
} elseif ("L" == $size || "XL" == $size){
    echo "Large size or Extra Large size\n";
} else {
    echo "Unknown size\n";
}