<?php

require_once "inc\lib.inc.php";
require_once "inc\data.inc.php";


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
        <?php

        //  Header
        include_once "inc/top.inc.php";

        //  left sitebar
        require_once "inc/menu.inc.php";

        // Main content
        require_once "inc/index.inc.php";

        //  Footer
        require_once "inc/bottom.inc.php";

        ?>
    </body>
