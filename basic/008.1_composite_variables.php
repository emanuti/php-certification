<?php 
/*
Composite:
More than one value a time

Class,
Array
*/
class TestClass {
    // only this class can access
    private $privateProperty;
    // this and all class that extends this class can access
    protected $protectedProperty;
    // all classes can access this property
    public $publicProperty;

}

$array = [
    1 => 'one element',
    2
];

var_dump(new TestClass());

var_dump($array);