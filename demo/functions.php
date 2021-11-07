<?php

/*
 * task 1
 * Make a function that returns the sum of two numbers. Numbers are passed by parameters
 */
echo 'task 1 - ';

function sun ($a, $b) {
    return $a + $b;
}

echo sun(5, 4);

echo "<br>";

/*
 * task 2
 * Make a function that subtracts the second from the first number and divides the third number
 */
echo "<br>";
echo 'task 2 - ';

function subtAndDiv ($c, $d, $e) {
  $f = ($c - $d) / $e;
    return $f;
}

echo subtAndDiv(10, 2, 2);

echo "<br>";

/*
 * task 3
 * Make a function that takes a parameter number from 1 to 7 and returns ten weeks
 */
echo "<br>";
echo 'task 3 - ';

function day($dayNumber) {
    if ($dayNumber == 1) {
        return 'Monday';
    }
    elseif ($dayNumber == 2) {
        return 'Tuesday';
    }
    elseif ($dayNumber == 3) {
        return 'Wednesday';
    }
    elseif ($dayNumber == 4) {
        return 'Thursday';
    }
    elseif ($dayNumber == 5) {
        return 'Friday';
    }
    elseif ($dayNumber == 6) {
        return 'Saturday';
    }
    elseif ($dayNumber == 7) {
        return 'Sunday';
    }
    else return 'Unknown day';
}

echo day(9);