<?php
session_start();

$dbconnect = mysqli_connect('localhost', 'root', '', 'guest_book');

//select data from database
$querySelect = "SELECT name, email, message FROM guest_book ORDER BY id DESC";
$select = mysqli_query($dbconnect, $querySelect);

if ($select === false) {
    echo 'error';
}

// insert data from form guest book in database
if (!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['message'])) {
    $name = str_replace("'", "\'", strip_tags(trim(($_POST['name']))));
    $email = strip_tags(trim($_POST['email']));
    $message = str_replace("'", "\'", $_POST['message']);

    $queryInsert = "INSERT INTO guest_book(name, email, message) VALUE ('$name' ,'$email','$message')";
    $insert = mysqli_query($dbconnect, $queryInsert);
    if ($insert === false) {
        echo 'error';
    }
    //initialize user post ID
    $_SESSION['postId'] = mysqli_insert_id($dbconnect);
    header('Location: /../index.php?id=guest');
    echo 'post added';

} else {
    echo 'fill in all fields';
    echo '<form action="../index.php?id=guest" method="POST">';
    echo '<input type="submit" value="Back">';
    echo '</form>';
}

// delete data from form guest book in database
if (isset($_POST['delete']) and isset($_SESSION['postId'])) {
    $postId = $_SESSION['postId'];
    $queryDelete = "DELETE FROM guest_book WHERE id = '$postId'";
    $delete = mysqli_query($dbconnect, $queryDelete);
    header('Location: /../index.php?id=guest');
    exit();

}

//this function displays all user posts in the guestbook
function renderGuestPost ($select) {

    foreach ($select as $value1) {
        foreach ($value1 as $key => $value) {
            echo  $key . '-' . $value . "<br>";
        }   echo '<form action="../inc/guestBookFormHandler.inc.php" method="post">';
            echo '<input type="hidden" name="delete" value="">
                  <input type="submit" id="delete" name="delete" value="delete post">';
            echo "</form>";
            echo "<br>  <br>";
    }
}
