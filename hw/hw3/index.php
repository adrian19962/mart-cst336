<?php


  
   if(empty($_GET['keyword']) && empty($_GET['category']))
      {
        echo"<h2> You must type a keyword or select a category </h2>";
      }
    
  if((($_GET['keyword'] == "" || empty($_GET['keyword'])) && !empty($_GET['category'])) || (!empty($_GET['keyword']) && !empty($_GET['category'])) || (!empty($_GET['keyword']) && empty($_GET['category']))) { 
      
      
      
      
      
      
      $keyword = $_GET['keyword'];
      
      if (isset($_GET['layout'])) {  //user checked a layout
        
        $orientation = $_GET['layout'];
        
      }
      
      if (!empty($_GET['category'])) { //user selected a category
        $keyword = $_GET['category'];
      }
 
  }  
   
 
 function checkCategory($category){
   
    if ($category == $_GET['category']) {
       echo " selected";
    }
 }
 
 function checkcolor($color){
   
    if ($color == $_GET['color']) {
       echo " selected";
    }
 }
 


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Homework 3 </title>
    </head>
    <style>
        @import url("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        @import url("css/style.css");
       
        
        
    </style>
    <body>

        <form method="GET">
            <div id="layoutdiv">
            <legend>1. What year is Adrian's camaro:</legend>
            <input type="text" size="20" id= "search"name="keyword" placeholder="Enter year (2016 - 2018)" value="<?=$_GET['keyword']?>"/>
            </div>
            <div></div>
            
            <?php
            
             if($_GET['keyword'] !='2016' && (!empty($_GET['keyword'])))
             {
                 echo"<h2> Wrong +0 Points!</h2> <div></div>";
            }
            else if($_GET['keyword'] =='2016' && (!empty($_GET['keyword'])) )
            {
                echo"<h2> Correct +20 Points! </h2> <div></div>";
            }
            
            ?>
            
            
            
           
            <div id="layoutdiv">
            <legend>2. How much hourse power does a 6th Gen Camaro</legend> 
            <div></div> 
            <input type="radio" name="layout" value="335hp" id="hlayout" <?= ($_GET['layout']=="335hp")?"checked":"" ?>>
            <label for="335hp"> 335 </label>
            <br>
            
            <input type="radio" name="layout" value="450hp" id="vlayout" <?= ($_GET['layout']=="450hp")?"checked":"" ?>>
            <label for="450hp"> 450 </label>
            
            <br>
            
            <input type="radio" name="layout" value="650hp" id="hlayout"<?= ($_GET['layout']=="650hp")?"checked":"" ?>>
            <label for="650hp"> 650 </label>
            
            <br>
            
            </div>
            <div>
                <?php
                if($_GET['layout']=="335hp")
                {
                    echo"<h2> Correct +20 Points! </h2> <div></div>";
                }
                
                else if($_GET['layout']!="335hp" && isset($_GET['layout']))
                {
                     echo"<h2> Wrong +0 Points!</h2> <div></div>";
                }
                
                
                ?>
                
            
            <div id="layoutdiv">
            <legend>3. What model type is Adrian's Camaro:</legend>
            <div></div>
            <select name="category">
              <option value="" >  Select One </option> 
              <option value="sea" <?=checkCategory('LT')?>>  LT </option>
              <option <?=checkCategory('RS')?>>  RS </option>
              <option <?=checkCategory('SS')?>>  SS </option>
              <option <?=checkCategory('ZL1')?>>  ZL1 </option>
              <option <?=checkCategory('1LE')?>>  1LE </option>
            </select>
            </div>
            
             <?php
                if($_GET['category']=="RS")
                {
                    echo"<h2> Correct +20 Points! </h2> <div></div>";
                }
                
                else if($_GET['category']!="RS" && isset($_GET['category']))
                {
                    echo"<h2> Wrong +0 Points!</h2> <div></div>";
                }
                
                
                ?>
            
            <div id="layoutdiv">
            <legend>4. What color is his Camaro:</legend>
            <div></div>
               <select name="color">
               <option value="" >  Select One </option> 
               <option <?=checkcolor('Black')?>> Black </option>    
               <option <?=checkcolor('Night Fall Gray')?>> Night Fall Gray </option>    
               <option <?=checkcolor('Red Hot')?>>  Red Hot </option>    
               <option <?=checkcolor('Hyper Blue Metallic')?>> Hyper Blue Metallic </option>    
            </select>
            </div>
            <div></div>
             <?php
                if($_GET['color']=="Night Fall Gray")
                {
                    echo"<h2> Correct +20 Points! </h2> <div></div>";
                }
                
                else if($_GET['color']!="RS" && isset($_GET['color']))
                {
                     echo"<h2> Wrong +0 Points!</h2> <div></div>";
                }
                
                
                ?>
            
                
            
            <div id="layoutdiv">
            <legend> 5. What tire compangt is he running? </legend>
            <div></div>
            <input type="radio" name="tire" value="nitto" id="hlayout" <?= ($_GET['tire']=="nitto")?"checked":"" ?>>
            <label for="335hp"> Nitto </label>
            <br>
            
            <input type="radio" name="tire" value="goodyear" id="vlayout" <?= ($_GET['tire']=="goodyear")?"checked":"" ?>>
            <label for="450hp"> Good Year </label>
            
            <br>
            
            <input type="radio" name="tire" value="michelin" id="hlayout"<?= ($_GET['tire']=="michelin")?"checked":"" ?>>
            <label for="650hp"> Michelin </label>
            </div>
            <div></div>
            <?php
                if($_GET['tire']=="nitto")
                {
                    echo"<h2> Correct +20 Points! </h2> <div></div>";
                }
                
                else if($_GET['tire']!="nitto" && isset($_GET['tire']))
                {
                    echo"<h2> Wrong +0 Points!</h2> <div></div>";
                }
                
                
                ?>
            
            
            <div id="layoutdiv">
            <legend>6. Is this a 6th Gen Camaro<legend>
            <br>
            <input type="radio" name="gen" value="Yes" id="Yes" <?= ($_GET['gen']=="Yes")?"checked":"" ?>>
            <label for="Yes">Yes</label></br>
            
            <br>
            
            <input type="radio" name="gen" value="No" id="No" <?= ($_GET['gen']=="No")?"checked":"" ?>>
            <label for="No">No</label></br>
            
            </div>
            
             
            </div>
            <?php
            if($_GET['gen']=="Yes")
                {
                    echo"<h2> Correct +20 Points! </h2> <div></div>";
                }
                
                else if($_GET['gen']!="Yes" && isset($_GET['gen']))
                {
                     echo"<h2> Wrong +0 Points!</h2> <div></div>";
                }
                
                
                ?>
            <div id="submitdiv">
            <input id="submitd" type="submit" value="Submit!"/>
                
            <div></div>
                
            <?php
         
          $score = 0;
         
          if ($_GET['keyword'] == 2016 )
             {
                 $score+= 20;
             }
             
             if ($_GET['layout'] == "335hp" )
             {
                 $score+= 20;
             }
             if ($_GET['category'] == "RS" )
             {
                 $score+= 20;
             }
            if($_GET['color']=="Night Fall Gray")
             {
                 $score+= 20;
             }
             if($_GET['tire']=="nitto")
             {
                 $score+= 20;
             }
             if($_GET['gen']=="Yes")
             {
                 $score += 20;
             }
             
         echo "<h1>This is your total score " . $score . "</h1>";
         ?>
                
                <div></div>
                    
        </form>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
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