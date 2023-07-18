<?php
$a=80;
$b=50;

$sum1=$a+$b;
echo $sum1;
echo'<br>';



$c='80';
$d='50';

$sum2=$c+$d;
echo $sum2;
echo'<br>';



$e='80';
$f='50';

$sum3="$e+$f";
echo $sum3;
echo'<br>';



/*
$g="80 gold coins";
$h="50 silver coins";

$sum4=$g+$h;
echo $sum4;
echo'<br>';

adds nums and error shows
*/



$g="80 gold coins";
$h="50 silver coins";

$sum4="$g+$h";
echo $sum4;
echo'<br>';



$i="gold 50 coins";
$j="silver 80 coins";

$sum5='$i+$j';
echo $sum5;
echo'<br>';
#$i+$j is taken just as a variable in sum5 and it shows output as $i+$j.
# because single quotes is used.


$i="gold 50 coins";
$j="silver 80 coins";

$sum5="$i+$j";
echo $sum5;
echo'<br>';
# by using double quotes $i and $j are taken in consideration an output is value of $i+$j.



$k=50;
$l=50 ;

$diff=$k-$l;
echo $diff;
echo'<br>';



$k=50;
$l=50 ;

$div=$l/$k;
echo $div;
echo'<br>';



$k=50;
$z=501 ;

$remainder=$z%$k;
echo $remainder;
echo'<br>';



$k=50;
$l=50 ;

$div=$l*$k;
echo $div;
echo'<br>';


$k=5;
$l=5;

$pow=$l**$k;
echo $pow;
echo'<br>';



$x=10;
echo $x;
echo'<br>';

$x=$x+30;
echo $x;
echo'<br>';

$x+=20; //shorthand method
echo $x;
echo'<br>';



$name="Krishna";
echo $name;
echo'<br>';

$name=$name." Raj";
echo $name;
echo'<br>';

$name.=" V";
echo $name;
echo'<br>';

//youtube channel
//@parallelcode

?>