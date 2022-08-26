<?php

    $prefecture = array(
        "Hokaido" => array("Hokaido" => "Sapporo"),
        "Chubu" =>  array("Isikawa"=> "kanazawa", "Shizuoka" => "Fuji", "Toyama" => "Toyama", "Aichi" => "Nagoya"),
        "Chogoku" =>  array("Yamaguchi"=> "Shimonoseki", "Tottori"=>"Tottori")
    );



foreach ($prefecture as $regions => $region) {
   
    echo "<br><b># $regions</b>/<br>";
    echo "<table border = '1'>";
        echo "<tr>";
            echo "<td>Prefecture</td>";
            echo "<td>City</td>";
        echo "</tr>";

        foreach ($region as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td></tr>";
        }
    echo "</table>";
}

?>
