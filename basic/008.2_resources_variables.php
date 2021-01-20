<?php 
/*
Resource:

DB connection,
handler of file

You can't cast this
*/

$dirHandler = opendir(__DIR__);

var_dump($dirHandler);

$fileHandler = fopen(__DIR__ . '/000_comments.php', 'r');

var_dump($fileHandler);