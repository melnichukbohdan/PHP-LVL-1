<?php

session_start();

//check answer from questions 2
if (isset($_POST) and isset($_POST['q2c']) == 'on') {
    $_SESSION['test']['q2'] = '10';
}else{
    $_SESSION['test']['q2'] = '0';
}

?>

<div>
    <h3>questions 3</h3><br>
    <h4>calculate 2 + 4</h4><br>

    <form action="result.php" method="POST">
        <label for="q3a">a) 6</label>
        <input type="checkbox" name="q3a" id="q3a"><br>

        <label for="q3b">b) 5</label>
        <input type="checkbox" name="q3b" id="q3b"><br>

        <label for="q3c">c) 7</label>
        <input type="checkbox" name="q3c" id="q3c"><br><br>

        <input type="submit" value="finish">
    </form>

</div>
