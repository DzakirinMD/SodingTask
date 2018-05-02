<?php

class Prime
{
   public function getPrimeNo($num){
      for($i=1; $i <= $num; $i++){
          $counter = 0; 

          for($j=1; $j <= $i; $j++){ 
                if($i % $j==0){ 
                    $counter++;
                }
          }
        // Display prime number
        if($counter==2){ 

               echo $i;
        }
      }
   }   
}

?>