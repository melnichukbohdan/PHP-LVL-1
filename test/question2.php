<?php

session_start();

//check answer from questions 1
if (isset($_POST) and isset($_POST['q1a']) == 'on') {
    $_SESSION['test']['q1'] = '10';
}else
    $_SESSION['test']['q1'] = '0';

?>

<div>
    <h3>questions 2</h3><br>
    <h4>calculate 3 + 4</h4><br>

    <form action="question3.php" method="POST">
        <label for="q2a">a) 6</label>
        <input type="checkbox" name="q2a" id="va"><br>

        <label for="q2b">b) 5</label>
        <input type="checkbox" name="q2b" id="q2b"><br>

        <label for="q2c">c) 7</label>
        <input type="checkbox" name="q2c" id="q2c"><br><br>

        <input type="submit" value="next questions">
    </form>

</div>
