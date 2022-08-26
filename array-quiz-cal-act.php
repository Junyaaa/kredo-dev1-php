<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz calculator</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <form action="" method="post">
        <div class="card mt-5 mx-auto" style="max-width: 20rem">
            <div class="card-header bg-dark text-white text-center">
                <h1 class="h3" >Quiz Average Calculator</h1>
            </div>
            <div class="card-body">
                <input type="number" name="num_quiz" class="form-control my-1" palceholder="Enter number of quizzes">
                <input type="submit" name="btn_generate" class="btn btn-danger form-control mt-3" value="Compute">
            </div>
        </div>
    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php

    if(isset($_POST['btn_generate'])) {
        $num_quiz = $_POST['num_quiz'];

        echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width: 20rem;'>";
        echo "<form method='post'>";
        for ($count =  1; $count <= $num_quiz; $count++) {
            echo "Quiz $count";
            echo "<input type ='number' class='form-control' name='grades[]'>";
        }
        echo "<input type='submit' value='average' class='btn btn-danger mt-2' name='compute'></input>";
        echo "</form>";
        echo "</div>";
    }


    if(isset($_POST['compute'])){
        $grades = $_POST['grades'];
        $num_quiz = count($grades);


        $sum = 0;
        $average = 0;

        for($count = 0; $count < $num_quiz; $count++){
            $sum = $sum + $grades[$count];
        }

        $average = $sum / $num_quiz;

        echo "<div class='card card-body bg-success text-white mx-auto mt-4' style='max-width: 20rem;'>";
        echo "Average is: " . $average;
        echo "</div>";
    }
?>