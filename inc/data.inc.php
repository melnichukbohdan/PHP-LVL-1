<?php

/*
     * Get time in type string
     * and convert string to ab integer from 00 to 23
     */

$hour = strftime('%H');
$welcome = 'Good night';

if($hour >= 6 and $hour < 12 ) {
    $welcome = 'Good morning';

}elseif($hour >= 12 and $hour < 18 ) {
    $welcome = 'Good day';

}elseif ($hour >= 18 and $hour < 23) {
    $welcome = 'Good evening';
}
