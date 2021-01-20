<?php 

// it will cause a parse error: 
function no space on function name() {
    echo "it's won't work!";
}

/*
 * PHP Parse error:  syntax error, unexpected 'space' (T_STRING), expecting '(' in /Users/emanuti/Sites/php-certification/002_white_spaces.php on line 4
 * Parse error: syntax error, unexpected 'space' (T_STRING), expecting '(' in /Users/emanuti/Sites/php-certification/002_white_spaces.php on line 4
 */
?>