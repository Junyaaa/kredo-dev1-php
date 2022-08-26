<?php

$var1 = 50;
$var2 = 20;

// call the function
echo addtwoNumber($var1, $var2);
echo "<br>";
echo subtracTwoNumber($var1, $var2);

// create a functoin
function addtwoNumber($var1, $var2){
    return $var1 + $var2;
}

function subtracTwoNumber($var1, $var2){
    return $var1 - $var2;
}

$name = "Stuart Devond";
$email = "stuart.devond@gmail.com";


//call the function
echo personalDetailes($name, $email);

// create the function
function personalDetailes($name, $email){
    echo "<br>";
    return "The name is $name and his email is $email";
}





?>