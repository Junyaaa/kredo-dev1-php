<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <form action="file2.php" method="post" autocomplete="off">
        <label for="first-name" >First Name</label>
        <input type="text" name="first_name" id="first-name">
        <br>
        <label for="last-name">Last Name</label>
        <input type="text" name="last_name" id="last-name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" name="btn_send" value="Send">
    </form>
    


</body>
</html>