<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="card text-dark text-center bg-light mx-auto mt-3" style="max-width: 20rem;">
        <div class="card-header mx-auto">
            <form action="" method="post">
                <div class="row m-auto my-1">
                    <div class="col">
                        <label for="numcountry">Nunber of Countries Visited?</label>
                        <input type="number" name="numcountry" id="numcountry" class="form-control mt-2">
                    </div>
                </div>
                <input type="submit" name= "submit" value="Submit" class="btn-danger mt-2"></input>
            </form>
        </div>

        <?php

        if(isset($_POST['submit'])){

            $numcountry = $_POST['numcountry'];
            //count = 0

            echo "<div class='card card-body bg-success text-white mx-auto mt-4 mb-4' style='max-width: 20rem;'>";
            echo "<form method = 'post'>";
            //THE TASK OF THE LOOP IS FOR THE CREATION OF THE TEXTBOX IN FORM #2
            for ($count = 0; $count< $numcountry; $count++) {
                //countries[] <-- IS INFORMING PHP THAT THE INPUT IS AN ARRAY
                echo "<input type='text' class='form-control mx-auto my-1' name='countries[]'>";
            }

            echo "<input type='submit' value='Save' class='btn btn-danger mt-2' name='save'>";
            echo "</form>";
            echo "</div>";
        }

        //ISSET FOR FORM #2
        if(isset($_POST['save'])){
            $countries = $_POST['countries'];
            echo "<div class='card card-body bg-success text-white mx-auto mt-4 mb-4' style='max-width: 20rem;'>";
            echo "<h6>You have been to:</h6> <br>";
            foreach($countries as $country){
                echo $country . "<br>";
            }
        }
    
    ?>

    </div>

    
    


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>