<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is leap year?</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<form action="" method="post">
    <div class="card mt-5 mx-auto w-25">    
            <div class="card-header">
                <h5 class="text-center">Enter the grade of the student</h5>
            </div>
            <div class="card-body">
                <input type="number" name="grading" id="grading" class="form-control my-1" placeholder="Grade">
                <input type="submit" name="btn_submit" value="Submit" class="form-control btn btn-info my-3">
            </div>
            <div class="card-footer">
                <?php
                
                if(isset($_POST['btn_submit'])){

                    $grade = $_POST['grading'];
                
                
                    if($grade >= 90 && $grade <100){
                        echo "Grade: " . $grade;
                        echo "<br>";
                        echo "Execellent";
                    }elseif($grade >= 85 && $grade <89){
                        echo "Grade: " . $grade;
                        echo "<br>";
                        echo "Good";
                    }elseif($grade >= 80 && $grade <84){
                        echo "Grade: " . $grade;
                        echo "<br>";
                        echo "Fair";
                    }elseif($grade >= 75 && $grade <79){
                        echo "Grade: " . $grade;
                        echo "<br>";
                        echo "Poor";
                    }elseif($grade >= 60 && $grade <74){
                        echo "Grade: " . $grade;
                        echo "<br>";
                        echo "Fail";
                    }else{
                        echo "Grade: --" ;
                        echo "<br>";
                        echo "Invalid";
                    }
                }
                
                
                ?>

            </div>
    
        

    </div>
</form>   


       
    
</body>
</html>