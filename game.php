
       <?php
       
       function displayRandCard()
       {
           $suits = array("clubs", "diamonds", "hearts","spades");
           $randomSuitIndex = rand(0,3);
           $randomSuit = $suits[$randomSuitIndex];
          
          
           
           
           $deck = array();
           
               for($i = 1; $i <= 52; $i++)
               {
                   $deck[] = $i;
               }
               
           for($j = 0; $j < 3; $j++)
           {
               if($j==0){
                 echo  "<img src = 'img/jessie.jpg' />";  
               }
               else if($j==1){
                   echo  "<img src = 'img/Garrett.jpg' />";
               }
               else{
                   echo  "<img src = 'img/mateo.jpg' />";
               }
                 
                 for($i = 1; $i <= 4; $i++)
               {
                  echo  "<img src = 'img/cards/$randomSuit/" . rand(1, 13) . ".png' />"; 
               }
                 echo "<br>";
              }
               
               
           
               
           
           
           shuffle($deck);
          //
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
      <main>
        <h1>Silverjack Review</h1>
       <?=displayRandCard()?> 
     
       
      </main>
    </body>
</html>