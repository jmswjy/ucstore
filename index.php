<?php
    /*
    Author: Javed Ur Rehman
    Website: http://www.allphptricks.com/
    */
    require_once('config.php');
    include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html>
    <head>
        <base href='<?php echo $base_url; ?>'>
        <meta charset="utf-8">
        <title>Welcome Home</title>
        <link rel="stylesheet" href="assets/styles/external.css" />
    </head>

    <body>
        <div class="form">
            <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
            <p>This is secure area.</p>
            <p><a href="dashboard.php">Dashboard</a></p>
            <a href="logout.php">Logout</a>
            <br /><br /><br /><br />
            <a href="http://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/">
                Tutorial Link
            </a>
            <br /><br />
            For More Web Development Tutorials Visit: <a href="http://www.allphptricks.com/">AllPHPTricks.com</a>
        </div>
    </body>

</html>
