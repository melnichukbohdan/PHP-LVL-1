<?php
    setlocale(LC_ALL, "ukrainian" );
    $day = strftime('%d');
    $mon = strftime('%B');
    // convert encoding with windows-125 to UTF-8
    $mon = iconv("windows-1251", "UTF-8", $mon);
    $year = strftime('%Y');
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <blockquote>
            <?php
                echo "Today: $day day, $mon month, $year year.";
            ?>
        </blockquote>

        <!--footbar-->
        <div>
            <?php echo $year ?>
        </div>


    </body>

