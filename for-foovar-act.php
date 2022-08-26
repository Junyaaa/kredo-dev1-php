<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foo Bar Activity</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    
<form action="" method="post">
    <div class="card mt-5 mx-auto w-25">
        <div class="card-header bg-black text-white">
            <h5 class="text-center">Foo Bar</h5>
        </div>
        <div class="card-body">
            <input type="number" name="s_num" id="s_num" placeholder="Start Number" class="form-control mb-2orm-control mb-2">
            <input type="number" name="e_num" id="e_num" placeholder="Ending Number" class="form-control mb-2">
            <input type="submit" name="btn_submit" value="Submit" class="form-control mb-2 text-center bg-info text-white">
        </div>
        <div class="card-footer bg-success text-white">

            <?php
        
            if(isset($_POST['btn_submit'])) {

                function getNumber(){
                    $startNum = $_POST['s_num'];
                    $endNum = $_POST['e_num'];
    
                    dislayNumber($startNum, $endNum);
                }
    
                function dislayNumber($startNum, $endNum){
                    for($startNum; $startNum <= $endNum; $startNum++){
                        if($startNum % 3 == 0 && $startNum % 5 == 0){
                            echo "FOOBAR";
                        }elseif($startNum % 5 == 0){
                            echo "BAR";
                        }elseif($startNum % 3 == 0){
                            echo "FOO";
                        }else {
                            echo "$startNum";
                        }
    
                    }
                }

                getNumber();
            }

            

            ?>

        </div>
    </div>
</form>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>
</html>