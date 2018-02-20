<!DOCTYPE html>


<html>
    <head>
        <title>Camaro Builder </title>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        
        
        
        <?php
            include 'gen.php';
            echo "<h1> Camaro Type: </h1>";
            echo '<h2>' .carpick(). '</h2>';
            echo "<h1> Vin Number: </h1>";
            echo '<h2>' .vin(). '</h2>';
            echo "<h1> Plate Numeber: </h1>";
            echo '<h2>'. plate().'</h2>';
            ?>
            
            <figure>
                <img id="pic"src="img/mart_add.jpg"/>
                <img id="pic1"src="img/zl11le.jpeg"/>
            </figure>
            
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