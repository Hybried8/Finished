<?php
    include 'database.php';
session_start();
if (!isset($_SESSION['uid'])) header('location: ../login.php');
$uid = $_SESSION['uid'];


    $sql="DELETE FROM todos WHERE uid = '$uid'";
    $result=mysqli_query($conn, $sql);

    if($result){
        return header("location: ../dashboard/");
    }
return header("location: ../dashboard/");
