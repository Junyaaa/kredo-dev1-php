<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Rectangle</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" autocomplete="off" class="w-25 mx-auto mt-5">
        <h3 class="text-center fw-light">Calculate Area of a rectangle</h3>
        <label for="length" >Enter Length</label>
        <input type="number" name="length" id="length" class="form-control mb-2">
        <label for="width">Enter Width</label>
        <input type="number" name="width" id="width" class="form-control mb-2">
        <input type="submit" name="btn_calculate" value="Calculate" class="bg-info  form-control mb-2">

        <?php

            if (isset($_POST['btn_calculate'])) {
                //input
                $len = $_POST['length'];
                $wid = $_POST['width'];

                $result_of_area = twoNumber($len, $wid);
                echo displayResult($result_of_area);
            }

            // process
            function twoNumber($len, $wid) {
                $calculate_result = $len * $wid;
                return  $calculate_result;

            }

            // display output
            function displayResult($result_of_area){
                return "The rectangle is: " .  $result_of_area;
            }
            




        ?>

    </form>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

</body>
</html>