<?php

$mark=-8;

if($mark>=50 && $mark<=50){

    echo "E grade";
}

else if($mark>=57 && $mark<=60){

    echo "D grade";
}

else if($mark>=61 && $mark<=70){

    echo "C grade";
}

else if($mark>=71 && $mark<=80){

    echo "B grade";
}

else if($mark>=81 && $mark<=90){

    echo "A grade";
}


else if($mark>=91 && $mark<=100){

    echo "O grade";
}
else if($mark<50){

    echo "Fail";
}
else{

    echo"Invalid Number";
}


//youtube channel
//@parallelcode

?>