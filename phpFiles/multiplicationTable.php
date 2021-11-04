<?php

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

?>

<!DOCTYPE HTML>

    <head>
    <style>
        table, td, tr {
            border: 1px solid black;
        }

    </style>
</head>
    <body>

    <!-- render multiplication table -->
<?php
    drawTable(5,6,'aqua');
?>
    </body>
