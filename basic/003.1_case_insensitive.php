<?php 
// language constructs aren't case sensitive
if(true) {
    IF(true) {
        echo 'if you can see it, if and IF works! ';
        // PHP_END_OF_LINE
        echo PHP_EOL;
    }
}

// name functions aren't case sensitive
function functionsArentCaseSensitive()
{
    return "functions aren't case sensitive";
}

echo functionsarentcasesensitive()
?>