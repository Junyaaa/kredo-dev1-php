<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Granding Activity</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <form action="" method="post">
        <div class="card mt-5 mx-auto w-25">

            <div class="card-header">
                <h5 class="text-center">Is Leap Year Or Not?</h5>
                <p class="text-center lead">Enter a year to check if it is a leap year.</p>
            </div>

            <div class="card-body">
                <input type="number" name="year" id="year" class="form-control my-1" placeholder="Enter A Year">
                <input type="submit" name="btn_check" value="Check" class="form-control btn btn-info my-3">
            </div>
            <div class="card-footer text-center">
            <?php
                if(isset($_POST['btn_check'])){

                    $year = $_POST['year'];
            
                    if ($year % 4 == 0) {
                        if($year % 100 == 0) {
                            if ( $year % 400 == 0) {
                                echo "It is a leap year";
                            }else {
                                echo "Not A Leap year";
                            }       
                        }else {
                            echo "Leap year";
                            }
                    }else {
                        echo "Not a leap year";
                    }
                }
            ?>

        </div>
        </div>
        

       

    </form>




       
    
</body>
</html>