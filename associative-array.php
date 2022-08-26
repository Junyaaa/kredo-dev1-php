<?php

    // associative array
    $language = ["en" => "English", "jp" => "Japanese", "es" => "Spanish", "cn" => "Canada"];
    print_r($language);

    //array language construct
    $days = array("mon" => "Monday", "tue" => "Tuesday", "wed" => "Wednesday", "thu" => "Thursday", "fri" => "Friday");
    echo "<br>";
    echo "<br>";
    // count($days);
    print_r($days);
    echo "<br>";
    echo "<br>";
    

    echo $days["mon"];
    echo "<br>";
    echo $days["tue"];
    echo "<br>";

    foreach ($days as $named_keys => $values){
        echo "<br>";
        echo "The days named keys are " . $named_keys . " = " . $values . "<br>";

    }

    echo "<br>";
    echo "<br>";

    $person = ["name" => "John Doe", "age" => 30, "address" => "USA, Florida"];

    foreach ($person as $key => $value) {
        echo "The person details are " . $key . " = " . $value . "<br>";
    }

    echo "<br>";

    $books = [];

    //add values
    $books["title"] = "Harry Potter";
    $books["author"] = "J.K. Rowling";
    $books["price"] = 31.2;
    
    echo "Book details<br>";

    foreach ($books as $key => $value) {
        echo "$key" . " : " . $value . "<br>"; 
    }

    

?>