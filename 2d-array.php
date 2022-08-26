<?php

    $personnel = array(
        "personel1" => array("Name"=> "John Doe", "Email"=>"johndoe@gmail.com", "Address"=>"California, USA"),
        "personel2" => array("Name"=> "Manilyn Monroe", "Email"=>"Manily.monroe@gmail.com", "Address"=>"Ontario, Canada"),
        "personel3" => array("Name"=> "Stuart Miller", "Email"=>"stuartmilliere@gmail.com", "Address"=>"Sydney, Australia")
    );

    // output useing the foreach loop

    // $num = 0;
    // foreach ($personnel as $person) {
    //     $num++;
    //     echo "<br><b># $num</b>/<br>"
    //     foreach ($person as $key => $value) {
    //         echo "$key: $value<br>";
    //     }
    // }

    echo "<br>";

    print_r($personnel['personel1']);
    echo "<br>";
    echo $personnel['personel2']['address'];

    echo $personnel['personel2']['address'];
?>