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
