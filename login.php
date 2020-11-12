<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Login | Crisis Management</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <?php
    session_start();
    $username=$_POST['username'];
    $_SESSION['username']=$username;
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"crisis");
    $select = mysqli_query($con,"SELECT username,password FROM users");
    $rowcount = mysqli_num_rows($select);

    $flag = 0;

    for($i=0; $i<$rowcount; $i++)
    {
        $row = mysqli_fetch_array($select);
        if($row['username']==$username && $row['password']==$_POST['password'])
            $flag = 1;
    }

    if($flag == 1)
    {
        ?><div class="parent"><h1 class="msg">Successfully Logged In</h1></div>
        <div class="parent"><h1 class="msg">Do you want to continue ?</h1></div>
            <table class="parent">
                <tr>
                    <td><a href="MODULE.php"><button id="submit">Yes</button></a></td>
                    <td><a href="ty.html"><button id="submit">No</button></a></td>
                </tr>
            </table><?php
    }
    else
    {
        ?><div class="parent"><h1 class="msg">Failed to Log In</h1></div><?php
    }
    
    ?>
    
</body>
</html>