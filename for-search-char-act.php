<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Character</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>

<form action="" method="post">
    <div class="card mt-5 mx-auto w-25">    
            <div class="card-header">
                <h5>Vowel　Counter</h5>
            </div>
            <div class="card-body">
                <input type="text" name="str" id="" class="form-control my-1" placeholder="Enter a word">
                <input type="submit" name="btn_check" value="Check" class="form-control btn btn-success my-1 w-100">
            </div>
            <div class="card-footer">
            <?php
                
                function SearchCharacter($str){
                    $count = 0;
    
                    for($i = 0; $i < strlen($str); $i++){
                            $char = substr($str, $i, 1);
                             if ($char == "a" || $char == "i" || $char == "u" || $char == "e" || $char == "o"){
                                $count++;
                              }        
                         }
                         echo "WORD; $str<br> Totale of Vowels: $count";
                     }
    
                    if(isset($_POST['btn_check'])){

                        $str = $_POST['str'];
    
                        SearchCharacter($str); 

                    }
                         
                    ?>


            </div>
    
                 
           
    
        

    </div>
</form>   


       
    
</body>


    

</html>