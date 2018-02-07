<?php

$month = 3;

if ($month == 1) {
    echo 'January';
} elseif ($month == 2) {
    echo 'February';
} elseif ($month == 3) {
    echo 'March';
} // ...

switch ($month) {
    case 1:
        echo 'January';
        break;
    case 2:
        echo 'February';
        break;
    case 3:
        echo 'March';
        break;
    case 4:
        echo 'April';
        break;
    // ...
}
