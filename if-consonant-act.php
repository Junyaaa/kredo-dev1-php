<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consonant or Vowel</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<form action="" method="post">
    <div class="card mt-5 mx-auto w-25">    
            <div class="card-header">
                <h5 class="text-center">Consonant or Vowel</h5>
            </div>
            <div class="card-body">
                <input type="text" name="alphabet" id="alphabet" class="form-control my-1" placeholder="Enter a letter">
                <input type="submit" name="btn_submit" value="Submit" class="form-control btn btn-info my-3">
            </div>
            <div class="card-footer">
                <?php
                
                if(isset($_POST['btn_submit'])){

                    
                    $var= $_POST['alphabet'];
                    $var = strtolower($var);
                    $var_strlen = strlen($var);

                   if (is_numeric($var)){
                       echo "Error. Not a character";
                   }elseif ($var_strlen > 1){
                       echo "Not a single character.";
                   }elseif ($var_strlen < 1){
                        echo "No character.";
                   }elseif ($var == a || $var == i || $var == e || $var == u || $var == o) {
                       echo "Vowel";
                   }else {
                       echo "Consonant";
                   }
                    
                }
                
                
                ?>

            </div>
    
        

    </div>
</form>   


       
    
</body>
</html>