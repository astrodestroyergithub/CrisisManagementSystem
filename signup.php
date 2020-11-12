<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Sign Up | Crisis Management</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"crisis");
    mysqli_query($con,"INSERT INTO users VALUES ('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[username]','$_POST[password]')");

    ?>
    <div class="parent"><h1 class="msg">Successfully Signed Up</h1></div>
</body>
</html>