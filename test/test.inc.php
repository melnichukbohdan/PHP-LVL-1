<?php

session_start();

?>

<div>
    <form action="test/question1.php" method="POST">
        <h3>Mathematics test</h3>
        <h4>
            It is a test of basic mathematics. It has 3 questions. For each correct answer you will receive 10 points.
        </h4>
        <h4>Fill in the registration form</h4>

        <label for="name">Name</label>
        <input type="text" id="name" name="name"><br><br>

        <input type="submit" value="go go">

    </form>
</div>
<?php

?>

