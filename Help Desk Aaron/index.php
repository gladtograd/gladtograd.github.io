<?php
    date_default_timezone_set("America/New_York");
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Help Desk - Log In</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="title">
            <h1>Welcome to the Help Desk</h1>
        </div>

        <div class="body-block">

            <div class="welcome-message">
                <p>The purpose of this site is to provide you with a help ticket.
                    Please sign up or log in to get assistance.</p>
                <p>Unfortunately, the log-in function is not working; I ran into an error I couldn't solve.</p>
            </div>

            <div class="log-in-block">
                <h2>Log In or Sign Up</h2>
                
                <form action="menu.php" method="post">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" placeholder="email@domain.com"><br>
                    
                    <label for="pin">PIN:</label><br>
                    <input type="password" id="pin" name="pin" placeholder="Enter PIN">
                    <input type="submit" value="Log In"><br>
                    
                    <label for="pincofirm">Confirm PIN:</label><br>
                    <input type="password" id="pinconfirm" name="pinconfirm" placeholder="Confirm PIN">
                    <input type="submit" value="Sign Up"><br>
                </form>
                
            </div>
            <div class="body">
                <p>Want to browse topics while you wait?
                    Click <a href="menu.php">this link</a> to view our articles!</p>
            </div>
        </div>
        
    </body>
    
    <?php include 'view/footer.php'; ?>
</html>