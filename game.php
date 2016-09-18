<?php
       
       function displayRandCard()
       {
           $suits = array("clubs", "diamonds", "hearts","spades");
           $randomSuitIndex = rand(0,3);
           $randomSuit = $suits[$randomSuitIndex];
           echo  "<img src = '../img/cards/$randomSuit/" . rand(1, 13) . ".png' />";
           
           $deck = array();
           for($i = 1; $i <= 52; $i++)
           {
               $deck[] = $i;
           }
           shuffle($deck);
           $card = array_pop($deck);
           echo $card . "<br />";
       }
       
       
       ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Arrays Review</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        
        <h1>Silverjack Review</h1>
       
       
       
       <?=displayRandCard()?> 
     
       
      
    </body>
</html>