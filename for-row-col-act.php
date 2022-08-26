<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Row Col</title>
</head>
<body>

<form action="" method="post">
        <h3>Enter number of rows: </h3>
        <input type="number" name="rows" id="rows">
        <h3>Enter number of cols: </h3>
        <input type="number" name="cols" id="cols">
        <input type="submit" name="btn_submit" value="Genarate">
    </form>     
    
</body>

<?php


if(isset($_POST['btn_submit'])){
    function getNumber(){
        $row_num = $_POST['rows'];
        $col_num = $_POST['cols'];
        displayNumber($row_num, $col_num);
    }

    function displayNumber($row_num, $col_num){
        echo "<table border=1>";
        for($row=1; $row <= $row_num; $row++) {
            echo "<tr>";
                // Innner for-loop: this will take care of the table columns
                for ($col=1; $col <= $col_num; $col++){
                    
                    echo "<td> ". $row * $col . "</td>";
                }
            echo "</tr>";
        }
    echo "</table>";
   
    }
     getNumber();
}        
?>
</html>
