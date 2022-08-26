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

        <input type="number" name="num" id="num">
        <input type="submit" name="btn_submit" value="Submit">

    </form>

    <?php

    if(isset($_POST['btn_submit'])) {

        function getNumber() {
            $number = $_POST['num'];
            return $number;
        }

        function displayTheNumber($number){
            for($i = 1; $i <= $number; $i++){
                echo "$i ";
            }
        }

        $number =  getNumber();
        displayTheNumber($number);

    }
    
    
    
    ?>







    
</body>
</html>

