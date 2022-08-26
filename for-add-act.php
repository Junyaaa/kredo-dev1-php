<?php

$var = 1;
$var_end = 30;
$sum = 0;


for(; $var < $var_end; $var++){
    if($var % 2 == 0){
        if($var != 28){
            echo "$var + ";
        }else {
            echo "$var = ";
        }   
        $sum += $var; 
    }
    
}

echo "$sum";