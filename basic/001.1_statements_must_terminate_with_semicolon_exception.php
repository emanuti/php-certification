<?php 

echo 'Here we have a Parse error because we must terminate with ;'

/*
Note that the parse error find line 20, but the error was on line 3
because the parser is trying to parse echo 'Here we have a...' echo 'It won\'t...'
and to separete the instructions on php we need to put ; 

The Paerse error explain that echo accept/expect after one string, another one separeted 
by , or you need to specify the end of instruction with ;

Note: 
PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO), 
expecting ',' or ';' in /Users/emanuti/Sites/php-certification/basic/001.0_statements_must_terminate_with_semicolon_exception.php on line 20

Parse error: syntax error, unexpected 'echo' (T_ECHO), 
expecting ',' or ';' in /Users/emanuti/Sites/php-certification/basic/001.0_statements_must_terminate_with_semicolon_exception.php on line 20
*/
echo 'It won\'t arrive here';

?>