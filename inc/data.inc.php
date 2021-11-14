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

//Sitebar, array initialization
$leftMenu = [
    ['link' => 'Home',                  'href' => 'index.php'],
    ['link' => 'About us',              'href' => 'index.php?id=about'],
    ['link' => 'Contact',               'href' => 'index.php?id=contact'],
    ['link' => 'Table',                 'href' => 'index.php?id=table'],
    ['link' => 'Calculator',            'href' => 'index.php?id=calc'],
    ['link' => 'Test',                  'href' => 'index.php?id=test']

];
function drawMenu($menu, $vertical = TRUE) {
    if ($vertical) {
        echo "<ul>";
        // render link menu left sitebar as a column
        foreach ($menu as $li) {
            echo "<a class='linkButton' href='$li[href]'>$li[link] </a><br>";
        };
        echo "</ul>";
    }else{
        echo "<ul>";
        // render link menu left sitebar as a row
        foreach ($menu as $li) {
            echo "<button href='$li[href]'>$li[link] </button>";
        };
        echo "</ul>";
    }

}
