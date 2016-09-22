
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
           
           $count=0;
           $playerScore= array(0,0,0);
           
               while($count <3){
                   
                 $card_index=rand(0,51);
                 
                 if(in_array($card_index,$deck))
                 {
                     
                     
                     $card_number = $deck[$card_index] % 13 ;
                     unset($deck[$card_index]);
                    
                     
                     
                     if($card_number ==0 || $card_number>=10){
                         $playerScore[$count] += 10;
                         
                     }
                     else{
                         
                         $playerScore[$count] += $card_number;
                     }
                     
                     switch ($card_index) {
                         case $card_index<=13:
                             if($card_number==0){
                             echo  "<img src = 'img/cards/clubs/" . 13 . ".png' />";
                             }
                             else{
                                 echo  "<img src = 'img/cards/clubs/" . $card_number . ".png' />";

                             }
                             break;
                             
                         case $card_index > 13 && $card_index<=26:
                             if($card_number==0){
                             echo  "<img src = 'img/cards/diamonds/" . 13 . ".png' />";
                             }
                             else{
                                 echo  "<img src = 'img/cards/diamonds/" . $card_number . ".png' />";
                                 
                             }
                             
                            break;
                         
                         case $card_index > 26 && $card_index <= 39:
                             
                             
                             if($card_number==0){
                             echo  "<img src = 'img/cards/hearts/" . 13 . ".png' />";
                             }
                             else{
                                 echo  "<img src = 'img/cards/hearts/" . $card_number . ".png' />";
                             }
                             
                             break;
                             
                         default:
                             if($card_number==0){
                             echo  "<img src = 'img/cards/spades/" . 13 . ".png' />";
                             }
                             else{
                                 echo  "<img src = 'img/cards/spades/" . $card_number . ".png' />";
                             }
                            
                             break;
                     }
                     
                    
                    if($playerScore[$count]>=42 ){
                        
                        echo $playerScore[$count];
                        $count++;
                        echo "<br/>";
                      
                        
                    } 
                    elseif($playerScore[$count]>=37 && $playerScore[$count]<42){
                        
                        echo $playerScore[$count];
                        $count++;
                        echo "<br/>";
                        
                       
                    }
                    else{
                        continue;
                    }
                    
                    
                 }
                 else{
                     continue;
                 }
                 
              
                   
               }
           
                  
               
               
          /* for($j = 0; $j < 3; $j++)
           {
               if($j==0){
                    echo  "<img src =  'img/jessie.jpg' />"; 
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
               
          $card = array_pop($deck);
           echo $card . "<br />";*/
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