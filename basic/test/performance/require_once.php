<?php 
/*
_once function tracks a list of file included
to verify if they are necessary again.

So it will be less performatic then require
*/

# require_once
$start = microtime();

list($start_usec, $start_sec) = explode(" ", $start);

$basepath = __DIR__ .'/../';
$handler  = opendir($basepath);
$files    = 0; 

while(($file = readdir($handler)) !== false) {
    if(!is_file($basepath . $file)) {
        continue;
    }
    
    require_once($basepath . $file);
}

list($end_usec, $end_sec) = explode(" ", microtime());
$diff_sec  = intval($end_sec) - intval($start_sec);
$diff_usec = floatval($end_usec) - floatval($start_usec);

echo printf('%s files -> %s', $files, floatval($diff_sec) + $diff_usec);
echo PHP_EOL;
?>