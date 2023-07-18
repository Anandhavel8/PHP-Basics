<?php

$value=2;

if($value==1){
    goto ADDITION;
}else if($value==2){
    goto SUB;
}else if($value==3){
    goto MULTI;
}



ADDITION:

$p=60;
$q=20;

$sum=$p+$q;
echo $sum;
goto EXI;

SUB:

$p=60;
$q=20;

$sub=$p-$q;
echo "Subraction of the value is ",$sub,"<br>";
goto EXI;

MULTI:

$p=60;
$q=20;

$multi=$p*$q;
echo "Multiplication value is ".$multi;//dot and comma, both can be used 

EXI:


//youtube channel
//@parallelcode
?>