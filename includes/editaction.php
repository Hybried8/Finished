<?php
session_start();
if (!isset($_SESSION['uid'])) header('location: ../login.php');
$uid = $_SESSION['uid'];

$id = $_POST['id'];
$title = $_POST['title'];

include 'database.php';
$sql = "UPDATE todos SET Title='$title' WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if (!$result) return header("location: ../dashboard/edit.php?id=" . $id);

header("location: ../dashboard/");
