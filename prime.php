<?php
class IsPrime
{       
     function check($num)
     {
        $cPrime = True; 
        for ($i = 2; $i < $num; $i++)
        {
            if ($num % $i == 0) 
            {
                 $cPrime = False;
                 break;
            }               
        }
       if ($cPrime) 
          return true;       
       else
          return false;
     }       
  }

 
?>

      