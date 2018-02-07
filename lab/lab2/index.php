<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8" />
    </head>
    <body>
        
        <?php
        
            function displaySymbol($randomValue) {
               
               //$randomValue = rand(0,2);
               
               echo $randomValue;
           
            //   if ($randomValue == 0) {
            //       $symbol = "seven";
            //   } else if ($randomValue == 1) {
            //       $symbol = "orange";
            //   } else {
            //       $symbol = "cherry";
            //   }
            
            
                switch ($randomValue) {
                    
                    case 0: $symbol = "seven";
                            break;
                    case 1: $symbol = "orange";
                            break;
                    case 2: $symbol = "cherry";
                            break;    
                }            
            
               echo "<img src='img/$symbol.png' width='70' alt=\"$symbol\" title=\"$symbol\" />";
                
            }
        
            
            $randomValue1 = rand(0,2);
            displaySymbol($randomValue1);
            $randomValue2 = rand(0,2);
            displaySymbol($randomValue2);
            $randomValue3 = rand(0,2);
            displaySymbol($randomValue3);
            
            echo "<br /><hr> Values: $randomValue1 $randomValue2  $randomValue3 ";
        
            // for ($i=0; $i < 3; $i++) {
            //   displaySymbol();
            // }              
            
            
            function displaypoints($randomValue1, $randomValue2, $randomValue3){
                echo "<div id = 'output'>";
                if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3){
                    switch ($randomValue1){
                        case 0: $totalpoints = 1000;
                                echo"<h1>jackpot!</h1>";
                                break;
                        case 1: $totalpoints = 500;
                                break;
                        case 2: $totalpoints = 250;
                        break;
                    }
                    echo "<h2> you won $totalpoints points! </h2>"
                }else {"<h3> Try Again! </h3>";
                    
                }
                echo"</div>"
            }
          
        
        ?>

<!--
         <img src="img/lemon.png" width="70" alt="Lemon" title="Lemon" />
         <img src="img/cherry.png" width="70" alt="Cherry" title="Cherry" />
         <img src="img/orange.png" width="70" alt="Orange" title="Orange" />
-->

    </body>
</html>