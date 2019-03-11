<?php
$pl = array("Python", "JS", "Dart");
echo "I like ".$pl[0];
echo "<br>";
$len = count($pl);

echo "length= ".$len;
echo "<br>";
for ($x = 0; $x < $len; $x++)
{
  echo $pl[$x];
  echo "<br>";
}

//Associative Array
$p = array("Peter"=>35, "Ben"=>40, "Joe"=>30);
echo "Peter is ".$p['Peter']." years old";
echo "<br>";
foreach ($p as $k => $v){
echo "key= ".$k." value= ".$v;
echo "<br>";
}

?>