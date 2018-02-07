<?php


function add($a, $b) {
    return $a + $b;
}

$number1 = 2;
$number2 = 3;

$result = add($number1, $number2);

echo 'result of the addition of number '.$number1.' and number '.$number2.' is '.$result.'<br>';


function isAdult($user) {
    if ($user['age'] >= 18) {
        return $user['firstName'].' is adult<br>';
    } else {
        return $user['firstName'].' is young<br>';
    }
}

$user = [
    'firstName' => 'Paul',
    'age' => 19
];

echo isAdult($user);

