<?php

$postMaxSize = ini_get('post_max_size');
$size = (int) $postMaxSize;
$letter = strlen($postMaxSize);
$letter = (string) substr("$postMaxSize", -1);

switch (strtoupper($letter)) {
    case 'K' : $size = $size * 1024; break;
    case 'M' : $size = $size * 1024 ** 2; break;
    case 'G' : $size = $size * 1024 ** 3; break;
}

?>

<!DOCTYPE HTML>
    <head>

    </head>
    <body>

        <form>

        </form>
        <?php echo 'Maximum data size ', $size, ' bait' ?>

    </body>
a