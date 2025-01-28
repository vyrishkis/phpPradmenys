<?php 

//mach panašus į swich bet be brake

$status = 200;

$message = match($status){
    200,300 => "Success",
    400,404,500 => "Error",
    default => "Nezinomas statusas"
};

//pas swich  "600" == 600; Php stringinį skaiciu traktuoja kaip tikra.
//pas mach mazhiau intrpretaciju "600" nelygu 600
//mach egzistuoja nuo 8versijos php

echo $message . "\n";