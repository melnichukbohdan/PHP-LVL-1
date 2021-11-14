<?php

session_start();

//check answer from questions 1
if (isset($_POST) and isset($_POST['q3c']) == 'on') {

    $_SESSION['test']['q3'] = '10';
}else{
    $_SESSION['test']['q3'] = '0';
}

//this function rendered result every question
$results = $_SESSION['test'];
function result ($results) {
    $i = 1;
    foreach ($results as $key => $value) {
        echo 'question ' . $i . ' = ' . $value . ' points' . "<br>";
        $i++;
        }
}

?>

<div>
    <h3><?php echo $_SESSION['user'] ?> your result:</h3><br>
    <!-- rendered result every question-->
    <?php
        result ($results);
    ?>
    <!-- rendered total result -->
    <h4>Total points: <?php echo array_sum($results) ?></h4>

    <form action="../index.php" method="POST">

        <input type="submit" value="Home">
    </form>

</div>
