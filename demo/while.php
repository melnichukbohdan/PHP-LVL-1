<?php

$var = 'HELLO';

$strToArray = str_split($var); //conv to array
$element = count($strToArray) - 1; // count elements in array
$i = 0;

while ($i <= $element) {
    echo $strToArray[$i], "<br>";
    $i++;
}


