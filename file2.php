<?php

if (isset($_POST['btn_send'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "Email Name: " . $email . "<br>";
}





// $first_name = $_GET['first_name'];
// $last_name = $_GET['last_name'];
// $email = $_GET['email'];

// echo "First Name: " . $first_name . "<br>";
// echo "Last Name: " . $last_name . "<br>";
// echo "Email Name: " . $email . "<br>";

?>