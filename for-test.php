<?php


    // create table
    echo "<table border=1>";
        // outer for-loop: this for-loop will take careof the table row
        for($row = 1; $row <= 10; $row++) {
            echo "<tr>";
                // Innner for-loop: this will take care of the table columns
                for ($col=1; $col <= 10; $col++){
                    $product = $row * $col;
                    echo "<td>$product</td>";
                }
            echo "</tr>" ;
        }

        
?>