<?php

?>


<div>
    <h3>Leave an entry in our guestbook</h3>
    <form action="../inc/guestBookFormHandler.inc.php" method="post">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message</label><br>
        <input type="text" id="message" name="message"
               style="height: 150px"><br><br>

        <input type="submit" value="send!">
    </form>
</div>
