<!-- <?php
    include 'age-discount-function.php';
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kredo cafe</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

    <div class="container my-5">
        <div class="mx-auto w-50 mt-4 mb-2 text-center">
            <form action="" method="post">
                <label for="people" class="form-label">How many people are going to eat?</label>
                <input type="number" name="num_people" id="num_people" class="form-control-lg border-primary text-center" min="1" required>
                <input type="submit" name="btn_submit" class="btn btn-success  text-white form-control mt-3 w-50" value="SUBMIT">
            </form>
        </div>
        <?php
            if(isset($_POST['btn_submit'])) {
                $num_people = $_POST['num_people'];
        ?>
                <div class="w-50 text-center mx-auto">
                    <form action="" method="post">
                        <label class="display-4" for="">What are thier age?</label>
                        <?php
                            for ($i=0; $i < $num_people; $i++) {
                        ?>
                                <input type="number" name="age[]" id="" class="form-control text-center mb-2" min="1" placeholder="Enter age" required>
                        <?php
                            }
                        ?>
                        <input type="submit" name="btn_save" value="SAVE" class="form-control mb-2 btn btn-primary">
                    </form>
                </div>
        <?php
            }elseif(isset($_POST['btn_save'])){
                $age_array = $_POST['age'];
                $age_counter = count($age_array);
        ?>

            <div class="w-50 mx-auto">
                <table class="table table-bordered border-dark">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Age</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($age_array as $age) {
                                $discounted_price[] = checkPrice($age);
                        ?>
                            <tr>
                                <td class="text-center"><?php echo $age; ?></td>
                                <td class="text-end"><?php echo checkPrice($age) ?></td>
                            </tr>

                        <?php       
                            }
                        ?>
                        <tr class="bg-danger text-white border-danger">
                            <td>Total Price</td>
                            <td class="text-end fw-bold"><?php echo total($discounted_price) ?></td>
                        </tr>
                        <tr class="bg-primary text-white border-primary">
                            <td>Number of People</td>
                            <td class="text-end fw-bold"><?php echo $age_counter;?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
             
        <?php
            }
        ?>
    </div>
   
   
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>