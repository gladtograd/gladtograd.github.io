<?php
    $lifetime = 60 * 60 * 24 * 365 * 4; // 3 years in seconds
    session_set_cookie_params($lifetime, '/');
    session_start();
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $cname = 'ticketnum';
    $cvalue = bin2hex($email);
    $cexpire = strtotime('+1 year');
    $cpath = '/';
    setcookie($cname, $cvalue, $cexpire, $cpath);
    $cookie_ticket = filter_input(INPUT_COOKIE, 'ticketnum'); //also broken :(

    //fix timezone below (BROKEN)
    //$now = new DateTime();
    //$now->setTimezone(new DateTimeZone('America/Los_Angeles'));
    //echo $now->format('g:i A');
    date_default_timezone_set("America/New_York");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Held Desk - Menu</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="title">
            <h1>Welcome to the Help Desk</h1>
        </div>
        
        <div class="body-block">
            <div class="menu-message">
                <p>Welcome to the Help Desk Menu. Here you may find your ticket number and browse helpful resources for either macOS or Windows.</p>
            </div>
            
            <?php include 'view/ticket.php'; ?>
            
            <div class="dropdown">
                <button class="dropbtn">Read Cool Articles</button>
                <div class="dropdown-content">
                    <a href="https://www.posterpresentations.com/alt-code-cheatsheet.html" target="_blank">Arranged List of Unique Characters</a>
                    <a href="https://support.microsoft.com/en-us/windows/multiple-desktops-in-windows-36f52e38-5b4a-557b-2ff9-e1a60c976434" target="_blank">Managing Virtual Desktops for Windows</a>
                    <a href="https://support.apple.com/en-us/HT210380" target="_blank">Using iPad as Second Screen for macOS</a>
                </div>
            </div>
        </div>
        
    </body>
    
    <?php include 'view/footer.php'; ?>
</html>