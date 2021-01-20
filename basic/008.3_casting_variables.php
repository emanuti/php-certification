<?php 
$a = '123.4';

echo 'Casting String to Boolean' . PHP_EOL;

// repare that a string (with lenght 0 or = '0' or = 0) to bool is false
var_dump(
    boolval($a),
    (bool) $a, 
    (bool) '', 
    (bool) '0', 
    (bool) 0
);

echo PHP_EOL;

echo 'Casting String to Float' . PHP_EOL;

// or get the result of cast using floatval() function
var_dump(
    floatval($a),
    (float) $a
);

echo PHP_EOL;

echo 'Casting String to Integer' . PHP_EOL;

// when we cast from float to integer php truncates decimal portion
var_dump(
    intval($a),
    (int) $a
);

echo PHP_EOL;

echo 'Casting Float to Integer by intdiv function' . PHP_EOL;

// repare that here we have a cast from float to integer
var_dump(intdiv((float) $a, 10));

echo PHP_EOL;

echo 'Casting Integer to String' . PHP_EOL;

// php has strval() function go get the result of cast to string
var_dump(strval((int) $a));

echo PHP_EOL;

echo 'Casting Float to String' . PHP_EOL;

// php has strval() function go get the result of cast to string
var_dump(strval((float) $a));

echo PHP_EOL;

// settype method references $a variable and modify it
settype($a, 'float');
var_dump($a);
// after settype($a, 'float') $a now is float
settype($a, 'int');
var_dump($a);
// after settype($a, 'int') $a now is int
settype($a, 'string');
var_dump($a);
// after settype($a, 'string') $a back to string
settype($a, 'bool');
var_dump($a);
// after settype($a, 'bool') $a now is bool