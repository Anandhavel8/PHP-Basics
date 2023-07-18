<?php

class MyComputer{

    public $price=5000;

    public function keyboard(){
       // $a=new MyComputer();
        $laptop='Acer';
        echo 'THis is a qwerty keyboard displayed by invoking a function';
        echo '<br>',$laptop;
        echo $this->price;//this keyword only used inside the class
    }
}
$obj= new MyComputer();

$obj->keyboard();

echo '<br>';
echo $obj->price;

//youtube channel
//@parallelcode

?>