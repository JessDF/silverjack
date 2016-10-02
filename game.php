
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
           
           

           $imgArray = array("0", "1", "2", "3");
           $player = array("0", "1", "2", "3");
           $plyindex = array("0", "1", "2", "3");
           shuffle($imgArray);
          // print_r($imgArray);
           for($o = 0; $o < 4; $o++){
               $player[$o] = $imgArray[$o];
               $plyindex[$o] = $imgArray[$o];
           }
           $imgindex = 0;

               while($count <4){
                   
                   
                   
                 $card_index=rand(0,51);
                 
                 if($imgindex == $count){
                 echo "<img src = 'img/" . $imgArray[$imgindex] . ".jpg' />";
                 $imgindex++;
                 }
                 
                 
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
                        
                        echo " Player Score: " . $playerScore[$count];
                        $count++;
                        echo "<br/>";
                      
                        
                    } 
                    elseif($playerScore[$count]>=37 && $playerScore[$count]<42){
                        
                        echo " Player Score: " . $playerScore[$count];
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
               $winner = array(-1,-1,-1, -1);
               $index = 0;
               for($l = 0; $l < 4; $l++){
                   if ($playerScore[$l] == 42){
                       $winner[$index] = $playerScore[$l];
                       $player[$index] = $l;
                   }
                   else if ($winner[$index] < $playerScore[$l] && $playerScore[$l] < 42){
                       $winner[$index] = $playerScore[$l];
                       $player[$index] = $l;
                   }
               } 
               for($j = 0; $j < 4; $j ++){
                   if($playerScore[$j] != $winner[0]){
                       $player[$j] = NULL;
                   }
                   else if($playerScore[$j] == $winner[0]){
                       $winner[$index] = $playerScore[$j];
                       $player[$index] = $plyindex[$j];
                       $index++;
                   }
               }
               $spot = 0;
              while($winner[$spot] != -1){
                  if($player[$spot] == "0"){
                       echo "<h4>Winner is player - Garrett" . " with " . $winner[$spot] . "</h4>";
                       $spot++;
                   }
                   if($player[$spot] == "1"){
                       echo "<h4>Winner is player - Jessie" . " with " . $winner[$spot] . "</h4>";
                       $spot++;
                   }
                   if($player[$spot] == "2"){
                       echo "<h4>Winner is player - Mateo" . " with " . $winner[$spot] . "</h4>";
                       $spot++;
                   }
				   if($player[$spot] == "3"){
                       echo "<h4>Winner is player - Dealer" . " with " . $winner[$spot] . "</h4>";
                       $spot++;
                   }
               }
               if($spot == 0){
                   echo "<h4>There is no winner.....</h4>"; 
               }
          
       }
       
       
       ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silverjack</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
      <main>
        <h1>Silverjack Review</h1>
       <?=displayRandCard()?> 
         <form><input type=button value="Refresh" onClick="window.location.reload()"></form>
       
      </main>
    </body>
</html>