<?php
$num = $_POST["num"];
$fact = 1;
for ($i = 1; $i <= $num; $i++)
{
   $fact = $fact * $i;
}
echo "Factorial is = ".$fact;

?>