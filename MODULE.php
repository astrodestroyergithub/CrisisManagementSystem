<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <title>Module Selection Page</title>
        <link rel="stylesheet" href="MODSTYLE.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <div class="head-wrap">
            <center><b><span id="heading">CRISIS MODULE SELECTION</span></b></center>
        </div>
        <div class="module">
            <span id="list-style">
            <ul>
                <li><a href="chat_index.php">CHAT COUNSELLING</a></li>
                <li><a href="video_chat.html">VIDEO CONFERENCE COUNSELLING</a></li>
                <li><a href="geo_index.php">ROUTE TRACKER INFORMER</a></li>
                <li><a href="NEWS.html">DAILY NEWS UPDATES</a></li>
                <li><a href="FITNESS.html">FITNESS & WELLBEING TRACKER</a></li>
                <li><a href="covid-19.html">COVID-19 STATUS CHECKER</a></li>
                <li><a href="https://www.youtube.com/channel/UCCiKcWcW6IUaRibl-5opkyg">VIDEO STREAMING</a></li>
                <li><a href="DONATION.html">DONATION DRIVE</a></li>
            </ul>
            </span>
        </div>
    </body>
</html>