<?php

// declare variable
$num1 = 5;
$num2 = 3;

//call the function
addTwoNumber($num1, $num2);

//create a function
function addTwoNumber($num1, $num2) {
    echo $num1 + $num2;
}

echo "<br>";


$full_name  = "John Doe";
$email = "John@gmail.com";

//cll the function
personalDetails($full_name, $email);

//declare a function
function personalDetails($full_name, $email){
    echo "Your name is ". $full_name . "and your email is ". $email;
}


/*This is a function that does not have an argument*/

//create the function
function displayNameAndAge(){

    //declare variable
    $full_name1 = "Mary Monroe";
    $age = 23;

    echo "<br>";
    echo "The name is " . $full_name1 . " and the age is " . $age;
}

    //call the function
    displayNameAndAge();





?>