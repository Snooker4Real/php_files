<?php

$var = (int)readline("Entrez un entier : ");

while($var !== 1){
    if ($var%2 == 0){
        $var = $var/2;
    } else {
        $var = ($var*3)+1;
    }
    echo $var + "\n";

}
?>