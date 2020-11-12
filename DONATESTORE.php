<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Thanks for Donating</title></head>
    <body bgcolor="#FFDAB9">
    </body>
</html>
<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];

$email=$_POST['email'];
$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'crisis');
$select=mysqli_query($conn,"select email from users");
$rowcount = mysqli_num_rows($select);

    $flag = 0;

    for($i=0; $i<$rowcount; $i++)
    {
        $row = mysqli_fetch_array($select);
        if($row['email']==$email)
            $flag = 1;
    }

if($flag==0){
    die("<h1 style='font-family:arial'>You cannot donate! you are not an official user!!!</h1><br>");
}
else
    mysqli_close($conn);
    
$amount=$_POST['amount'];
$view=$_POST['view'];
if(!empty($_POST['receipt']))
    $receipt=$_POST['receipt'];
if(!empty($_POST['anon']))
    $anon=$_POST['anon'];
if(!empty($_POST['list']))
    $list=$_POST['list'];
if(empty($receipt) && empty($anon) && empty($list))
{
    echo "<h1 style='font-family:arial'>Looks like you don't have any acknowledgement preferences</h1><br>";
}
else
{
    if(!empty($receipt)){
            $to='email.address@gmail.com';
            $subject='Crisis Management Donation Acknowledgement';
            $message='Thank you very much for donating for the cause!\n
            Your cash receipt :\n
            || First Name || $firstname\n
            || Last Name || $lastname\n
            || Email || $email\n
            || View || $view\n
            || Donation Amt. || $amount\n\n
            Your contribution means a lot for cause - Crisis management System';
            $res=mail($to,$subject,$message);
            if($res){
                echo "<h1 style='font-family:arial'>Mail sent successfully!!!</h1><br>";
            }
            else{
                echo "<h1 style='font-family:arial'>Mail not sent!!!</h1><br>";
            }
    }
        
    if(!empty($anon)){
        
            echo "<h1 style='font-family:arial'>Thank you for donating </h1><br>";
    }
        
    if(!empty($list)){
        
            $conn=mysqli_connect('localhost','root','');
            mysqli_select_db($conn,'donation');
            $query_1="insert into officialdonators (fname,lname,email,amount,view) values ('$firstname','$lastname','$email','$amount','$view')";
            mysqli_query($conn,$query_1);
            echo "<h1 style='font-family:arial'>You're added to official donators' list</h1><br>";
            mysqli_close($conn);
    }
}
?>