<?php

require_once 'inheritance1.php';

class print1 extends print0{

    public function print11(){

        echo "11";
    }

    public function print12(){

        echo "12";
    }
}

class print2 extends print1{

    public function print21(){

        echo "21";
    }

    public function print22(){

        echo "22";
    }
}

class print3 extends print2{

    public function print31(){

        echo "31";
    }

    public function print32(){

        echo "32";
    }
}

$print=new print3();

$a=$print->print01();

echo $a;

//inheritance that appears like a ladder is called multilevel inheritance
//inheritance when a class is inherited more than once is called heirachy inheritance

//youtube channel
//@parallelcode

?>