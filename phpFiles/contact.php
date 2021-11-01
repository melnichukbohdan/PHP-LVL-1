<?php

$postMaxSize = ini_get('post_max_size');
$size = (int) $postMaxSize;
$letter = strlen($postMaxSize);
$letter = (string) substr("$postMaxSize", -1);

switch (strtoupper($letter)):
    case 'G' : $size = $size * 1024;
    case 'M' : $size = $size * 1024;
    case 'K' : $size = $size * 1024;
endswitch;

?>

<!DOCTYPE HTML>
    <head>

    </head>
    <body>

        <form>

        </form>
        <?php echo 'Maximum data size ', $size, ' bait' ?>

    </body>
