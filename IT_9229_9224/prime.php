<?php 
$num = $_POST["num"];
$flag = 1;  //prime
for ($i = 2; $i < $num; $i++)
{
    if ($num % $i == 0)
        {
            $flag = 0; //Not a prime
           break;
        }
}
if ($flag == 1)
{
   echo "The number is a prime number";
}
else
{
  echo "The number is not a prime number";
}

?>