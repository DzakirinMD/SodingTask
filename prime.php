<?php
class Prime
{
    private $pNo = 0;
    private $count = 0;
   public function checkPrimeNo($num){      
      for($i=1; $i <= $num; $i++){
          $counter = 0; 
          for($j=1; $j <= $i; $j++){ 
                if($i % $j==0){ 
                    $counter++;
                }
          }
        // Display prime number
        if($counter==2){
            //echo $i ." Prime number </br>";
            $this->pNo += $i;
            $this->count++; 
            
            for($k=$this->pNo; --$k && $this->pNo %$k;);
            if ($k==1)
            echo "Sum of " . $this->count . " term is : " . $this->pNo . "</br>";
          }
        }
    }
}
?>