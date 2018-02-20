<?php
function displaySymbol($randomValue, $pos) {
               //$randomValue = rand(0,2);
              // echo $randomValue;
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
                    case 3: $symbol = "grapes";
                            break;
                    case 4: $symbol = "lemon";
                            break; 
                    case 5: $symbol = "bar";
                            break; 
                }            
               echo "<img id='reel$pos' src='img/$symbol.png' alt='$symbol' title='".ucfirst($symbol). "' width='70'>";
            }

function play(){
            for ($i=1; $i < 4; $i++){
                ${"randomValue".$i } = rand(0,5);
                displaySymbol(${"randomValue". $i}, $i);
            }
            displaypoints($randomValue1, $randomValue2,$randomValue3);
        
            }

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
                        case 3: $totalpoints = 300;
                                
                                break;
                        case 4: $totalpoints = 400;
                                
                                break;
                        case 5: $totalpoints = 900;
                                
                                break;
                    }
                    echo "<h2> you won $totalpoints points! </h2>";
                }else {"<h3> Try Again! </h3>";
                    
                }
                echo"</div>";
            }
?>