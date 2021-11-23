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
if (!empty($_POST['name']) and !empty($_POST['message'])) {
    $name = mysqli_real_escape_string($dbconnect, strip_tags(trim($_POST['name'])));
    $email = mysqli_real_escape_string($dbconnect, strip_tags(trim($_POST['email'])));
    $message =  mysqli_real_escape_string($dbconnect, strip_tags(trim($_POST['message'])));

    $queryInsert = "INSERT INTO guest_book(name, email, message) VALUE (?, ?, ?)";
    $prepareInsert = mysqli_prepare($dbconnect, $queryInsert);
    $queryInsertBindParam = mysqli_stmt_bind_param($prepareInsert, "sss", $name, $email, $message);
    mysqli_stmt_execute($prepareInsert);
    mysqli_stmt_close($prepareInsert);

    if ($prepareInsert === false) {
        echo 'error';
    }

    //initialize post ID
    $_SESSION['postId'] = mysqli_insert_id($dbconnect);
    header('Location: /../index.php?id=guest');
    echo 'post added';
    exit();
}

// delete data from form guest book in database
if (isset($_POST['delete']) and isset($_SESSION['postId'])) {
    $postId = $_SESSION['postId'];
    $queryDelete = "DELETE FROM guest_book WHERE id = '$postId'";
    $delete = mysqli_query($dbconnect, $queryDelete);
    header('Location: /../index.php?id=guest');
    exit();

}

//this function displays all user posts in the guestbook, retrieved from the database
function renderGuestPost ($arrays) {
    //divide the received result of sampling of a database into arrays
    foreach ($arrays as $array) {
        foreach ($array as $key => $value) {
            echo  $key . '-' . $value . "<br>";
        }   echo '<form action="../inc/guestBookFormHandler.inc.php" method="post">';
            echo '<input type="hidden" name="delete" value="">
                  <input type="submit" id="delete" name="delete" value="delete post">';
            echo "</form>";
            echo "<br>  <br>";
    }
}
