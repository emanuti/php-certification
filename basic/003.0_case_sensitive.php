<?php 

// variables are case sensitive
$variable = 'variable';

// if you try to call uppercase
echo $VARIABLE;

// results in:
/*
PHP Notice:  Undefined variable: VARIABLE in /Users/emanuti/Sites/php-certification/003_case_sensitive.php on line 7
PHP Stack trace:
PHP   1. {main}() /Users/emanuti/Sites/php-certification/003_case_sensitive.php:0

Notice: Undefined variable: VARIABLE in /Users/emanuti/Sites/php-certification/003_case_sensitive.php on line 7

Call Stack:
0.0029     388480   1. {main}() /Users/emanuti/Sites/php-certification/003_case_sensitive.php:0
 */
?>
