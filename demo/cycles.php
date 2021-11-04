<?php

 /*
 * task 1
 * Fill the array with 10 x x using a cycle.
 */
echo 'task 1 - ';
for ($i = 1; $i <= 10; $i++) {
    $x[] = 'x';
}
print_r($x);
echo "<br>";

/*
 * Fill the array with number 1 to 10 using a cycle
 */
echo 'task 2 - ';

for ($a =1; $a <= 10; $a++) {
    $b[] = "$a";
}
print_r($b);
echo "<br>";

/*
 * task - 3
 * Fill the array with number 10 to 1 using a cycle
 */
echo 'task 3 - ';

for ($c = 10; $c > 0; $c--) {
    $d[] = "$c";
}
print_r($d);
echo "<br>";

/*
 * task 4
 * Print a column a number from 1 to 100. The problem can bee solved with either a for loop or while cycle.
 * First, lets solve it in while cycle
 */
echo 'task 4 - ';
// solution while cycle
echo 'while cycle', "<br>";
$e = 1;
while ($e <= 100) {
  //  echo $e, "<br>";
    $e++;
}

echo 'task 4 - ';
// solution for cycle
echo 'for cycle', "<br>";

for ($f = 1; $f <= 100; $f++) {
 //   echo $f, "<br>";
}

/*
 * task 5
 * Given an array with 'html', 'css', 'php', 'js', 'jq' elements. Use a foreach cycle to output these words in a column.
 */

echo 'task 5 - ', "<br>";

$dom = ['html', 'css', 'php', 'js', 'jq'];

foreach ($dom as $element) {
    echo $element, "<br>";
}

/*
 * task 6
 * You are given an array with elements 1, 2, 3, 4, 5.
 * Use the foreach cycle to find the sum of the elements of this array. Write it to the $ result variable
 */
echo 'task 6 - ';

$g = [1, 2, 3, 4, 5.];
$result = 0;

foreach ($g as $num) {
    $result = $result+$num;
}
echo $result, "<br>";

/*
 * task 7
 * A given array with elements 1, 2, 3, 4, 5.
 * Use the foreach cycle to find the sum of the squares of the elements of this array.
 * Result write the variable $ result1.
 */
echo 'task 7 - ';

$h = [1, 2, 3, 4, 5];
$result2 = 0;

foreach ($h as $num2) {
    $result2 = $result2 + ($num2 ** 2);
}

echo $result2, "<br>";

/*
 * task 8
 * Dan array $ arr. $ arr = ['green'=>'зелений',  'red'=>'червоний','blue'=>'голубий'];
 * Use the foreach cycle to display the keys and items column in 'green - зелений' format
 */
echo 'task  - 8' . "<br>";
$colour = ['green'=>'зелений',  'red'=>'червоний','blue'=>'блакитний'];

foreach ($colour as $key=>$val) {
    echo $key . ' - ' . $val . "<br>";
}

/*
 * task 9
 * Given an array $ arr with keys 'Kolya', 'Vasya', 'Petya' and elements '200', '300', '400'.
 * Use a foreach cycle to display a column of strings in the following format: 'Kolya - $ 200 salary.'
 */
echo 'task  - 9' . "<br>";

$people = [
  'Kolya' => '200',
  'Vasya' => '300',
  'Petya' => '400'
];

foreach ($people as $keyP => $valP) {
    echo $keyP . ' $' . $valP . ' salary ' . "<br>";
}