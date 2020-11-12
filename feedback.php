<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Feedback | Crisis Management</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php

    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"feedback");
    mysqli_query($con,"INSERT INTO feedback_users VALUES ('$_POST[email]','$_POST[comment]')");

    ?>
    <div class="parent"><h1 class="msg">Thank You for your valuable feedback.</h1></div>
    <div class="parent"><h1 class="msg">Hope you loved our website.</h1></div>
    <div class="parent"><h1 class="msg">Visit Again !!!</h1></div>
</body>
</html>