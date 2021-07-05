<?php
require 'dbcon.php';

$query = "SELECT * FROM user_comment";
$result = $db_connect->query($query);

if ($result->num_rows > 0) {
    $arData = [];
    while($row = $result->fetch_assoc()) {
        $arData[] = $row;
    }
} else {
    echo "0 results";
}

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['comment'])) {
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userComment = $_POST['comment'];

   $query = "INSERT INTO user_comment VALUES (null, '$userName', '$userEmail', '$userComment')";
    if ($db_connect->query($query)) {
        exit();
    }
}

$db_connect->close();
