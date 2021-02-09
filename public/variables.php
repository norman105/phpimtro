<?php 
$english;
$math;
$hindi;
$sum;
$average; 

$english =50;
$math =40;
$hindi =30;


$sum +$english +$math +$hindi;
$average +$sum / 3;
echo $average "%";
echo "<br>";


if ($average>=60 ){
echo "1st division";

}elseif ($average > =50) {
  echo " 2nd division";

}elseif($average > =35){
  echo "3rd division";

}else($average <=30) {
  echo "failed";
}







 ?>