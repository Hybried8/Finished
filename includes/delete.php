<?php
include 'database.php';
session_start();
if (!isset($_SESSION['uid'])) header('location: ../login.php');
$uid = $_SESSION['uid'];

if (!isset($_GET['id'])) return header('location: ../login.php');
$id = $_GET['id'];

$sql = "DELETE FROM todos WHERE id=$id";
$result = mysqli_query($conn, $sql);

return header("location: ../dashboard/");
