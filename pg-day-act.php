<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days of the week</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
    <form action="#" method="post" autocomplete="off" class="w-25 mx-auto">
        <h2>Days activity2</h2>
        <input type="submit" name="btn_day" value="Monday" class="bg-primary text-white form-control mb-2">
        <input type="submit" name="btn_day" value="Tuesday" class="bg-secondary text-white form-control mb-2">
        <input type="submit" name="btn_day" value="Wednesday" class="bg-success text-white form-control mb-2">
        <input type="submit" name="btn_day" value="Thursday" class="bg-warning text-white form-control mb-2">
        <input type="submit" name="btn_day" value="Friday" class="bg-info text-white form-control mb-2">


        <?php
            if(isset($_POST['btn_day'])) {
                $day = $_POST['btn_day'];
                

                echo $day;
        
            }
        ?>

    </form>
    

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    

</body>
</html>