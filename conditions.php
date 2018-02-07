<?php

$tab = [
    'user1' => [
        'firstName' => 'Bart',
        'lastName' => 'Simpson',
        'age' => 14
    ]
];

/*
 >
 >=
 <
 <=
 ==
 */
if ($tab['user1']['age'] < 18) {
    echo $tab['user1']['firstName'].' '.$tab['user1']['lastName'].' est mineur';
} else {
    echo $tab['user1']['firstName'].' est majeur';
}
