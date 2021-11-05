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

    $menu = [
        ['link' => 'Home',                  'href' => 'index.php'],
        ['link' => 'About us',                 'href' => 'phpFiles/about.php'],
        ['link' => 'Contact',               'href' => 'phpFiles/contact.php'],
        ['link' => 'Multiplication table',  'href' => 'phpFiles/multiplicationTable.php'],
        ['link' => 'Calculator',            'href' => 'phpFiles/calculator.php']

    ];
    function drawMenu($menu, $vertical = TRUE) {
        if ($vertical) {
            echo "<ul>";
            // render link menu left sitebar as a column
            foreach ($menu as $li) {
                echo "<a href='$li[href]'>$li[link] </a><br>";
            };
            echo "</ul>";
        }else{
            echo "<ul>";
            // render link menu left sitebar as a row
            foreach ($menu as $li) {
                echo "<a href='$li[href]'>$li[link] </a>";
            };
            echo "</ul>";
        }

    }
?>

<!DOCTYPE html>
    <head>
        <title>PHP Level 1</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <!-- greeting the guest according to the time of day-->
        <h1> <?php echo $welcome ?> Guest</h1>

        <!-- Main menu-->
        <!-- left sitebar-->
        <aside>
            <h2>Navigation menu</h2>
            <?php
            drawMenu ($menu);
            ?>
        </aside>
    </body>
