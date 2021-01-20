<?php 
function showSuperglobals($superglobal) {
    if(empty($superglobal)) {
        return;
    }

    echo PHP_EOL, PHP_EOL;

    foreach($superglobal as $key => $value) {
        if(is_string($value)) {
            echo $key, ' - ', $value, PHP_EOL;
        } else {
            var_dump($value);
        }
    }
    echo PHP_EOL;
}

echo '$_ENV' . PHP_EOL;
showSuperglobals($_ENV);

echo '$_COOKIE' . PHP_EOL;
showSuperglobals($_COOKIE);

echo '$_FILES' . PHP_EOL;
showSuperglobals($_FILES);

echo '$_GET' . PHP_EOL;
showSuperglobals($_GET);

echo '$_GLOBALS' . PHP_EOL;
// showSuperglobals($_GLOBALS);

echo '$_POST' . PHP_EOL;
showSuperglobals($_POST);

echo '$_REQUEST' . PHP_EOL;
showSuperglobals($_REQUEST);

echo '$_SERVER' . PHP_EOL;
showSuperglobals($_SERVER);

echo '$_SESSION' . PHP_EOL;
// showSuperglobals($_SESSION);

echo PHP_EOL;
echo '$_SERVER[\'argc\'] Contagem dos parâmetros' . PHP_EOL;
var_dump($_SERVER['argc']);
echo 'Outra forma de acessar - $argc => Contagem dos parâmetros' . PHP_EOL;
var_dump($argc);

echo PHP_EOL;
echo '$_SERVER[\'argv\'] => Valor do parâmetro' . PHP_EOL;
var_dump($_SERVER['argv']);
echo 'Outra forma de acessar - $argv => Valor do parâmetro' . PHP_EOL;
var_dump($argv);