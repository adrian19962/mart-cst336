<?php
    session_start();
    session_destroy();
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
    </head>
    
    <style>
        @import url("css/style.css");
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>

        <h1> OtterMart - Admin Login </h1>
        
        <form method="POST" action="loginProcess.php">
            
            Username: <input type="text" name="username"/> <br />
            Password: <input type="password" name="password"/> <br />
            
            <input type="submit" name="submitForm" value="Login!" />
            
            
            
        </form>
            <?php
            if(isset($_SESSION['wrong']))
            {
                echo $_SESSION['wrong'];
            }
        ?>
        
        <footer>
            CST 336. 2018&copy; Martinez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>
            <img id="veri" src="img/buddy_verified.png" alt="buddy check"/>
        </footer>
    </body>
</html>