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



?>

<!DOCTYPE html>
    <head>
        <title>PHP Level 1</title>
        <meta charset="UTF-8"/>
    </head>
    <body>

        <h1> <?php echo $welcome ?> Guest</h1>

        <!-- Main menu-->
        <?php
            $leftMenu = [
                ['link' => 'Home',                  'href' => 'index.php'],
                ['link' => 'About us',              'href' => 'phpFiles/about.php'],
                ['link' => 'Contact',               'href' => 'phpFiles/contact.php'],
                ['link' => 'Multiplication table',  'href' => 'phpFiles/multiplicationTable.php'],
                ['link' => 'Calculator',            'href' => 'phpFiles/calculator.php']

            ];
        ?>

        <ul>
            <li>
                <a href='<?php echo $leftMenu [0]['href']?>'><?php  echo $leftMenu [0]['link'] ?></a>
            </li>
            <li>
                <a href="<?php echo $leftMenu [1]['href']?>"><?php  echo $leftMenu [1]['link'] ?></a>
            </li>
            <li>
                <a href="<?php echo$leftMenu [2]['href']?>"><?php  echo $leftMenu [2]['link'] ?></a>
            </li>
            <li>
                <a href="<?php echo $leftMenu [3]['href']?>"><?php  echo $leftMenu [3]['link'] ?></a>
            </li>
            <li>
                <a href="<?php echo $leftMenu [4]['href']?>"><?php  echo $leftMenu [4]['link'] ?></a>
            </li>
        </ul>


        <a href="phpFiles/contact.php">Contact</a>

    </body>
