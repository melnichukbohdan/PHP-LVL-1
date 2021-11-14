<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['user'] = $_POST['name'];

}

?>

<div>
    <h3>questions 1</h3><br>
    <h4>calculate 3 + 3</h4><br>

    <form action="question2.php" method="POST">
        <label for="q1a">a) 6</label>
        <input type="checkbox" name="q1a" id="q1a"><br>

        <label for="q1b">b) 5</label>
        <input type="checkbox" name="q1b" id="q1b"><br>

        <label for="q1c">c) 7</label>
        <input type="checkbox" name="q1b" id="q1b"><br><br>

        <input type="submit" value="next questions">
    </form>

</div>

