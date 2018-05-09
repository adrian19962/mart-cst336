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
        @import url("css/styles.css");
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
        <script>
            function validateForm() {
                return false;
            }
        </script>
        <script>
            $(document).ready( function(){
               // var errors = false;
                $("#username").change( function(){ 
                    
                    $.ajax({
                        type: "GET",
                        url: "checkUsernameAPI.php",
                        dataType: "json",
                        data: { "username": $("#username").val() },
                        success: function(data,status) {
                             //alert(data);
                             
                             if (!data) {  //data == false
                                $("#userError").html("Username does not exist");
                                
                             } else {
                                 $("#userError").html("");
                                 
                             }
                        }
                    });//ajax
                });
            });
        </script>
        <nav class='navbar navbar-default - navbar-fixed-top'>
                <div class='container-fluid'>
                    <div class='navbar-header'>
                        <a class='navbar-brand' href='#'>Otterstyle Shop</a>
                    </div>
                    <ul class='nav navbar-nav'>
                    </ul>
                </div>
            </nav>
            <br /> <br /> <br />

        <h1> Otterstyle - Admin Login </h1>
        
        <!--<form onsubmit="return validateForm()">-->
            <fieldset>
        <form method="POST" action="loginProcess.php">
             <fieldset>
            Username: <input type="text" id = "username"name="username"/> <br /> <span id="userError" style="color:red"></span><br>
            Password: <input type="password" name="password"/> <br />
            <br></br>
            
            <input type="submit" name="submitForm" value="Login!" />
            
            
             </fieldset>
        </form>
            <?php
            if(isset($_SESSION['wrong']))
            {
                echo $_SESSION['wrong'];
            }
        ?>
        <br></br>
        <a href='https://docs.google.com/document/d/1WElbO4i5K2nO3tdmix8sa-eI9od8Bs3VHh8S6MGG-tc/edit?usp=sharing' target='_blank'>
             Link to my Documentation!
         </a>
        <br></br>
        <footer>
            CST 336. 2018&copy; Martinez<br/>
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br/>
            <small>It is used for academic purposes only.</small>
            <br/>
            <img src="img/csumb-logo.png" alt="csumb logo photo"/>
            <br/>

        </footer>
    </body>
</html>