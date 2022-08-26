<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increasing or Decreasing</title>
</head>
<body>
    
    <form action="" method="post">
        <h3>Increasing or Decreasing</h3>
        <input type="number" name="first_number" placeholder="Enter First Number"><br>
        <input type="number" name="second_number" placeholder="Enter Second Number"><br>
        <input type="number" name="third_number" placeholder="Enter Third Number">
        <br><br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>     
          
</body>
</html>

<?php

if(isset($_POST['btn_submit'])){

    $num1 = $_POST['first_number'];
    $num2 = $_POST['second_number'];
    $num3 = $_POST['third_number'];

    if($num1 < $num2 && $num2< $num3){
        echo "Increasing";
    }elseif($num1 > $num2 && $num2 > $num3){
        echo "Decreasing";
    }else{
        echo "Neither";
    }
}



?>