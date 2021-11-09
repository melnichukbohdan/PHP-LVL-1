<?php

require_once "inc/lib.inc.php";
require_once "inc/data.inc.php";

//Initialize page titles

$title = 'Site our school';
$header = "$welcome, Guest!";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id) {
    case 'about' :
        $title = 'about site';
        $header = 'about our sitr';
        break;
    case 'contact':
        $title = 'Contact';
        $header = 'Feedback';
        break;
    case 'table':
        $title = 'Multiplication table';
        $header = 'Multiplication table';
        break;
    case 'calc':
        $title = 'Online calculator';
        $header = 'Calculator';
        break;
}


?>

<!DOCTYPE html>
    <head>
        <title><?php echo $title ?></title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="css/basicMarkup.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/leftSitebar.css">
        <link rel="stylesheet" href="css/content.css">

    </head>
    <body>

        <h1> <?php echo $header ?> Guest</h1>

        <?php

        //  Header
        include_once "inc/top.inc.php";

        //  left sitebar
        require_once "inc/menu.inc.php";

        // Main content
//        require_once "inc/index.inc.php";

        switch ($id) {
            case 'about' :
                include 'phpFiles/about.php';
                break;
            case 'contact':
                include 'phpFiles/contact.php';
                break;
            case 'table':
                include 'phpFiles/table.php';
                break;
            case 'calc':
                include 'phpFiles/calc.php';
                break;
            default:
                include 'inc/index.inc.php'; // error in line 73
        }

        //  Footer
        require_once "inc/bottom.inc.php";

        ?>
    </body>
