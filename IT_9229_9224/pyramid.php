<?php
for($i = 1; $i  <= 4; $i++)
{
    for ($j = 1; $j <= $i; $j++)
    {
         if (($i+$j)%2 ==0)
         {
              echo "1 ";
         }
         else
        {
             echo "0 ";
         }
         
     }  
     echo "<br>";
}

?>