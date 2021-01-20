<?php 
// constants are case sensitive
const constant = 'constant';
/*
PHP Warning:  Use of undefined constant CONSTANT - assumed 'CONSTANT' (this will throw an Error in a future version of PHP) in /Users/emanuti/Sites/php-certification/basic/003.0_case_sensitive.php on line 15
PHP Stack trace:
PHP   1. {main}() /Users/emanuti/Sites/php-certification/basic/003.0_case_sensitive.php:0

Warning: Use of undefined constant CONSTANT - assumed 'CONSTANT' (this will throw an Error in a future version of PHP) in /Users/emanuti/Sites/php-certification/basic/003.0_case_sensitive.php on line 15

Call Stack:
    0.0021     390640   1. {main}() /Users/emanuti/Sites/php-certification/basic/003.0_case_sensitive.php:0
*/

echo CONSTANT;
?>