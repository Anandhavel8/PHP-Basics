<?php

#define('a','A');//1st way to define constant

#const a='A';//2nd way to define constant
/*
$paid='PAID';
define('STATUS_'.$paid,4);//dyanamic way to define constant
echo STATUS_PAID;
*/

#echo __LINE__;//magic variables are values that change prior to where we use

$foo='bar';// this is called VARIABLE VARIABLES
$$foo='baz';//Double $$ means take value of foo and make it as variable name for baz.
echo $foo , $bar ,$$foo;

//youtube channel
//@parallelcode

?>