<?php

    require_once "../inc/lib.inc.php";

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
