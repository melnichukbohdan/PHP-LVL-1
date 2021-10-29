<?php

    /*
     * Get time in type string
     * and convert string to ab integer from 00 to 23
     */

    $hour = (int) strftime('%H');
    $welcome = '';

    if($hour >= 0 and $hour < 6 ) {
        $welcome = 'Good night';

    }elseif($hour >= 6 and $hour < 12 ) {
        $welcome = 'Good morning';

    }elseif($hour >= 12 and $hour < 18 ) {
        $welcome = 'Good day';

    }elseif ($hour >= 18 and $hour < 23) {
        $welcome = 'Good evening';
    }else{
        $welcome = 'Good night';
    }


?>

<!DOCTYPE html>
    <head>
        <title>PHP Level 1</title>
        <meta charset="UTF-8"/>
    </head>
    <body>

       <h1> <?php echo $welcome ?> Guest</h1>

    </body>

