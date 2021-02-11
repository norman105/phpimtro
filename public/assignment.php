<?php
$a;
$b;


$a= 7;
$b= 10;

for ($a=1; $a<= 7; $a++)
 { 

for ($b=1; $b <=10 ; $b++) 
 { 
   echo "*";
}
  echo "<br>";
}

echo "\nbefore swapping :\n";
echo "a =".$a."  b=".$b;

$third = $a;
$a = $b;
$b = $third;
 
echo "\nafter swapping: \n";
echo " a =".$a."  b=".$b."\n";
 echo "<br> ";



$a = 7;
$b = 10;
echo "\nbefore swapping:  ". $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "\nafter swapping:  ". $a . ',' . $b."\n";
echo "<br>";
echo strrev("Hello world!"); 

?>