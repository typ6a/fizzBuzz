<?php

$file = fopen('fizzBuzzData.txt', 'r');
$fizz = fgets($file);
$buzz = fgets($file);
$number = fgets($file);
// echo $fizz;
// echo $buzz;
// echo $number;
fclose($file);
// while (!feof($file)) {
//     $content = fgets($file);
//     echo $content . "\n";
// }

$file = fopen('fizzBuzzRes.txt', 'r+');

for ($i = 1; $i <= $number ; $i++) { 
    if (!($i % (int)$fizz) && !($i % (int)$buzz)) {
        fputs($file, "FB");
    }
    elseif (!($i % (int)$fizz)) {
        fputs($file, "F");
    }
    elseif (!($i % (int)$buzz)) {
        fputs($file, "B");
    }
    else {
        fputs($file, $i);
    }
    fputs($file, ' ');
}

fclose($file);