<?php

//declare variables
$var1 = 10;
$var2 = "10";
$var3 = 100;
$var4 = 25;


echo var_dump($var1);
echo var_dump($var2);


if ($var1 === $var2) {
    echo "yes, they are equal";
}else {
    echo "no, it is not equal";
}

echo "<br>";

if ($var3 != $var4) {
    echo "yes, they are not equal";
}else {
    echo "no, they are equal";
}

echo "<br>";