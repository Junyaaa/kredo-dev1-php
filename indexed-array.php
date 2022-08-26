<?php

    $numbers = [2,4,6,8,10];
    print_r($numbers);
    echo "<br>";
    echo "The total count of values in the array is " . count($numbers);
    echo "<br>";


    // short syntax
    $fruits1 = ["Apple", "Banana", "orange", "Watermelon"];
    $car = ["Mercedez", "Toyota", "Mitsubishi", "Lamborghini"];
    echo count($car);

    $drinks = []; //empty

    $drinks[0] = "Cola";
    $drinks[1] = "Soda";
    $drinks[2] = "OrangeJuice";

    print_r($drinks);
    echo "<br>";

    //language construct array
    $fruits2 = array("Apple", "Banana", "orange", "Watermelon");
    print_r($fruits2);
    echo "<br>";


    // display array values
    echo $fruits1[1];
    echo $fruits1[3];
    echo "<br>";
    echo "<br>";

    // display all values of cars array using the for-each loop
    foreach ($car as $value){
        echo "$value";
        echo "<br>";
    }

    foreach ($fruits1 as $values) {
        echo "$values";
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Indexed Array</title>
</head>
<body>
    <br>
    <form action="" method="post">
        <label for="countries">How many countries have you visited</label>
        <!-- 5 countries : country = [5] -->
        <input type="text" name="country[]" id="country">
        <input type="submit"  name="btn_country" value="Show Number Countries">
    </form>
    <?php
    
        if(isset($_POST['btn_country'])) {
            $countries_visited = $_POST['country'];
            for ($i=0; $i <= $countries_visited; $i++) {
                    echo "$i";
                    echo "<br>";
            }
        }
    
    ?>
     

    
</body>
</html>