<?php

$var1 = 22;
$var2 = 15;
$var3 = 10;

if($var1 > $var2 &&  $var1 > $var3){
    echo "The maximum number is " . $var1;
} elseif($var2 > $var1 &&  $var2 > $var3){
    echo "The maximum number is " . $var2;
} elseif($var3 > $var1 &&  $var3 > $var2) {
    echo "The maximum number is " . $var3;
}

?>