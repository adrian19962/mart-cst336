<!DOCTYPE html>
<html>
    <head>
        <title> random Color </title>
        <link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
        
        <style>
            body {
                padding: 300px;
                text-align: center;
            }
            header {
                text-align: center;
            }
            img {
                padding-left: 10px;
                padding-right: 10px;
            }
            h2{
                word-spacing: 30px;
                 font-family: 'Chicle', cursive;
            }
            h1 {
                color: green;
                 font-family: 'Chicle', cursive;
            }
            
            #title {
                color: black;
                font-family: 'Chicle', cursive;
            }
            
                
                <?php
                
                function random($card){
                $card = rand(1,5);
                $path = rand(1,4);
                
                echo "<img src='img/".$path."/".$card.".png' />";
                
                return $card;
                }
                
                ?>
                
             
                
            
            
        </style>
        
    </head>
    <body>
        
        <h1 class id="title"> Random Card Game </h1>
        <h2> Human          Computer </h2>
        
        
        
        <?php
        $human = random($card);
        $computer = random($card);
        
            if($human < $computer)
            {
                 echo "<h1> Computer Wins </h1>";
            }
            else if($human > $computer)
            {
                 echo "<h1> Human Wins </h1>";
            }
            else if($human == $computer)
            {
                echo "<h1> It's a Tie Game </h1>";
            }
        ?>
        

    </body>
</html>