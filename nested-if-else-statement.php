<?php

$year = 2096;

if ($year % 4 == 0) {
    if($year % 100 == 0) {
        if ( $year % 400 == 0) {
            echo "It is a leap year";
        }else {
            echo "Not a leap year";
        }       
    }else {
        echo "Not a leap year";
    }
}else {
    echo "It is not a leap year";
}


?>

