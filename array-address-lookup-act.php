<?php
    $address = ["Mark" => "New York", "Chris" => "London", "Mary" => "Paris", "Kenzo" => "Japan", "Toyoe" => "China"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Green Page</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <div class="card mx-auto w-25">
        <div class="card-header text-white bg-success">
            <h3>Welcome to the Green Pages</h3>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <select name="person_place" class="form-select my-2">
                    <option value="" hidden>Select Name</option>
                <?php
                    foreach($address as $key => $value) {
                        echo "<option value='$key lives in $value'>$key</option>";
                    }
                ?>
                </select>
                <button type="submit" name="btn_submit" class="btn btn-success my-2 float-right">Submit</button>
            </form>
        </div>

            <?php
            if (isset($_POST['btn_submit'])) {
                $person_place = $_POST['person_place'];

                echo "<div class='card-footer'>
                        <p class='h4 text-center'>$person_place</p>
                      </div>";
            }
            ?>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>