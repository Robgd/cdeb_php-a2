<?php


function add($a, $b) {
    return $a + $b;
}

$number1 = 2;
$number2 = 3;

$result = add($number1, $number2);

echo 'result of the addition of number '.$number1.' and number '.$number2.' is '.$result.'<br>';


function excerpt($content) {
    if (strlen($content) > 5) {
        return substr($content, 0, 5).'...';
    }

    return $content;
}

$content = 'zefzef zefze fze fze fze fze fz efzefze f';
echo excerpt($content);