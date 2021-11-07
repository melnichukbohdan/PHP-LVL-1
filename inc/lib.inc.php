<?php

//draw multiplication table

function drawTable($cols, $rows, $color) {
    echo " <table >";
    for ($tr = 1; $tr <= $rows; $tr++) {
        echo "<tr>";
        for ($td = 1; $td <= $cols; $td++) {
            if ($td == 1 or $tr == 1) {
                echo "<th style='background-color:$color'>" . $tr * $td . "</th> ";
            } else {
                echo "<td>" . $tr * $td . "</td> ";
            }
        }
        echo "</tr>";

    }
    echo "</table>";
}


//Sitebar, array initialization
$leftMenu = [
    ['link' => 'Home',                  'href' => 'index.php'],
    ['link' => 'About us',              'href' => 'phpFiles/about.php'],
    ['link' => 'Contact',               'href' => 'phpFiles/contact.php'],
    ['link' => 'Table',                 'href' => 'phpFiles/multiplicationTable.php'],
    ['link' => 'Calculator',            'href' => 'phpFiles/calculator.php']

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
