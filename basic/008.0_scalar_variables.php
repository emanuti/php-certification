<?php 
# there are 3 types of variables 

/*
Scalar:
One value a time

boolean,
float,
integer,
string
*/
$booleanTrue       = true;
$booleanFalse      = false;
$float             = 1.1;
$integer           = 1;
$simpleString      = 'emanuti';
$interpretedString = "Hello $simpleString!";

var_dump($booleanTrue);
var_dump($booleanFalse);
var_dump($float);
var_dump($integer);
var_dump($simpleString);
var_dump($interpretedString);

echo 'Strings aren\'t just a list of characters! They may contain images and are binary safe!';

echo PHP_EOL;

echo $simpleString;