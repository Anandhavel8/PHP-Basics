<?php

$x=5;//global variable

/*
echo $x," Local variable";
echo '<br>';

include('variblescope1.php');

echo '<br>';
echo $x," Local variable";
*/

function foo(){
    /*
    global $x;//this is neccesary because functions use local variable
    echo $x;
    */
    $GLOBALS['x']=10;//GLOBALS variable here called SUPERGLOBAL.
    echo $GLOBALS['x'];

}
/*
foo();
echo '<br>',$x;
*/

//a static variable is a regular variable with local scope 
//a regular varible is destroyed beyond its scope but static retains its value

function getvalue(){
    $value=someVeryExpensiveFunction();
    return $value;
}
function someVeryExpensiveFunction(){

    sleep(2);//delays the output time
    return 10;
}

echo getvalue().'<br>';
echo getvalue().'<br>';

//youtube channel
//@ProgramWithGio
?>