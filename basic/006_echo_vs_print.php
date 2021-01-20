<?php 
// we can put many parameters separeted with comma
echo 'isso', ' ', 'funciona';
echo PHP_EOL;
echo 'isso funciona';
echo PHP_EOL;
print('isso funciona');
echo PHP_EOL;

// it will generate a sintax error: $a = echo 1; because there is no return on echo php construct
echo 1;
echo PHP_EOL;

// we can write this with print because print php construct has a return
$a = print(5);
echo $a;
echo PHP_EOL;
echo 'Maybe here you are confuse. Why echo print(5), show me 51 ?';
echo PHP_EOL;
echo 'It is because first, print(5) show 5 and after that, there is the echo function that will show 1 because it will echo true of return print function';
echo PHP_EOL;
echo 1, print(2), print(3);
echo PHP_EOL;
echo 'In this case first, echo 1 show 1';
echo PHP_EOL;
echo 'After print(2) show 2 and echo 1 of return print function';
echo PHP_EOL;
echo 'After print(3) show 3 and echo 1 of return print function';
echo PHP_EOL;

// php constructs reference: https://www.php.net/manual/en/reserved.keywords.php
?>