<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Activity</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" autocomplete="off" class="w-25 mx-auto mt-5">
        <h3 class="text-center fw-light">Arithmetic Activity</h3>
        <label for="first-number" >Enter First Number</label>
        <input type="number" name="first_number" id="first-number" class="form-control mb-2">
        <label for="second-number">Enter Second Number</label>
        <input type="number" name="second_number" id="second-number" class="form-control mb-2">
        <input type="submit" name="btn_calculate" value="Calculate" class="bg-info  form-control mb-2">

        <?php
            if(isset($_POST['btn_calculate'])) {
                $first_num = $_POST['first_number'];
                $second_num = $_POST['second_number'];
                $sum = $first_num + $second_num;
                $diffrence = $first_num - $second_num;
                $product = $first_num * $second_num;
                $qoutient =  $first_num / $second_num;

                echo  "The sum of the two number is " . $sum;
                echo "<br>";
                echo "The difference of the two number is " . $diffrence;
                echo "<br>";
                echo "The product of the two number is " . $product;
                echo "<br>";
                echo "The qoutient of the two number is " . $qoutient;
                echo "<br>";
                
                
        
            }
        ?>

    </form>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

</body>
</html>