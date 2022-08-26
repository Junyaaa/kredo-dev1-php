<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ends, With</title>
</head>
<body>

    <form action="" method="post">

        <input type="number" name="num1" id="num1">
        <input type="number" name="num2" id="num2">
        <input type="submit" name="btn_submit" value="Submit">

    </form>

    <?php

    if(isset($_POST['btn_submit'])) {

        function getNumber() {
            $number1 = $_POST['num1'];
            $number2 = $_POST['num2'];
            
            displayTheNumber($number1,$number2);
        }

        function displayTheNumber($number1,$number2){
            for($number1; $number1 <= $number2; $number1++){
                echo "$number1 ";
            }
        }

        getNumber();

    }
    
    
    
    ?>







    
</body>
</html>

