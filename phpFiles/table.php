<?php



    //get data end checking conditions
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cols = abs((int) $_POST['cols']);
        $rows = abs((int) $_POST['rows']);
        $color = trim(strip_tags($_POST['color']));
    }
    if (empty($rows)) {
        $cols = 10;
    }
    if (empty($rows)) {
        $rows = 10;
    }
    if (empty($color)) {
        $color = 'yellow';
    }
?>

    <div id="content">
        <form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
            <label for="cols">Cols</label>
            <input type="number" id="cols" name="cols"
                   value="<?php echo isset($_POST['cols']) ? $_POST['cols'] : ''; ?>"><br><br>

            <label for="rows">Rows</label>
            <input type="number" id="rows" name="rows"
                   value="<?php echo isset($_POST['rows']) ? $_POST['rows'] : ''; ?>"><br><br>

            <label for="color">Сolor</label>
            <input type="color" id="color" name="color"
                   value="<?php echo isset($_POST['color']) ? $_POST['color'] : ''; ?>"><br><br>

            <input type="submit" value="Submit">
        </form>
        <br>

        <!-- render multiplication table -->

        <?php

             drawTable($cols, $rows, $color);

        ?>
    </div>

