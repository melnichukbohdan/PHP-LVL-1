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
        ['link' => 'About us',              'href' => 'phpFiles/about.php'],
        ['link' => 'Contact',               'href' => 'phpFiles/contact.php'],
        ['link' => 'Multiplication table',  'href' => 'phpFiles/multiplicationTable.php'],
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
?>

<!DOCTYPE html>
    <head>
        <title>PHP Level 1</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/basicMarkup.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/leftSitebar.css">

    </head>
    <body>
        <!-- Header-->
        <div id="header">
            <h2 class="heaferTitle">
                <img class="mirroredLogo" src="img/logo.png">
                More than "Hello World")))
                <img class="logo" src="img/logo.png">
            </h2>
        </div>

           <!-- left sitebar-->
        <div id="leftSitebar">
            <h2 class="titleLeftSitebar">Navigation</h2>
            <?php
            drawMenu ($leftMenu);
            ?>
        </div>
        <!-- Main content-->
        <div id="content">
            <!-- greeting the guest according to the time of day-->
            <h1> <?php echo $welcome ?> Guest</h1>
            <span>
                The PHP team is pleased to announce the release of PHP 8.1.0, RC 5. This is the fifth release candidate, continuing the PHP 8.1 release cycle, the rough outline of which is specified in the PHP Wiki.
For source downloads of PHP 8.1.0, RC 5 please visit the download page.
Please carefully test this version and report any issues found in the bug reporting system.
Please DO NOT use this version in production, it is an early test version.
For more information on the new features and other changes, you can read the NEWS file or the UPGRADING file for a complete list of upgrading notes. These files can also be found in the release archive.
The next release will be the sixth and last release candidate (RC 6), planned for 11 November 2021.
The signatures for the release can be found in the manifest or on the QA site.
Thank you for helping us make PHP better.
            </span>
        </div>
        <!-- Footer-->
        <div id="footer">
            <p>
                2021
            </p>
        </div>


    </body>
