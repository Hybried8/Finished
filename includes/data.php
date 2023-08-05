<?php

session_start();
if (!isset($_SESSION['uid'])) header('location: ../login.php');
$uid = $_SESSION['uid'];
$title = $_POST['title'];

include 'database.php';
$sql = "INSERT INTO todos(Title,uid) VALUES('$title','$uid')";

$result = mysqli_query($conn, $sql);

if ($result) {
    header("location: ../dashboard/");
} else {
    // echo "Sorry We Can't Connect";
}
