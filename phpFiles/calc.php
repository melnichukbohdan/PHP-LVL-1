<?php

$output = ''

    //reduction of data to integer type
function checkInt ($data) {
    return (int)$data;
}

    //verification of sending data for processing by POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = checkInt($_POST['num1']);
    $num2 = checkInt($_POST['num2']);
    $op = trim(strip_tags($_POST['op']));
}
    //check whether the operator field is filled in and notify the user in case the field is not filled
$message = '';
if (empty($op)) {
    $message = 'enter an operator';
}


    //function that performs mathematical calculations
function result ($num1, $op, $num2) {
    if ($op == '+') {
        return $result = $num1 + $num2;
    } elseif ($op == '-') {
        return $result = $num1 - $num2;
    } elseif ($op == '*') {
        return $result = $num1 * $num2;
    } elseif ($op == '/') {
        if ($num2 == 0) {
            $result = 'cannot be divided by 0';
        }else {
            return $result = $num1 / $num2;
        }return $result;
    } else {
        return $result = 'incorrect operator';
    }

}

    //call the calculation function if the user clicked the 'calculate' button
if(!empty($_POST)) {
    $output = result($num1, $op, $num2);
}


?>
    <!-- calculator -->
<div id="content">
    <form action="<?= $_SERVER['REQUEST_URI']?>" method="POST">
        <label for="num1">Number 1</label>
        <br>
        <input type="number" id="num1" name="num1"
               value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''  ?>">
               <br><br>

        <label for="op">Operator </label><?php if (!empty($_POST['op'])) { echo $message; } ?><br>
        <input type="text" id="op" name="op"
               value="<?php echo isset($_POST['op']) ? $_POST['op'] : ''; ?>">
               <br><br>

        <label for="num2">Number 2</label><br>
        <input type="number" id="num2" name="num2"
               value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>"><br><br>

        <input type="submit" value="calculate">
    </form>
    <br>



    <?php
        //blocks the output of the message 'enter an operator' before pressing the calculate button
        if(!empty($_POST['op'])) {
            if (!empty($message)) {
                echo $message;
            }
        }

        //blocks the output of the message 'operation result' before pressing the calculate button
        if(!empty($_POST)) {
            $render = "Result: $num1 $op $num2 =";
        }

        //render calculate operation
        if (!empty($output)){
            echo $render . ' ' . $output;
}

    ?>
</div>
