<?php 

echo 'Here we have a Parse error because we must terminate with ;'

/*
Note that the parse error point is on line 20 because this line 
starts with echo statement rather than start with ",' or ';' for separate
of line 3 echo statement

The Parse error explain that echo accept/expect after one string, another one separeted 
by , or you need to specify the end of instruction with ;

Note: 
PHP Parse error:  syntax error, unexpected 'echo' (T_ECHO), 
expecting ',' or ';' in /Users/emanuti/Sites/php-certification/basic/001.0_statements_must_terminate_with_semicolon_exception.php on line 20

Parse error: syntax error, unexpected 'echo' (T_ECHO), 
expecting ',' or ';' in /Users/emanuti/Sites/php-certification/basic/001.0_statements_must_terminate_with_semicolon_exception.php on line 20
*/
echo 'It won\'t arrive here';

?>
