<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" autocomplete="off" class="w-25 mx-auto mt-5">
        <h3 class="text-center fw-light">Avarage Activity</h3>
        <label for="first-number" >Enter First Number</label>
        <input type="number" name="first_number" id="first-number" class="form-control mb-2">
        <label for="second-number">Enter Second Number</label>
        <input type="number" name="second_number" id="second-number" class="form-control mb-2">
        <input type="submit" name="btn_calculate" value="Calculate" class="bg-info  form-control mb-2">

        <?php

        if (isset($_POST['btn_calculate'])) {

            function receivedInput() {
                // input - the data is coming from the form
                $num1 = $_POST['first_number'];
                $num2 = $_POST['second_number'];

                // call the computeMultiplication function
                computeMultiplication($num1, $num2);
            }

            //Process: do the calculation here
            function computeMultiplication($num1, $num2){
                $product = $num1 * $num2;
                displayResult($product);
            }

            // display
            function displayResult($product) {
                    echo "The product of two number is " .  $product;

            }

            receivedInput();

        }

            




        
        

            
            




        ?>

    </form>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

</body>
</html>