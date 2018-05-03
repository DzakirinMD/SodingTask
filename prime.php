<?php
class IsPrime
{       
     function check($num)
     {
        $bCheck = True; 
        for ($i = 2; $i < $num; $i++)
        {
            if ($num % $i == 0) 
            {
                 $bCheck = False;
                 break;
            }               
        }
       if ($bCheck) 
          //echo 'Prime';    
          return true;       
       else
          //echo 'NOT prime'; 
          return false;
     }       
  }

 
?>

      