<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circumference of a circle</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" autocomplete="off" class="w-25 mx-auto mt-5">
        <h3 class="text-center fw-light">Calculate Circumference of a circle</h3>
        <label for="radius" >Input Radius</label>
        <input type="number" name="radius" id="radius" class="form-control mb-2">
        <input type="submit" name="btn_calculate" value="Calculate" class="bg-info  form-control mb-2">

        <?php

        if (isset($_POST['btn_calculate'])) {

            function receivedInput() {
                $radi = $_POST['radius'];
        
                circum($radi);
            }

            function circum($radi){
                $cir = round(2 * pi() * $radi, 2);
                displayResult($cir);
            }

            function displayResult($cir) {
                    echo "The Circumference is " . $cir;

            }

            receivedInput();

        }




        ?>

    </form>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

</body>
</html>