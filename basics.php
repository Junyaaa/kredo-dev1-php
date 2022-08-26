<?php
    echo "Mary", " Stim", " Chel";
    echo "<br>";
    // concatination
    echo "Mary" . " Stim" . " and Chel";
    echo "<br>";

 
    $first_name = "John";
    $last_name = "Smith";
    $age = 21;

    echo "My name $first_name $last_name and my age is $age";
    echo "<br>";
    echo "My name is " . $first_name . " " . $last_name  . " " . "and my age is " . $age . ".";
    echo "$first_name", "$last_name", "$age";
    echo "<br>";


    // string
    $first_name = "Garry";
    $country = "Japan";
  


    // Ingeger
    $score = 25;
    $age =  21;
    $invoice_no = 0001;
    

    // Boolean
    $is_paid = TRUE; //in this case  it is true
    $is_open = FALSE; // in this case. it false because the value is false

    if ($is_paid) {
        echo "The balance is settled";
    }else { 
        echo "The balance is not yet paid";
    }
    echo "<br>";

    // float/double
    $total_amount = 524.5;
    $total_bill = 100.23;


    echo var_dump($country);
    echo "<br>";
    echo var_dump($total_amount) . "This variable $total_amount is of type";



?>