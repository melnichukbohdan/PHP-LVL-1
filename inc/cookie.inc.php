<?php

$date = time();

// set the site visit number
$counter = 1;

//set cookies if cookies not isset
if (!isset($_COOKIE['visiting'])) {
    setcookie("visiting", "$counter", time() + 3600 * 12);
    setcookie("lastVisit", "$date", time() + 3600 * 12);
}

//set the time last site visit
$lastVisit = '';
if (isset($_COOKIE['lastVisit']))
    $lastVisit = date('d-m-y- H:i:s', $_COOKIE['lastVisit']);

// this function count visits site and update cookie
    function counterVisit ($visit,) {

        $visit = $visit + 1;
        setcookie("visiting", "$visit", time() + 3600 * 12);
        $date = time();
        setcookie("lastVisit", "$date", time() + 3600 * 12);

        return $visit;

    }

//count visits site
$counter = $_COOKIE['visiting'];

/*
 * Regardless of the number of pages opened, the user is credited with one visit per day
 * bloked calls function everyone pages opened or click link menu
 */
        if(date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
        $counter = counterVisit($counter);
    }

//render message for user about visit number and time last visit
$renderCounterVisit = '';
if ($_COOKIE['visiting'] >= 1) {
    $renderCounterVisit = "This is your $counter visit, last time you visited our site $lastVisit";

}