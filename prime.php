<?php

class Prime
{
    private $pNo = 0;

   public function checkPrimeNo($num){      
      for($i=1; $i <= $num; $i++){
          $count = 0;
          $counter = 0; 
          for($j=1; $j <= $i; $j++){ 
                if($i % $j==0){ 
                    $counter++;
                }
          }
        // Display prime number
        if($counter==2){ 
         //   echo $i ." Prime number </br>";
            $this->pNo += $i;
            for($k=$this->pNo; --$k && $this->pNo %$k;);
            if ($k==1)
            echo $this->pNo. "</br>";

          }
        }
    }

    public function sumPrime(){
        $bCheck = True; 
                for ($k = 2; $k < $this->pNo; $k++)
                {
                    if ($this->pNo % $k == 0) 
                    {
                        echo $this->pNo . 'Prime sum' ;  
                        break;
                    }               
                }
            if ($bCheck) 
                echo $this->pNo . 'Prime sum' ;           
            else
                echo '</br>'; 
    }
}


 //  if ($this->pNo += $i % 0) {      echo $this->pNo;      }
?>

