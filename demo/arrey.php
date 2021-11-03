<?php

/*
 * task 1
 * You are given an array with elements 'Hello,', 'world' and '!'.
 *  It is necessary to display the phrase 'Hello world!'
*/
echo 'task 1 - ';

$t1 = ['Hello ', 'World', '!'];
echo $t1[0], $t1[1], $t1[2], "<br>";

/*
 * task 1.1
 * Let's solve a slightly different problem: an array with elements 'Hello,', 'world' and '!'
 * Is given. You need to write the phrase 'Hello, world!' To the variable $ text, and then display the contents of this variable.
 */
echo 'task 2 - ';

$t2 = ['Hello ', 'World', '!'];
$text = ($t2);

echo implode(" ",$text),"<br>";

/*
 * task 3
 * Create an array $ arr with elements 1, 2, 3, 4, 5 in two different ways.
 * The first way to create an array is to declare it with []
 */

$arr = [1, 2, 3, 4, 5];

$arr2 = [
    1,
    2,
    3,
    4,
    5,
];

/*
 * task 4
 * Create an array $ arr. a => 1, b => 2, c => 3. Display the element with the key 'b'
 */
echo 'task 4 - ';

$arr3 = [
    'a' => '1',
    'b' => '2',
    'c' => '3'
];

echo $arr3['b'],"<br>";

/*
 * task 5
 * Create an array $ arr. Find the sum of the elements of this array. $ Arr = ['a' => 1, 'b' => 2, 'c' => 3];
 */

echo 'task 5 - ';

$arr4 = ['a' => 1, 'b' => 2, 'c' => 3];

$sum = $arr4['a'] + $arr4['b'] + $arr4['c'];

echo $sum,"<br>";

/*
 * task 6
 * Create an associative array of days of the week.
 * The keys in it must be the number of days from the beginning of the week
 * (Monday must have a key of 1, Tuesday –2, etc.).
 * Display the current day of the week. (For example today is Thursday) Solution: Let the current day be Thursday.
 */

echo 'task 6 - ';
$dayNumeric = 4;
$day = [
    '1' => 'Monday',
    '2' => 'Tuesday',
    '3' => 'Wednesday',
    '4' => 'Thursday',
    '5' => 'Friday',
    '6' => 'Saturday',
    '7' => 'Sunday'
];

    echo 'Today ', $day['4'],"<br>";
    echo 'Today ', $day["$dayNumeric"],"<br>";

/*
* task 7
 * A multidimensional array is given
 * $arr  = [
 * 'sp'=>['azul', 'rojo', 'verde'],
 * 'en'=>['blue', 'red', 'green'],
 * ];
 * Use it to display the word 'azul'
 */

echo 'task 7 - ';

$arr5  = [
'sp'=>['azul', 'rojo', 'verde'],
'en'=>['blue', 'red', 'green'],
];

echo $arr5['sp'][0],"<br>";
var_dump($arr5);
echo "<br>";

/*
 * task 8
 * Create an array $ arr = ['a', 'b', 'c', 'd'] and use it to display 'a + b, c + d '
 */
echo 'task 8 - ';

$arr6 = ['a', 'b', 'c', 'd'];

echo $arr6[0], '+', $arr6[1], "<br>";
echo $arr6[2], '+', $arr6[3], "<br>";

/*
 * task 9
 * Create an array $ arr with elements 2, 8, 5, 3.
 * Multiply the first element of the array by the second and the third element by the fourth.
 * Add the results, assign a variable $ a. Display the value of this variable
 */
echo 'task 9 - ';

$arr7 = [2, 8, 5, 3];

$a = ($arr7[0] * $arr7[1]) + ($arr7[2] * $arr7[3]);

echo $a;
